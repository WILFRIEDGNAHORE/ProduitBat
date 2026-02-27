# Bilan complet des bugs résolus — ProduitBat

## Résumé rapide

| # | Fichier(s) concerné(s) | Problème | Statut |
|---|------------------------|----------|--------|
| 1 | `SliderDataTable.php` | Boutons Edit/Delete masqués pour slider id=1 | ✅ Corrigé |
| 2 | 6 DataTables | Images invisibles (avatar span → img) | ✅ Corrigé |
| 3 | `admin/layouts/layout.blade.php` | Double jQuery + Summernote mal chargé | ✅ Corrigé |
| 4 | `admin/product/create.blade.php` | Sous-catégories bloquées + Summernote = textarea | ✅ Corrigé |
| 5 | `vendor/layouts/layout.blade.php` | $ undefined, Summernote CSS absente, double JS | ✅ Corrigé |
| 6 | `vendor/product/create.blade.php` | Sous-catégories bloquées + Summernote = textarea | ✅ Corrigé |
| 7 | `VendorProductDataTable.php` | Query filtre ignoré (`newQuery()` au mauvais endroit) | ✅ Corrigé |
| 8 | `resources/js/vendor.js` | DataTables non importé → DataTable vide côté vendor | ✅ Corrigé |
| 9 | `VendorProductDataTable.php` | `thumb_image` invisible (avatar span) | ✅ Corrigé |
| — | Seeders + Models | BrandSeeder, ProductSeeder, `$fillable` manquant | ✅ Ajouté |

---

## Détail des corrections

### Bug 1 — Boutons Edit/Delete masqués (SliderDataTable)

**Fichier :** `app/DataTables/SliderDataTable.php`

**Problème :** Condition `if ($query->id == 1) { return ''; }` — reliquat de code de test — cachait les boutons d'action pour le slider ayant l'`id = 1`.

**Correction :** Suppression de la condition. Tous les sliders affichent maintenant leurs boutons.

---

### Bug 2 — Images invisibles dans les DataTables

**Fichiers concernés :**
- `app/DataTables/SliderDataTable.php` — colonne `banner`
- `app/DataTables/ApprovedVendorDataTable.php` — colonne `image`
- `app/DataTables/ManageAdminsDataTable.php` — colonnes `image` et `created_by`
- `app/DataTables/ManageUsersDataTable.php` — colonne `image`
- `app/DataTables/VendorRequestsDataTable.php` — colonne `image`
- `app/DataTables/VendorProductDataTable.php` — colonne `thumb_image`

**Problème :** Rendu via `<span class="avatar avatar-xl" style="background-image: url(...)">`. Quand l'image est `null`, l'URL reçoit la chaîne `'Image Not Updated'` → le span n'a aucune dimension visible (comportement Tabler).

**Correction :**
```php
if ($query->image) {
    return '<img src="' . asset($query->image) . '" style="width:60px; height:60px; object-fit:cover; border-radius:4px;" />';
}
return '<span class="text-muted">No Image</span>';
```
> Pour `created_by` (avatar circulaire) : `border-radius:50%`.

**Bonus :** Double `->rawColumns()` dans `VendorRequestsDataTable.php` (le premier était écrasé par le second) — supprimé.

---

### Bugs 3 & 4 — Admin : sous-catégories bloquées + Summernote = textarea

**Fichiers :** `admin/layouts/layout.blade.php` + `admin/product/create.blade.php`

**Cause racine (deux couches) :**

**Couche 1 — Ordre de chargement :** Summernote se chargeait avant jQuery CDN → `$.fn.summernote` indisponible → erreur JS → handlers de catégories jamais enregistrés.

