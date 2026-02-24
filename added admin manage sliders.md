Ce commit ajoute la fonctionnalité complète de gestion des sliders (bannières) pour les administrateurs. Voici les principaux changements :

📁 Fichiers ajoutés :
app/Models/Slider.php - Modèle Eloquent pour les sliders
app/DataTables/SliderDataTable.php - Classe DataTable avec affichage des colonnes (image, statut, créateur, etc.)
app/Http/Controllers/Admin/SliderController.php - Contrôleur CRUD complet (create, read, update, delete)
database/migrations/2025_06_05_152729_create_sliders_table.php - Migration pour créer la table sliders
Views Blade :
resources/views/Admin/slider/index.blade.php - Liste des sliders
resources/views/Admin/slider/create.blade.php - Formulaire de création
resources/views/Admin/slider/edit.blade.php - Formulaire de modification
🔧 Fichiers modifiés :
Datables (sécurité renforcée) - Ajout de vérifications Auth::id() === 1 pour restreindre les actions de suppression uniquement au super-admin :

ApprovedVendorDataTable.php
ManageAdminsDataTable.php
ManageUsersDataTable.php
VendorRequestsDataTable.php
Contrôleurs - Ajout de vérifications d'authentification dans les méthodes destroy() :

ApprovedVendorController.php
ManageAdminController.php (améliorations formatage + protections ID=1)
ManageUserController.php
VendorRequestController.php
Routes (routes/admin.php) - Ajout du resource route : Route::resource('slider', SliderController::class);

UI - Mise à jour de la barre latérale pour ajouter un menu "Manage Sections" avec lien vers "Manage Sliders"

Frontend - Mise à jour du menu principal avec vrais liens vers login/register/vendor register

📊 Champs de la table sliders :
id, banner (image), type, title, starting_price, btn_url, serial, created_by, status, timestamps
Total : 634 additions, 21 deletions