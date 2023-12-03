<?php

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
Route::get('/Dashboard', function () {
    return view('Admin.Dashboard');
});
Route::get('/AdminUsers', function () {
    return view('Admin.Users');
});
Route::get('/AdminCategories', function () {
    return view('Admin.Categories');
});
Route::get('/AdminMovies', function () {
    return view('Admin.Movies');
});
Route::get('/AdminTheatres', function () {
    return view('Admin.Theatres');
});
Route::get('/AdminLogin', function () {
    return view('Admin.AdminLogin');
});
Route::get('/AdminSignup', function () {
    return view('Admin.AdminSignup');
});
Route::get('/Admin404', function () {
    return view('Admin.404');
});
Route::get('/ReservedTickets', function () {
    return view('Admin.ReservedTickets');
});
