# Cahier des Charges — ProduitBat E-Commerce Mono-Entreprise

**Date :** Mai 2026  
**Version :** 1.0  
**Stack :** Laravel 12 · PHP 8.2 · Tailwind CSS · MySQL

---

## 1. Contexte & Objectif

Transformation d'un site e-commerce multi-vendeur en une plateforme e-commerce
pour une **entreprise unique** disposant de **3 boutiques physiques**.

### Structure des boutiques

| # | Nom | Rôle |
|---|-----|------|
| 1 | Boutique Centrale (Entrepôt) | Stock principal — source de tous les approvisionnements |
| 2 | Boutique A | Point de vente — stock propre alimenté depuis la Centrale |
| 3 | Boutique B | Point de vente — stock propre alimenté depuis la Centrale |

Le site e-commerce puise dans le **stock agrégé** des 3 boutiques (ou d'une boutique
désignée selon la règle métier choisie).

---

## 2. Périmètre Fonctionnel

### 2.1 Ce qu'on conserve (existant)

- Catalogue produits (catégories, marques, variantes, galerie)
- Panier & checkout
- Paiements (MoMo, GeniusPay)
- Espace client (commandes, profil, adresses)
- Flash Sale, coupons, règles de livraison
- Interface Admin (produits, catégories, commandes, paramètres)

### 2.2 Ce qu'on supprime / désactive

| Élément | Action |
|---------|--------|
| Espace vendeur public (`/vendor/register`) | Supprimer la route publique |
| Dashboard vendor | Garder en interne (réutilisé pour gestionnaires de boutique) |
| Demande de devenir vendeur (user dashboard) | Supprimer |
| `vendor_id` sur les produits | Remplacer par `store_id` (boutique source) |

### 2.3 Ce qu'on ajoute

#### A — Wishlist client
- Bouton "Ajouter aux favoris" sur chaque carte produit et page détail
- Page `/wishlist` listant les produits sauvegardés
- Toggle : ajouter / retirer (un clic)
- Compteur dans le header
- Persistance en base (table `wishlists`)

#### B — Gestion des boutiques (Stores)
- Table `stores` : nom, adresse, téléphone, type (centrale / vente)
- Chaque produit a un stock par boutique (table `store_stocks`)
- Interface admin pour voir le stock par boutique

#### C — Module Stock & Inventaire
**Entrées de stock** (réception marchandise)
- Formulaire d'entrée : produit, boutique destination, quantité, référence bon
- Historique des entrées

**Transferts inter-boutiques**
- Transfert de la Centrale vers Boutique A ou B
- Workflow : demande → validation → confirmation réception
- Réduction stock boutique source / augmentation boutique destination

**Inventaire physique**
- Saisie de l'inventaire (quantité réelle constatée)
- Écart automatique (théorique vs réel)
- Validation et ajustement du stock

**Alertes stock bas**
- Seuil configurable par produit / boutique
- Notification admin quand stock < seuil

#### D — Reporting
- Stock actuel par boutique (tableau de bord)
- Mouvements de stock (entrées, sorties, transferts)
- Rapport d'inventaire avec écarts
- Produits en rupture / stock bas

---

## 3. Règles Métier

### Stock e-commerce
- Le stock affiché sur le site = somme de toutes les boutiques (ou boutique centrale seule — à confirmer)
- Une commande décrémente le stock de la boutique ayant le plus de stock (règle FIFO boutique)
- Si stock total = 0 → bouton "Notifier" (déjà implémenté)

### Transferts
- Seul l'admin / gestionnaire peut initier un transfert
- Un transfert "en transit" bloque la quantité dans la boutique source
- La réception confirme le mouvement définitif

### Inventaire
- Un inventaire ne peut être validé que par un responsable
- La validation écrase le stock théorique par le stock réel
- Un écart est loggué dans l'historique

---

## 4. Rôles & Permissions

| Rôle | Périmètre |
|------|-----------|
| `admin` | Accès total : produits, commandes, stock, toutes boutiques |
| `store_manager` | Accès à sa boutique : stock, transferts, inventaire |
| `user` | Espace client : commandes, wishlist, profil |

---

## 5. Modèle de Données (nouvelles tables)

