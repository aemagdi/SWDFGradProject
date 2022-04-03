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

Route::get('/users', [AdminController::class,"showUsers"]);

Route::get('/deleteuser/{id}', [AdminController::class,"deleteUsers"]);

Route::get('/foodmenu', [AdminController::class,"foodMenu"]);

Route::post('/uploadfood', [AdminController::class,"uploadFood"]);

Route::get('/deletemenu/{id}', [AdminController::class,"deleteMenu"]);


Route::get('/editmenu/{id}', [AdminController::class,"editMenu"]);

Route::post('/update/{id}', [AdminController::class,"updateFood"]);

Route::post('/reservation', [HomeController::class,"addReservation"]); //ControllerChangedAndFixed

Route::get('/viewreservations', [AdminController::class,"viewReservations"]);

Route::post('/addchefs', [AdminController::class,"addChefs"]);



Route::get('/viewchefs', [AdminController::class,"viewChefs"]);

Route::get('/deletechef/{id}', [AdminController::class,"deleteChef"]);

Route::get('/editchef/{id}', [AdminController::class,"editChef"]);

Route::post('/updatechef/{id}', [AdminController::class,"updateChef"]);



Route::post('/addtocart/{id}', [HomeController::class,"addToCart"]);

Route::get('/showcart/{id}', [HomeController::class,"showCart"]);

Route::get('/deletecartitem/{id}', [HomeController::class,"deleteCartItem"]);

Route::get('/admindashboard', [AdminController::class,"adminDashboard"]); //ControllerChangedAndFixed


Route::post('/confirmorder', [HomeController::class,"confirmOrder"]); //alert

Route::get('/vieworders', [AdminController::class,"viewOrders"]);

Route::get('/searchorders', [AdminController::class,"searchOrders"]);

Route::get("/addmember",[AdminController::class,"createAdmin"]); // To add user as an admin

Route::post("/store",[AdminController::class,"addNewAdmin"]); // To add user as an admin

Route::get('/deletereservation/{id}', [AdminController::class,"deleteReservationAdmin"]); //function to delete reservations in admin dashboard

Route::get('/deleteorder/{id}', [AdminController::class,"deleteOrderAdmin"]); //function to delete orders in admin dashboard

Route::get('/emptycart/{id}', [HomeController::class,"emptyCart"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
