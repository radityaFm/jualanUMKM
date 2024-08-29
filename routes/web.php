<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
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


// profil //

// Route to show the profile
Route::get('/profil', [ProfilController::class, 'show'])
    ->name('profil');

// Route to edit the profile
Route::get('/editprofil', [ProfilController::class, 'edit'])
    ->name('profil.edit');

// Route to update the profile (PUT request)
Route::put('/editprofil', [ProfilController::class, 'update'])
    ->name('profil.update');

// Route to add or show the profile (POST request)
// This rute might need a different method, like store or update, instead of show
Route::post('/editprofil', [ProfilController::class, 'store'])
    ->name('profil.store');

    Route::get('/umkm', [LoginController::class, 'showUmkm'])->name('umkm');

    Route::middleware('web')->group(function () {
        // Route for displaying the login page
Route::get('login', [LoginController::class, 'index'])->name('login');

// Route for processing the login form submission
Route::post('login/proses', [LoginController::class, 'login'])->name('login.proses');

// Route for displaying the registration page
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');

// Route for processing the registration form submission
Route::post('registrasi/proses', [LoginController::class, 'proses'])->name('registrasi.proses');

// Route for logging out
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    });

// Additional routes as needed
Route::get('/', function () {
    return view('welcome');
})->name('home');
