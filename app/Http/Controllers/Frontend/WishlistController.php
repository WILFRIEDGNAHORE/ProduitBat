<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $items = Wishlist::where('user_id', Auth::id())
            ->with(['product.category', 'product.brand'])
            ->latest()
            ->get();

        return view('frontend.pages.wishlist', compact('items'));
    }

    public function toggle(Request $request)
    {
        $request->validate(['product_id' => ['required', 'exists:products,id']]);

        $existing = Wishlist::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($existing) {
            $existing->delete();
            $wishlisted = false;
        } else {
            Wishlist::create(['user_id' => Auth::id(), 'product_id' => $request->product_id]);
            $wishlisted = true;
        }

        $count = Wishlist::where('user_id', Auth::id())->count();

        return response()->json(['wishlisted' => $wishlisted, 'count' => $count]);
    }

    public function remove(Request $request)
    {
        Wishlist::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->delete();

        notyf()->success('Produit retiré de la liste de souhaits.');
        return back();
    }
}
