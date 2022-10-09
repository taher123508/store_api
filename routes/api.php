<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
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

//products
Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::get('/products/search/{name}',[ProductController::class,'search']);
//categors
Route::get('categorys',[CategoryController::class,'index']);
Route::get('categorys/{id}',[CategoryController::class,'show']);
Route::get('/categorys/search/{name}',[CategoryController::class,'search']);

//check login and regiser
Route::post('/register',[authController::class,'register']);
Route::post('/login',[authController::class,'login']);
//auth
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/products',[ProductController::class,'store']);
    Route::put('/products/{id}',[ProductController::class,'update'] );
    Route::delete('/products/{id}',[ProductController::class,'destroy']);
    Route::post('/categorys',[CategoryController::class,'store']);
    Route::put('/categorys/{id}',[CategoryController::class,'update'] );
    Route::delete('/categorys/{id}',[CategoryController::class,'destroy']);
Route::post('/logout',[authController::class,'logout']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
