<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FlashSaleController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\User\UserAddressController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\OrderController as UserOrderController;
use Illuminate\Support\Facades\Route;

// =========================================================
//  Webhook GeniusPay — HORS auth (GeniusPay appelle sans session)
// =========================================================
Route::post('webhooks/geniuspay', [PaymentController::class, 'geniusWebhook'])->name('webhooks.geniuspay');

// =========================================================
//  User Routes
// =========================================================
Route::group(['middleware' => ['auth', 'verified', 'check_role:user'], 'prefix' => 'user', 'as' => 'user.'], function () {

    Route::resource('order', UserOrderController::class);


    // ── Paiement ──────────────────────────────────────────
    Route::get('payment',                [PaymentController::class, 'index'])->name('payment.index');

    // MTN MoMo
    Route::get('payment/momo',           [PaymentController::class, 'payWithMomo'])->name('payment.momo');
    Route::post('payment/momo/initiate', [PaymentController::class, 'initiateMomoPayment'])->name('payment.momo.initiate');
    Route::get('payment/momo/status',    [PaymentController::class, 'checkMomoStatus'])->name('payment.momo.status');

    // GeniusPay
    Route::get('payment/genius',         [PaymentController::class, 'payWithGenius'])->name('payment.genius');
    Route::get('payment/genius/success', [PaymentController::class, 'geniusSuccess'])->name('payment.genius.success');
    Route::get('payment/genius/failed',  [PaymentController::class, 'geniusFailed'])->name('payment.genius.failed');

    // Pages résultat partagées
    Route::get('payment/success',        [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('payment/failed',         [PaymentController::class, 'paymentFailed'])->name('payment.failed');

    // ── Checkout ──────────────────────────────────────────
    Route::post('checkout/form-submit',  [CheckoutController::class, 'checkoutFormSubmit'])->name('checkout.form.submit');
    Route::get('checkout',               [CheckoutController::class, 'index'])->name('checkout.index');

    // ── Autres ────────────────────────────────────────────
    Route::resource('address',        UserAddressController::class);
    Route::resource('profile',        UserProfileController::class);
    Route::get('dashboard',           [UserDashboardController::class, 'index'])->name('dashboard');
});

// =========================================================
//  Vendor Routes — DÉSACTIVÉ (pivot mono-entreprise)
// =========================================================
// Route::group(['middleware' => ['auth', 'verified', 'check_role:vendor'], 'prefix' => 'vendor', 'as' => 'vendor.'], function () { ... });

// =========================================================
//  Frontend Routes
// =========================================================
Route::post('coupon-calculation', [CartController::class, 'couponCalculation'])->name('coupon.calculation');
Route::post('apply-coupon',       [CartController::class, 'applyCoupon'])->name('coupon.apply');
Route::get('cart/sub-total',      [CartController::class, 'getSubTotal'])->name('cart-sub-total');
Route::get('cart/remove-item/{rowid}', [CartController::class, 'removeItem'])->name('cart-remove-item');
Route::delete('cart/clear-cart/{id}', [CartController::class, 'clearCart'])->name('clear-cart');
Route::post('cart/qty-update',    [CartController::class, 'updateQty'])->name('qty-update');
Route::get('cart-details',        [CartController::class, 'cartDetails'])->name('cart-details');
Route::get('cart-count',          [CartController::class, 'getCartCount'])->name('cart-count');
Route::post('add-to-cart',        [CartController::class, 'addToCart'])->name('add-to-cart');
Route::resource('product-details', ProductDetailsController::class);
Route::resource('flash-sale',      FlashSaleController::class);
Route::get('nos-produits',         [ShopController::class, 'index'])->name('shop.index');
Route::get('/',                    [HomeController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('wishlist',          [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('wishlist/toggle',  [WishlistController::class, 'toggle'])->name('wishlist.toggle');
    Route::post('wishlist/remove',  [WishlistController::class, 'remove'])->name('wishlist.remove');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';