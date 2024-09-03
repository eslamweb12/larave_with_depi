<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\logoutController;


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
//Route::middleware(['App\Http\Middleware\check_user'])->group(function () {
//    Route::get('/about',[AboutController::class,'index']);
//
//
//});
//
//
//Route::get('/user',[\App\Http\Controllers\UserController::class,'index']);
//Route::get('/profile/{id}',[\App\Http\Controllers\UserController::class,'profile']);
//Route::prefix('/profile')->group(function(){
//    Route::get('/order',[\App\Http\Controllers\UserController::class,'order']);
//
//});
//Route::get('/order/{id}',[\App\Http\Controllers\UserController::class,'order'])->where('id',[0-9]);

//Route::get('/contact/store',[\App\Http\Controllers\ContactController::class,'store'])->name('store');


//get this url if the method get or post

Route::match(['get','post'],'/home',function(){
    return view('welcom');

});

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/saveContact',[contactController::class, 'save'])->name('saveContact');


//get this url if the method any kind get or post or delete
Route::any('/about',function (){
    return view('about');
});


//but a constraint on the route
$route = Route::get('/products/{id}', function () {
    return view('products');
})->where('id','[0-9]+');


//prefix to breif the url
Route::prefix('/orders')->group(function(){


    //the url will be  localhost/orders/product
    Route::get('/product',function(){
        return view('orders.product');
    });


});
//using the middelware with routes
 // make middleware => php artisan make:middleware chekuser
   //write it in the kernal file      protected $middlewareAliases = [
                  //all other middleware

           //        'check_user'=>check_user::class,
 //    ];
//now use it with the route
Route::middleware(['checkuser'])->prefix('/orders')->group(function(){
    Route::get('/product',function(){
        return view('orders.product');
    });
});


Route::view('/register','register')->name('register');
Route::post('/store',[UserController::class,'store'])->name('userStore');

Route::view('/login','login')->name('login');
Route::post(   '/check',[\App\Http\Controllers\loginController::class,'login'])->name('storeLogin');
Route::get('/logout',[\App\Http\Controllers\logoutController::class,'logout'])->name('logout');


Route::get('/dashboard/users',[AdminController::class,'dashboard']);

