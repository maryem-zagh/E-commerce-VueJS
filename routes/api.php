<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('products', [ProductController::class, 'index']);
Route::get('categories', [ProductController::class, 'getCategories']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::get('products/related/{product}', [ProductController::class, 'relatedProducts']);
Route::get('products/category/{slug}', [ProductController::class, 'filterProductsBycategory']);
Route::post('purchase', [UserController::class, 'purchase']);

// Route::post('purchase', [OrderController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
