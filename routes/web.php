<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UserCustomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TPController;
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



Route::get('/profile', [UserCustomController::class, 'show'])->name('profile.show');
Route::get('/cours/laravel', [CoursController::class, 'laravel'])->name('cours.laravel');
Route::get('/cours/react', [CoursController::class, 'react'])->name('cours.react');
Route::get('/tp/laravel', [TPController::class, 'laravel'])->name('tp.laravel');
Route::get('/tp/react', [TPController::class, 'react'])->name('tp.react');
Route::get('/users', [UserCustomController::class, 'index'])->name('users.index');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');



// Profil de l'utilisateur
Route::get('/profile', function () {
    return view('profile');
})->name('profile.show');

// Cours Laravel et React.js
Route::get('/cours/laravel', function () {
    return view('cours.laravel');
})->name('cours.laravel');

Route::get('/cours/react', function () {
    return view('cours.react');
})->name('cours.react');

// TP Laravel et React.js
Route::get('/tp/laravel', function () {
    return view('tp.laravel');
})->name('tp.laravel');

Route::get('/tp/react', function () {
    return view('tp.react');
})->name('tp.react');



Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Liste des utilisateurs
Route::get('/users', function () {
    $users = App\Models\User::all();
    return view('users', ['users' => $users]);
})->middleware('auth');

Route::get('/users', function () {
    $users = App\Models\User::all();
    return view('users', ['users' => $users]);
})->middleware('auth')->name('users.index');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/auth/{id}/edit', [AuthController::class, 'edit'])->name('auth.edit');






Route::get('/inscription', [InscriptionController::class, 'create'])->name('inscription.create');
Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');
Route::get('/inscriptions', [InscriptionController::class, 'index'])->name('inscription.index');
Route::delete('/inscription/{inscription}', [InscriptionController::class, 'destroy'])->name('inscription.destroy');

