<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;




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
    return view('transaero-transport-logistics-html-template/html/index');
});

Route::get('/services', function () {
    return view('transaero-transport-logistics-html-template/html/04_services');
});


// AUTHENTICATE USER LOG REQUEST & DASHBOARD ROUTE
Route::get('/login', [LoginController::class,'createLogin']);
Route::post('/auth/login', [LoginController::class,'authenticate']);

// AUTHENTICATE USER REGISTER REQUEST & DASHBOARD ROUTE
Route::get('/signup', [RegisterController::class,'createRegister']);
Route::post('/auth/register',[RegisterController::class, 'authenticate']);

Route::get('/service-detail', function () {
    return view('transaero-transport-logistics-html-template/html/05_service_detail');
});

Route::get('/quote', function () {
    return view('transaero-transport-logistics-html-template/html/quote');
});

// Route::get('/quote/{type}', function () {
//     return view('transaero-transport-logistics-html-template/html/quote');
// });

// Route::get('/quote/{type}', [PortalController::class,'test']);

// TAX DASHBOARD REQUEST ROUTE <403>
Route::get('/dashboard', [PortalController::class,'createDashboard']);

Route::get('/about-us', function () {
    return view('transaero-transport-logistics-html-template/html/06_about');
});

Route::get('/contact', function () {
    return view('transaero-transport-logistics-html-template/html/13_contacts');
});

// USER LOGOUT & DESTROY SESSION
Route::get('/logout',[SessionController::class, 'destroy']);
