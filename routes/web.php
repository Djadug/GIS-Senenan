<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;

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

// Portal Desa Routes
Route::get('/migrate-db', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return '<h1>✅ Migrasi Sukses!</h1><p>' . Artisan::output() . '</p>';
    } catch (\Exception $e) {
        return '<h1>❌ Gagal</h1><p>' . $e->getMessage() . '</p>';
    }
});

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/profil', [LandingController::class, 'profile'])->name('profile');
Route::get('/berita', function () {
    return view('news');
})->name('news');

// Peta GIS Route
Route::get('/peta', [MapController::class, 'index'])->name('map.index');
Route::get('/api/locations', [MapController::class, 'apiLocations'])->name('api.locations');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/locations', [AdminController::class, 'store'])->name('admin.locations.store');
    Route::put('/locations/{location}', [AdminController::class, 'update'])->name('admin.locations.update');
    Route::delete('/locations/{location}', [AdminController::class, 'destroy'])->name('admin.locations.destroy');
});
