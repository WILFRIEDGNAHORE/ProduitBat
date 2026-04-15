<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->user_status === 'banned') {
            Auth::guard('web')->logout();
            session()->invalidate();
            session()->regenerateToken();
            notyf()->error('Your account is banned. Please contact support!');
            return redirect('/');
        }

        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->with('orderProducts')->latest()->get();
        $addresses = UserAddress::where('user_id', $user->id)->get();

        return view('user.dashboard', compact('orders', 'addresses'));
    }
}