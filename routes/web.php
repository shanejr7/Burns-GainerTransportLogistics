<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home2', function () {
    return view('transaero-transport-logistics-html-template/html/02_home');
});

Route::get('/services3', function () {
    return view('transaero-transport-logistics-html-template/html/03_services');
});

Route::get('/services4', function () {
    return view('transaero-transport-logistics-html-template/html/04_services');
});

Route::get('/service-detail', function () {
    return view('transaero-transport-logistics-html-template/html/05_service_detail');
});

Route::get('/about', function () {
    return view('transaero-transport-logistics-html-template/html/06_about');
});

Route::get('/typogrpaphy', function () {
    return view('transaero-transport-logistics-html-template/html/07_typography');
});

Route::get('/buttons', function () {
    return view('transaero-transport-logistics-html-template/html/08_buttons');
});

Route::get('/progress', function () {
    return view('transaero-transport-logistics-html-template/html/09_progress');
});

Route::get('/alerts', function () {
    return view('transaero-transport-logistics-html-template/html/10_alerts');
});

Route::get('/blog', function () {
    return view('transaero-transport-logistics-html-template/html/11_blog');
});

Route::get('/blog_2', function () {
    return view('transaero-transport-logistics-html-template/html/12_blog');
});

Route::get('/contacts', function () {
    return view('transaero-transport-logistics-html-template/html/13_contacts');
});
