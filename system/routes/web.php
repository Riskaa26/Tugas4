<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/template', function () {
    return view('template3.base');
});

Route::get('Home',[Homecontroller:: class, 'showHome']);
Route::get('Category', [Homecontroller::class, 'showPCategory']);
Route::get('Promo', [Homecontroller::class, 'showPromo']);
Route::get('login', [Authcontroller::class, 'showlogin']);

Route::get('Product', [Productcontroller::class, 'index']);
Route::get('Product/create', [Productcontroller::class, 'create']);
Route::post('Product', [Productcontroller::class, 'store']);
Route::get('Product/{Product}', [Productcontroller::class, 'show']);
Route::get('Product/{Product}/edit', [Productcontroller::class, 'edit']);
Route::put('Product/{Product}', [Productcontroller::class, 'update']);
Route::delete('Product/{Product}', [Productcontroller::class, 'destroy']);
