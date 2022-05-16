<?php
use App\Models\catagory;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\controllers\catagoryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/catagory/register',[catagoryController::class,'register'])->name('catagory/register');
Route::post('/catagory/register',[catagoryController::class,'store']);
Route::get('/catagory/list', [catagoryController::class, 'get_all'])->name('catagory/list');
Route::get('/catagory/edit/{id}', [catagoryController::class, 'edit']);
Route::post('/catagory/update',[catagoryController::class,'update'])->name('catagory/update')->name('catagory/update');
Route::get('/catagory/delete/{id}', [catagoryController::class, 'delete']);
Route::get('/catagory/search/{id}', [catagoryController::class, 'search'])->name('catagory/search');
Route::get('/product/list', [ProductController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/search/{id}', [ProductController::class, 'search'])->name('product/search');
Route::get('/product/register',[productController::class,'register'])->name('product/register');
Route::post('/product/register',[ProductController::class,'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();