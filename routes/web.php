<?php
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KeranjangController;
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


// books//

Route::get('/books', [BooksController::class, 'index'])->name('books');
Route::post('/books/store', [BooksController::class, 'store'])->name('books.store');
Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
Route::get('/books/{book}/edit', [BooksController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BooksController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BooksController::class, 'destroy'])->name('books.destroy');
// Additional route if needed for other purposes

//customer//

Route::get('/admin/customer', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/admin/createcustomer', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/admin/customer', [CustomerController::class, 'store'])->name('customers.store');
Route::post('/admin/customer/{customer}/borrow', [CustomerController::class, 'borrowBook'])->name('customers.borrow');
Route::delete('/admin/customer/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/admin/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::get('/admin/customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/admin/customer/{customer}', [CustomerController::class, 'update'])->name('customers.update');

// keranjang //

Route::middleware(['auth'])->group(function () {
    // Menampilkan halaman keranjang
    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
    
    // Route untuk menambah produk ke keranjang
    Route::post('/keranjang/tambah', [KeranjangController::class, 'tambah'])->name('keranjang.tambah');
    
    // Route untuk melanjutkan checkout
    Route::post('/checkout', [KeranjangController::class, 'checkout'])->name('keranjang.checkout');
});

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
