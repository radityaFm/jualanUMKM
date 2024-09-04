<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\CustomerController;
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
    Route::middleware(['role:user'])->group(function () {
        Route::get('/umkm', [LoginController::class, 'showUmkm'])->name('umkm');
    });

    Route::get('/books', [LoginController::class, 'showBooks'])->name('books');
Route::get('login', [LoginController::class, 'index'])->name('login');
// Route for processing the login form submission
Route::post('login/proses', [LoginController::class, 'login'])->name('login.proses');
// Route for displaying the registration page
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
// Route for processing the registration form submission
Route::post('registrasi/proses', [LoginController::class, 'proses'])->name('registrasi.proses');
// Route for logging out
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dasboard', [DasboardController::class, 'index'])->name('dashboard');


// Route::controller(CustomersController::class)->group(function () {
    Route::get('customer', [CustomerController::class, 'customers'])->name('customers');
    // Route::get('/customers/create', 'create')->name('customers.create');
    // Route::post('/customers/create/update', 'store')->name('customers.update');
    // Route::get('/customers/edit/{id}', 'edit')->name('customers.editpage');
    // Route::put('/customers/softdelete/{id}', 'softdelete')->name('customers.softdelete');
    // Route::put('/customers/edit/update/{id}', 'update')->name('customers.edit');    
    // Route::get('/customers/restore/{id}', 'restore')->name('customers.restore');
    // Route::delete('/customers/delete/{id}', 'delete')->name('customers.delete');
    // Route::get('/customers/history', 'history')->name('customers.history');
// });





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

// Additional routes as needed
Route::get('/', function () {
    return view('welcome');
})->name('home');
