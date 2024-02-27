<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperController;
use App\Http\Livewire\Pages\User\UserPage;
use App\Http\Livewire\Pages\Irban\IrbanPage;
use App\Http\Livewire\Pages\User\DaftarUser;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Livewire\Pages\Irban\DaftarIrban;
use App\Http\Livewire\Pages\Urusan\UrusanPage;
use App\Http\Livewire\Pages\Urusan\DaftarUrusan;
use App\Http\Livewire\Pages\Regulasi\PageRegulasi;
use App\Http\Livewire\Pages\Regulasi\DaftarRegulasi;
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

Route::get('show-picture', [HelperController::class, 'showPicture'])->name('helper.show-picture');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::post('/ganti-password', [DashboardController::class, 'gantiPassword'])->name('ganti.password');
    Route::get('user/{id?}', UserPage::class)->name('user')->middleware('role:admin');
    Route::get('user-index', DaftarUser::class)->name('user.index')->middleware('role:admin');
    Route::get('irban/{id?}', IrbanPage::class)->name('irban')->middleware('role:admin');
    Route::get('irban-index', DaftarIrban::class)->name('irban.index')->middleware('role:admin');
    Route::get('urusan/{id?}', UrusanPage::class)->name('urusan')->middleware('role:admin');
    Route::get('urusan-index', DaftarUrusan::class)->name('urusan.index')->middleware('role:admin');
    Route::resource('konsultasi', KonsultasiController::class);
    Route::post('/konsultasi/create/upload-image', [KonsultasiController::class, 'uploadImage'])->name('ckeditor.upload');
    Route::get('konsultasi-urusan-irban', [KonsultasiController::class, 'urusanIrban'])->name('urusanIrban');
    Route::get('/log-konsultasi/{id}', [KonsultasiController::class, 'log'])->name('log');
    Route::get('laporan/konsultasi', LaporanKonsultasi::class)->name('laporan.konsultasi')->middleware('role:admin');
    Route::get('regulasi/{id?}', PageRegulasi::class)->name('regulasi');
    Route::get('regulasi-index', DaftarRegulasi::class)->name('regulasi.index');
});