<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
Route::get('Admin', 'AdminController@create')->middleware('Adminposts');
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,"index"]);

Route::get('/redirects', [HomeController::class,"redirects"]);

Route::get('/users', [AdminController::class,"user"]);

Route::get('/deleteuser/{id}', [AdminController::class,"deleteuser"]);

Route::get('/foodmenu', [AdminController::class,"foodmenu"]);

Route::post('/uploadfood', [AdminController::class,"uploadFood"]);

Route::get('/deletemenu/{id}', [AdminController::class,"deletemenu"]);

Route::get('/editmenu/{id}', [AdminController::class,"editmenu"]);

Route::post('/update/{id}', [AdminController::class,"updatefood"]);

Route::post('/reservation', [AdminController::class,"reservation"]);

Route::get('/viewreservations', [AdminController::class,"vieweservations"]);

Route::post('/addchefs', [AdminController::class,"addchefs"]);

Route::get('/viewchefs', [AdminController::class,"viewchefs"]);

Route::get('/deletechef/{id}', [AdminController::class,"deletechef"]);

Route::get('/editchef/{id}', [AdminController::class,"editchef"]);

Route::post('/updatechef/{id}', [AdminController::class,"updatechef"]);

Route::post('/addtocart/{id}', [HomeController::class,"addtocart"]);

Route::get('/showcart/{id}', [HomeController::class,"showcart"]);

Route::get('/deletecartitem/{id}', [HomeController::class,"deletecartitem"]);

Route::get('/admindashboard', [HomeController::class,"admindashboard"]);

Route::post('/confirmorder', [AdminController::class,"confirmorder"]);

Route::get('/vieworders', [AdminController::class,"vieworders"]);

Route::get('/searchorders', [AdminController::class,"searchorders"]);

Route::get("/addmember",[AdminController::class,"create"]); // To add user as an admin

Route::post("/store",[AdminController::class,"addnewadmin"]); // To add user as an admin

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
