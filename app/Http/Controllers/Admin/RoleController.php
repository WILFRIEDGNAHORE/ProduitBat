<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::withCount('storeUsers')->with('permissions')->get();
        return view('admin.role.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::orderBy('name')->get();
        return view('admin.role.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:255'],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['exists:permissions,id'],
        ]);

        $role = Role::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
        ]);

        if ($request->permissions) {
            $role->permissions()->sync($request->permissions);
        }

        notyf()->success('Rôle créé avec succès !');
        return redirect()->route('admin.role.index');
    }

    public function edit(Role $role)
    {
        $permissions    = Permission::orderBy('name')->get();
        $rolePermIds    = $role->permissions->pluck('id')->toArray();
        return view('admin.role.edit', compact('role', 'permissions', 'rolePermIds'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'          => ['required', 'string', 'max:100'],
            'description'   => ['nullable', 'string', 'max:255'],
            'permissions'   => ['nullable', 'array'],
            'permissions.*' => ['exists:permissions,id'],
        ]);

        $role->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
        ]);

        $role->permissions()->sync($request->permissions ?? []);

        notyf()->success('Rôle mis à jour !');
        return redirect()->route('admin.role.index');
    }

    public function destroy(Role $role)
    {
        if ($role->storeUsers()->exists()) {
            notyf()->error('Ce rôle est utilisé par des utilisateurs, impossible de le supprimer.');
            return back();
        }

        $role->delete();
        notyf()->success('Rôle supprimé.');
        return back();
    }
}
