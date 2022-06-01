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
    return view('welcome');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/achat', function () {
    return view('achat');
});

Route::get('/biens', function () {
    return view('biens');
});

Route::get('/biens/{id}', function () {
    return view('[id]');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/admin/ajouter-un-nouveau-bien', function () {
    return view('admin-ajout');
});

Route::get('/admin/{id}', function () {
    return view('[id]-admin');
});

Route::get('/admin', function () {
    return view('admin');
});