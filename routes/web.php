<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenAuthenticate;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//  Brand List
Route::get('/brandList', [BrandController::class, 'BrandList']);

//  Category List
Route::get('/categoryList', [CategoryController::class, 'CategoryList']);

//  Product List
Route::get('/listProductByCategory/{id}', [ProductController::class, 'ListProductByCategory']);
Route::get('/listProductByBrand/{id}', [ProductController::class, 'ListProductByBrand']);
Route::get('/listProductByRemark/{remark}', [ProductController::class, 'ListProductByRemark']);

//  Slider
Route::get('/listProductSlider', [ProductController::class, 'ListProductSlider']);

//  Product Details
Route::get('/productDetailsById/{id}', [ProductController::class, 'ProductDetailsById']);
Route::get('/listReviewByProduct/{product_id}', [ProductController::class, 'ListReviewByProduct']);

//  Policy
Route::get('/policyType/{type}', [PolicyController::class, 'PolicyByType']);

//  User Auth
Route::get('/userLogin/{UserEmail}', [UserController::class, 'UserLogin']);
Route::get('/verifyLogin/{UserEmail}/{OTP}', [UserController::class, 'VerifyLogin']);
Route::get('/logout', [UserController::class, 'UserLogout']);

//  User Profile
Route::post('/createProfile', [ProfileController::class, 'CreateProfile'])->middleware([TokenAuthenticate::class]);
Route::get('/readProfile', [ProfileController::class, 'ReadProfile'])->middleware([TokenAuthenticate::class]);

//  Create Product Review
Route::post('/createProductReview', [ProductController::class, 'CreateProductReview'])->middleware([TokenAuthenticate::class]);

//  Product Wish
Route::get('/productWishList', [ProductController::class, 'ProductWishList'])->middleware([TokenAuthenticate::class]);
Route::get('/createWishList/{product_id}', [ProductController::class, 'CreateWishList'])->middleware([TokenAuthenticate::class]);
Route::get('/removeWishList/{product_id}', [ProductController::class, 'RemoveWishList'])->middleware([TokenAuthenticate::class]);

//  Product Cart
Route::post('/createCartList', [ProductController::class, 'CreateCartList'])->middleware([TokenAuthenticate::class]);
Route::get('/cartList', [ProductController::class, 'CartList'])->middleware([TokenAuthenticate::class]);
Route::get('/deleteCartList/{product_id}', [ProductController::class, 'DeleteCartList'])->middleware([TokenAuthenticate::class]);