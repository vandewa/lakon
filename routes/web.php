<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Livewire\Pages\Irban\IrbanPage;
use App\Http\Livewire\Pages\Irban\DaftarIrban;
use App\Http\Livewire\Pages\Urusan\DaftarUrusan;
use App\Http\Livewire\Pages\Urusan\UrusanPage;
use App\Http\Livewire\Pages\User\UserPage;
use App\Http\Livewire\Pages\User\DaftarUser;
use App\Http\Livewire\Pages\Laporan\LaporanKonsultasi;

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
    return view('lakon');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::post('/ganti-password', [DashboardController::class, 'gantiPassword'])->name('ganti.password');
    Route::get('user/{id?}', UserPage::class)->name('user');
    Route::get('user-index', DaftarUser::class)->name('user.index');
    Route::get('irban/{id?}', IrbanPage::class)->name('irban');
    Route::get('irban-index', DaftarIrban::class)->name('irban.index');
    Route::get('urusan/{id?}', UrusanPage::class)->name('urusan');
    Route::get('urusan-index', DaftarUrusan::class)->name('urusan.index');
    Route::resource('konsultasi', KonsultasiController::class);
    Route::post('/konsultasi/create/upload-image', [KonsultasiController::class, 'uploadImage'])->name('ckeditor.upload');
    Route::get('konsultasi-urusan-irban', [KonsultasiController::class, 'urusanIrban'])->name('urusanIrban');
    Route::get('/log-konsultasi/{id}', [KonsultasiController::class, 'log'])->name('log');
    Route::get('laporan/konsultasi', LaporanKonsultasi::class)->name('laporan.konsultasi');
});