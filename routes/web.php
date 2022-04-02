<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortalController;



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

Route::get('/login', function () {
    return view('transaero-transport-logistics-html-template/html/login');
});

Route::get('/signup', function () {
    return view('transaero-transport-logistics-html-template/html/signup');
});

Route::get('/service-detail', function () {
    return view('transaero-transport-logistics-html-template/html/05_service_detail');
});


Route::get('/quote', function () {
    return view('transaero-transport-logistics-html-template/html/quote')->name('quote');
});

// Route::get('/quote/{type}', function () {
//     return view('transaero-transport-logistics-html-template/html/quote');
// });

// Route::get('/quote/{type}', [PortalController::class,'test']);


Route::get('/about-us', function () {
    return view('transaero-transport-logistics-html-template/html/06_about');
});

Route::get('/contact', function () {
    return view('transaero-transport-logistics-html-template/html/13_contacts');
});