```sql
-- Boutiques
stores (id, name, address, phone, type[centrale|vente], status)

-- Stock par boutique
store_stocks (id, store_id, product_id, variant_item_id nullable, qty, low_stock_threshold)

-- Entrées de stock
stock_entries (id, store_id, product_id, qty, reference, note, created_by, created_at)

-- Transferts
stock_transfers (
  id, from_store_id, to_store_id, product_id, qty_requested, qty_received,
  status[pending|approved|in_transit|received|cancelled],
  requested_by, approved_by, received_by,
  requested_at, approved_at, received_at, note
)

-- Inventaires
stock_inventories (id, store_id, status[draft|validated], validated_by, validated_at, note)
stock_inventory_lines (id, inventory_id, product_id, qty_theoretical, qty_counted, ecart)

-- Wishlist
wishlists (id, user_id, product_id, created_at)
```

---

## 6. Plan d'Implémentation

### Phase 1 — Nettoyage multi-vendor (3–5 jours)
- [ ] Supprimer la route publique `/vendor/register`
- [ ] Masquer "Devenir vendeur" dans le dashboard client
- [ ] Retirer `vendor_id` de l'affichage produit (garder en DB pour ne pas casser)
- [ ] Adapter le checkout : plus de calcul par vendor, tout passe en admin

### Phase 2 — Wishlist (3–5 jours)
- [ ] Migration `wishlists`
- [ ] Model `Wishlist` + relation `User::wishlists`
- [ ] `WishlistController` : toggle (AJAX), index
- [ ] Bouton cœur sur cards produits et page détail
- [ ] Compteur header
- [ ] Page `/wishlist` client

### Phase 3 — Boutiques & stock de base (1 semaine)
- [ ] Migration `stores` + seeder 3 boutiques
- [ ] Migration `store_stocks`
- [ ] Interface admin : liste boutiques, stock par boutique par produit
- [ ] Adapter `$product->qty` pour agréger les stocks des boutiques
- [ ] Formulaire admin : ajuster stock par boutique manuellement

### Phase 4 — Entrées de stock (4–5 jours)
- [ ] Migration `stock_entries`
- [ ] Interface admin : formulaire réception marchandise
- [ ] Historique des entrées filtrables (boutique, produit, date)
- [ ] Mise à jour automatique `store_stocks` à la validation

### Phase 5 — Transferts inter-boutiques (1 semaine)
- [ ] Migration `stock_transfers`
- [ ] Interface : initier un transfert (admin / gestionnaire)
- [ ] Workflow statuts : pending → approved → in_transit → received
- [ ] Notifications par email à chaque changement de statut
- [ ] Blocage du stock en transit dans la boutique source

### Phase 6 — Inventaire physique (1 semaine)
- [ ] Migrations `stock_inventories` + `stock_inventory_lines`
- [ ] Interface : créer un inventaire, saisir les quantités réelles
- [ ] Calcul automatique des écarts
- [ ] Validation : ajustement du stock réel
- [ ] Historique des inventaires validés

### Phase 7 — Alertes & Reporting (4–5 jours)
- [ ] Alertes stock bas (queue job ou check à chaque vente)
- [ ] Dashboard stock : vue globale par boutique
- [ ] Rapport mouvements (CSV exportable)
- [ ] Rapport inventaire avec écarts

---

## 7. Estimations

| Phase | Durée estimée |
|-------|--------------|
| 1 - Nettoyage multi-vendor | 3–5 jours |
| 2 - Wishlist | 3–5 jours |
| 3 - Boutiques & stock de base | 5–7 jours |
| 4 - Entrées de stock | 4–5 jours |
| 5 - Transferts | 5–7 jours |
| 6 - Inventaire physique | 5–7 jours |
| 7 - Alertes & Reporting | 4–5 jours |
| **Total** | **~6–7 semaines** |

---

## 8. Questions à trancher avant implémentation

1. **Stock e-commerce** : agrège-t-on les 3 boutiques ou uniquement la Centrale ?
2. **Décrémentation** : quand une commande est passée, dans quelle boutique retire-t-on le stock ?
3. **Gestionnaires de boutique** : créer un rôle `store_manager` distinct, ou les admins gèrent tout ?
4. **Notifications** : email seulement, ou SMS aussi (MoMo) pour les alertes stock ?
5. **App mobile** : le front responsive actuel suffit-il, ou faut-il une PWA / app native à terme ?