**Couche 2 — Timing Vite ES modules :** Les modules `type="module"` sont **différés** (s'exécutent après le parsing HTML mais avant `DOMContentLoaded`). Même avec le bon ordre de chargement :
```
① @stack/scripts (inline) → ready(fn) enregistré sur CDN jQuery ✓
② Vite admin.js (module différé) → window.$ = ViteJQuery (sans Summernote) ✗
③ DOMContentLoaded → ready(fn) se déclenche avec ViteJQuery → $.fn.summernote undefined
```
`$(document).ready()` ne suffit pas : `window.$` est remplacé avant que le callback ne s'exécute.

**Corrections layout.blade.php (admin) :**
- Suppression du chargement Summernote en double (avant jQuery → inutile)
- Déplacement de Summernote après CDN jQuery
- Suppression du chargement en double de `app.js`

**Correction create.blade.php (admin) — pattern IIFE :**
```javascript
// Capture window.$ (CDN jQuery + Summernote) AVANT que Vite le remplace
(function($) {
    $('.category').on('change', function() { /* AJAX sub-catégories */ });
    $('.sub-category').on('change', function() { /* AJAX child catégories */ });
    window.Litepicker && document.querySelectorAll('.datepicker').forEach(/* ... */);
    if ($.fn.summernote) {
        $('.summernote').summernote({ height: 200, toolbar: [...] });
    }
}(window.$));
```
L'argument `window.$` est évalué à l'exécution synchrone du script — avant que le module Vite différé ne l'écrase.

---

### Bugs 5 & 6 — Vendor : même problème que l'admin + Summernote CSS absente

**Fichiers :** `vendor/layouts/layout.blade.php` + `vendor/product/create.blade.php`

**Problèmes supplémentaires (vendor) :**
- `vendo/js/vendor.js` (Tabler) définit `window.jQuery` mais **pas `window.$`**
- Aucun CDN jQuery → `$` était `undefined` quand `@stack('scripts')` s'exécutait
- Summernote JS chargé **avant** tout jQuery → ne s'enregistrait pas comme plugin
- Summernote JS chargé **en double**
- Summernote **CSS absente** → toolbar affichée comme des blocs cassés

**Corrections layout.blade.php (vendor) :**
1. CSS Summernote ajoutée dans `<head>`
2. Summernote JS en double supprimé
3. CDN jQuery ajouté après les bundles Tabler
4. `resources/js/vendor.js` (Vite) modifié pour importer jQuery + DataTables (voir Bug 8)

**Correction create.blade.php (vendor) :**
Même pattern IIFE que la version admin.

---

### Bug 7 — VendorProductDataTable : filtre vendor ignoré

**Fichier :** `app/DataTables/VendorProductDataTable.php`

**Problème :**
```php
// ❌ newQuery() crée un builder vide → where() est perdu
return $model->where('vendor_id', '=', Auth::user()->id)->newQuery();
```

**Correction :**
```php
// ✅ newQuery() d'abord, puis where() — même pattern que AdminProductDataTable
return $model->newQuery()->where('vendor_id', '=', Auth::user()->id);
```

---

### Bug 8 — DataTable non fonctionnel côté vendor (DataTables non chargé)

**Fichiers :** `resources/js/vendor.js` + `vendor/layouts/layout.blade.php`

**Problème :** `admin.js` (Vite) importait DataTables via `import './datatables'`, mais `vendor.js` (Vite) n'importait ni jQuery ni DataTables → le module d'initialisation `$dataTable->scripts(type="module")` n'avait aucun accès à DataTables.

**Correction dans `resources/js/vendor.js` :**
```javascript
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

import './datatables';
```

**Suppression du CDN DataTables** du layout vendor (désormais fourni par Vite).

**Ordre d'exécution final (vendor) :**
```
① vendo/js/vendor.js, app.js, widgets.js (regular scripts)
② CDN jQuery (regular)      → window.$ = jQuery A
③ CDN Summernote (regular)  → attache à jQuery A (window.$)
④ @stack('scripts')         → DataTable init (type="module", différé)
─── HTML parsé ───
⑤ Vite vendor.js (module)   → window.$ = jQuery B + DataTables ✓
⑥ DataTable init (module)   → window.$ = jQuery B + DataTables ✓
⑦ DOMContentLoaded
```

---

## Ajouts (seeders et modèles)

### BrandSeeder
**Fichier :** `database/seeders/BrandSeeder.php`

8 marques de matériaux de construction : Weber, Knauf, Isover, Legrand, Grohe, Schneider Electric, Lafarge, Saint-Gobain.

### ProductSeeder
**Fichier :** `database/seeders/ProductSeeder.php`

- **5 produits admin** : `vendor_id=0`, `admin_id=1`, `is_approved=1`
- **5 produits vendor** : `vendor_id=1`, `admin_id=null`

### $fillable manquant sur les modèles
- `app/Models/Product.php` — tous les champs de la migration ajoutés
- `app/Models/Brand.php` — `name`, `slug`, `logo`, `is_featured`, `status`

---

## Message de commit suggéré

```
fix: resolve DataTable, Summernote and jQuery conflicts across admin and vendor panels

- Remove hidden action buttons condition for slider id=1 in SliderDataTable
- Replace invisible avatar spans with <img> tags in 6 DataTable image columns
- Fix jQuery/Summernote loading order in admin and vendor layouts (CDN + Vite coexistence)
- Replace $(document).ready() with IIFE pattern in admin/vendor product create pages
  to capture CDN jQuery+Summernote before deferred Vite module overwrites window.$
- Fix VendorProductDataTable query: move newQuery() before where() (filter was silently dropped)
- Import jQuery and DataTables in resources/js/vendor.js via Vite (mirrors admin.js pattern)
- Add $fillable to Product and Brand models
- Add BrandSeeder (8 construction brands) and ProductSeeder (5 admin + 5 vendor products)
```
