<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Product
Route::get('/', [UserController::class, 'index']);

//Register
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);

//Login
Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);

//Logout
Route::post('/logout', [UserController::class, 'logout']);

//AddProduct
Route::get('/addProduct', [ProductController::class, 'addProduct'])->middleware('auth');
Route::post('/saveProduct', [ProductController::class, 'saveProduct'])->middleware('auth');

//Edit
Route::get('edit/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::post('updateProduct', [ProductController::class, 'updateProduct'])->middleware('auth');

//Delete
Route::get('delete/{id}', [ProductController::class, 'delete'])->middleware('auth');





//Product
Route::get('/products', [ProductController::class, 'index']);

//AddProduct
Route::get('/addProduct', [ProductController::class, 'addProduct']);
Route::post('/saveProduct', [ProductController::class, 'saveProduct']);

//Edit
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('updateProduct', [ProductController::class, 'updateProduct']);

//Delete
Route::get('delete/{id}', [ProductController::class, 'delete']);
