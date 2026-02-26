
## 5. Comment utiliser

```bash
# Lancer toutes les migrations
php artisan migrate

# Lancer tous les seeders (inclut CategorySeeder)
php artisan db:seed

# Ou uniquement le CategorySeeder
php artisan db:seed --class=CategorySeeder
```

---

## 6. Architecture du menu (résumé visuel)

```
[Explore All Categories]
  └── Gros Œuvre                      ← Category (icône + nom)
        └── Béton & Ciment            ← SubCategory
              └── Béton prêt à l'emploi  ← ChildCategory
              └── Ciment Portland
              └── ...
        └── Briques & Parpaings
        └── Acier & Armatures
  └── Menuiserie
        └── ...
```
