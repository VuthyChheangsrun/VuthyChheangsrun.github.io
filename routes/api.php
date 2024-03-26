<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use app\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/test', function (Request $request) {
    return "test";
});

Route::get('/', function (Request $request) { return "Welcome page"; });

Route::middleware(['auth:api','authorization:admin'])->group(function() {


Route::get('/categories', [CategoryController::class, 'getCategories']);
Route::post('/categories', [CategoryController::class, 'createCategory']);
Route::get('/categories/{categoryId}', [CategoryController::class, 'getCategory']);
Route::patch('/categories/{categoryId}', [CategoryController::class, 'updateCategories']);
Route::delete('/categories/{categoryId}', [CategoryController::class, 'deleteCategories']);


Route::get('/products', [ProductController::class, 'getProducts']);
Route::post('/products', [ProductController::class, 'createProducts']);
Route::get('/products/{productId}', [ProductController::class, 'getProduct']);
Route::patch('/products/{productId}', [ProductController::class, 'updateProducts']);
Route::delete('/products/{productId}', [ProductController::class, 'deleteProducts']);
Route::get('/categories/{categoryId}/products', [ProductController::class, 'getAllProductsOfCategory']);

});

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);
