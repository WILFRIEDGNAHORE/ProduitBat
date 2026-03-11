<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ShippingRule;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
    $addresses = UserAddress::where(['user_id' => Auth::user()->id])->orderby('id', 'DESC')->get();
    $rules = ShippingRule::where('status', 1)->get();
    $cartItems = Cart::content();
    return view('frontend.pages.checkout', compact('addresses', 'rules', 'cartItems'));
}
}