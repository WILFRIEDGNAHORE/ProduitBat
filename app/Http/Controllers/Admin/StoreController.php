<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::latest()->get();
        return view('admin.store.index', compact('stores'));
    }

    public function create()
    {
        return view('admin.store.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'type'    => ['required', 'in:centrale,vente'],
            'address' => ['nullable', 'string'],
            'phone'   => ['nullable', 'string', 'max:20'],
            'email'   => ['nullable', 'email'],
            'city'    => ['nullable', 'string', 'max:100'],
            'note'    => ['nullable', 'string'],
        ]);

        Store::create([
            'name'    => $request->name,
            'type'    => $request->type,
            'address' => $request->address,
            'phone'   => $request->phone,
            'email'   => $request->email,
            'city'    => $request->city,
            'note'    => $request->note,
            'status'  => $request->boolean('status', true),
        ]);

        notyf()->success('Boutique créée avec succès !');
        return redirect()->route('admin.store.index');
    }

    public function show(string $id) {}

    public function edit(string $id)
    {
        $store = Store::findOrFail($id);
        return view('admin.store.edit', compact('store'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'type'    => ['required', 'in:centrale,vente'],
            'address' => ['nullable', 'string'],
            'phone'   => ['nullable', 'string', 'max:20'],
            'email'   => ['nullable', 'email'],
            'city'    => ['nullable', 'string', 'max:100'],
            'note'    => ['nullable', 'string'],
        ]);

        $store = Store::findOrFail($id);
        $store->update([
            'name'    => $request->name,
            'type'    => $request->type,
            'address' => $request->address,
            'phone'   => $request->phone,
            'email'   => $request->email,
            'city'    => $request->city,
            'note'    => $request->note,
            'status'  => $request->boolean('status', true),
        ]);

        notyf()->success('Boutique mise à jour avec succès !');
        return redirect()->route('admin.store.index');
    }

    public function destroy(string $id)
    {
        $store = Store::findOrFail($id);
        $store->delete();

        notyf()->success('Boutique supprimée !');
        return response(['status' => 'success']);
    }
}
