<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\BillController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [HomeController::class, 'productCategory'])->name('category');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/search', [HomeController::class, 'searchProduct'])->name('search');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/post-login', [HomeController::class, 'postLogin'])->name('post-login');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [HomeController::class, 'postRegister'])->name('postregister');


Route::get('/testMail', [HomeController::class, 'testMail'])->name('testMail');




// gio hang
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('home');
    Route::get('/add/{id}', [CartController::class, 'add'])->name('add');
    Route::get('/update/{id}', [CartController::class, 'update'])->name('update');
    Route::get('/remove/{id}', [CartController::class, 'remove'])->name('remove');
    Route::get('/clear', [CartController::class, 'clear'])->name('clear');
});

Route::prefix('checkout')->name('checkout.')->group(function () {
    Route::get('/', [CheckoutController::class, 'form'])->name('checkout');
    Route::post('/', [CheckoutController::class, 'submit_form'])->name('checkout');
    Route::get('/checkBill', [CheckoutController::class, 'checkBill'])->name('checkBill');
    Route::get('/CheckProduct/{id}', [CheckoutController::class, 'getProducts'])->name('CheckProduct');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');



    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'getCategories'])->name('home');
        Route::get('/add', [CategoryController::class, 'addCategory'])->name('add');
        Route::post('/add', [CategoryController::class, 'postCategory'])->name('post-add');
        Route::get('/edit/{id}', [CategoryController::class, 'getEditCategory'])->name('edit');
        Route::post('/update/{id}', [CategoryController::class, 'postEditCategory'])->name('post-edit');
        Route::get('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete');
    });


    //Sản phẩm
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'getProduct'])->name('home');
        Route::get('/add', [ProductController::class, 'addAddProduct'])->name('add');
        Route::post('/add', [ProductController::class, 'postAddProduct'])->name('post-add');
        Route::get('/edit/{id}', [ProductController::class, 'getEditProduct'])->name('edit');
        Route::post('/update/{id}', [ProductController::class, 'postEditProduct'])->name('post-edit');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete');
    });


    //Người dùng

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'getUser'])->name('index');
        Route::get('/add', [UserController::class, 'add'])->name('add');
        Route::post('/add', [UserController::class, 'postAdd'])->name('post-add');
        Route::get('/edit/{id}', [UserController::class, 'getEdit'])->name('edit');
        Route::post('/update', [UserController::class, 'postEdit'])->name('post-edit');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
    });

    Route::prefix('groups')->name('groups.')->group(function () {
        Route::get('/', [GroupController::class, 'getGroups'])->name('home');
        Route::get('/add', [GroupController::class, 'addGroups'])->name('add');
        Route::post('/add', [GroupController::class, 'postGroup'])->name('post-add');
        Route::get('/edit/{id}', [GroupController::class, 'getEditGroup'])->name('edit');
        Route::post('/update', [GroupController::class, 'postEditGroup'])->name('post-edit');
        Route::get('/delete/{id}', [GroupController::class, 'deleteGroup'])->name('delete');
    });

    Route::prefix('bill')->name('bill.')->group(function () {
        Route::get('/', [BillController::class, 'index'])->name('bill');
        Route::get('/billProduct/{id}', [BillController::class, 'getOrder'])->name('billProduct');
    });
});
