<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('home');
});
Route::get('inscription', function() {
    return view('inscription');
});
Route::post('inscription', function() {
    $utilisateur = new App\Http\Controllers\Utilisateur;
    $utilisateur->pseudo = request('pseudo');
    $utilisateur->email = request('email');
    $utilisateur->password = request('password');
    $utilisateur->save();
    return"formulaire recu";
});