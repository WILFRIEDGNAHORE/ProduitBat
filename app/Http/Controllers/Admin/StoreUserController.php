<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Store;
use App\Models\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;

class StoreUserController extends Controller
{
    public function index(Request $request)
    {
        $stores  = Store::where('status', true)->get();
        $storeId = $request->get('store_id', $stores->first()?->id);
        $store   = Store::find($storeId);

        $assignments = StoreUser::where('store_id', $storeId)
            ->with(['user', 'role'])
            ->get();

        $roles       = Role::orderBy('name')->get();
        $allUsers    = User::where('user_status', 1)->orderBy('name')->get();
        $assignedIds = $assignments->pluck('user_id')->toArray();

        return view('admin.store-user.index', compact(
            'stores', 'store', 'storeId', 'assignments', 'roles', 'allUsers', 'assignedIds'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'store_id' => ['required', 'exists:stores,id'],
            'user_id'  => ['required', 'exists:users,id'],
            'role_id'  => ['required', 'exists:roles,id'],
        ]);

        StoreUser::updateOrCreate(
            ['store_id' => $request->store_id, 'user_id' => $request->user_id],
            ['role_id'  => $request->role_id]
        );

        notyf()->success('Utilisateur assigné à la boutique.');
        return back();
    }

    public function update(Request $request, StoreUser $storeUser)
    {
        $request->validate([
            'role_id' => ['required', 'exists:roles,id'],
        ]);

        $storeUser->update(['role_id' => $request->role_id]);

        notyf()->success('Rôle mis à jour.');
        return back();
    }

    public function destroy(StoreUser $storeUser)
    {
        $storeUser->delete();
        notyf()->success('Utilisateur retiré de la boutique.');
        return back();
    }
}
