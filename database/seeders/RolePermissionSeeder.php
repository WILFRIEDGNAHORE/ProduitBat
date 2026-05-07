<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            ['name' => 'Voir le stock',         'slug' => 'view_stock',       'description' => 'Consulter le stock des boutiques'],
            ['name' => 'Modifier le stock',     'slug' => 'edit_stock',       'description' => 'Ajuster les quantités en stock'],
            ['name' => 'Voir les commandes',    'slug' => 'view_orders',      'description' => 'Consulter les commandes'],
            ['name' => 'Gérer les commandes',   'slug' => 'manage_orders',    'description' => 'Modifier le statut des commandes'],
            ['name' => 'Voir les produits',     'slug' => 'view_products',    'description' => 'Consulter la liste des produits'],
            ['name' => 'Gérer les produits',    'slug' => 'manage_products',  'description' => 'Créer et modifier des produits'],
            ['name' => 'Voir les rapports',     'slug' => 'view_reports',     'description' => 'Accéder aux rapports et statistiques'],
            ['name' => 'Gérer les utilisateurs','slug' => 'manage_users',     'description' => 'Assigner des utilisateurs aux boutiques'],
        ];

        foreach ($permissions as $data) {
            Permission::firstOrCreate(['slug' => $data['slug']], $data);
        }

        $roles = [
            [
                'name'        => 'Gestionnaire',
                'slug'        => 'gestionnaire',
                'description' => 'Responsable d\'une boutique',
                'permissions' => ['view_stock', 'edit_stock', 'view_orders', 'manage_orders', 'view_products', 'manage_products', 'view_reports'],
            ],
            [
                'name'        => 'Vendeur',
                'slug'        => 'vendeur',
                'description' => 'Employé de vente en boutique',
                'permissions' => ['view_stock', 'view_orders', 'view_products'],
            ],
            [
                'name'        => 'Caissier',
                'slug'        => 'caissier',
                'description' => 'Responsable des encaissements',
                'permissions' => ['view_orders', 'manage_orders', 'view_products'],
            ],
            [
                'name'        => 'Magasinier',
                'slug'        => 'magasinier',
                'description' => 'Responsable du stock',
                'permissions' => ['view_stock', 'edit_stock', 'view_products'],
            ],
        ];

        foreach ($roles as $data) {
            $permSlugs = $data['permissions'];
            unset($data['permissions']);

            $role = Role::firstOrCreate(['slug' => $data['slug']], $data);

            $permIds = Permission::whereIn('slug', $permSlugs)->pluck('id');
            $role->permissions()->syncWithoutDetaching($permIds);
        }

        $this->command->info('Permissions et rôles créés avec succès.');
    }
}
