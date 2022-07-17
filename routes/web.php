<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SuccessCheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/detail',[DetailController::class, 'index'])->name('detail');
Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout');
Route::get('/checkout/success',[CheckoutController::class, 'success'])->name('checkout-succes');

// Route::get('/successcheckout',[SuccessCheckoutController::class, 'index'])->name('successcheckout');

// Route::get('/home', function () {
//     return view('pages.home');
// });
Route::prefix('admin')
    ->namespace('admin')
    ->group(function(){
        Route::get('/',[DashboardController::class, 'index'])
        ->name('dashboard');
    });

