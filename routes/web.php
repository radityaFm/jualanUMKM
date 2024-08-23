<?php
use App\Http\Controllers\LoginController;
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

Route::get('/umkm', function () {
    return view('umkm');
});
// Route for displaying the login page
Route::get('login', [loginController::class, 'index'])->name('login');

// Route for processing the login form submission
Route::post('login/proses', [LoginController::class, 'login'])->name('login.proses');

// Route for displaying the registration page
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');

// Route for processing the registration form submission
Route::post('registrasi/proses', [LoginController::class, 'proses'])->name('registrasi.proses');

// Route for logging out
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Additional routes as needed
Route::get('/', function () {
    return view('welcome');
})->name('home');
