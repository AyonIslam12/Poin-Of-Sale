<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[SiteController::class,'index'])->name('home');

Route::group([
    'prefix' => 'json',
], function () {
    Route::get('/latest-products-json', [SiteController::class,'latest_product_json'])->name('product_latest_product_json');
    //Route::get('/search-product-json/{key}',[SiteController::class,'search_product_json'])->name('product_search_product_json');

});
