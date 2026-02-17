Étape 1 — Nettoyage CDN
Supprimé le <link> CDN DataTables CSS (ligne 27)
Supprimé les 3 <script> CDN : jQuery, dataTables.min.js, dataTables.bootstrap5.min.js (lignes 219-223)
Étape 2 — Packages npm
Déjà installés : jquery, datatables.net, datatables.net-bs5
Étape 3 — Configuration Vite
admin.js importe jQuery et l'expose globalement (window.$ / window.jQuery)
Le CSS DataTables Bootstrap 5 est importé via Vite (plus de CDN)
Étape 4 — Initialisation centralisée
Créé datatables.js :
Importe le CSS dataTables.bootstrap5.min.css
Importe DataTable depuis datatables.net-bs5
Auto-initialise toutes les tables avec la classe .datatable au DOMContentLoaded
Exporte DataTable pour usage personnalisé dans d'autres scripts
Note : Le vendor.js du thème embarque aussi jQuery. Les deux coexistent sans conflit car window.$ est réassigné par le module npm via Vite. Si vous souhaitez éviter le doublon, il faudrait reconstruire le vendor.js du thème sans jQuery (mais c'est un fichier tiers minifié).

Usage : Il suffit d'ajouter la classe datatable à n'importe quel <table> pour qu'il soit automatiquement initialisé.