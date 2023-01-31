<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', [LandingController::class, 'index']);
Route::post('/pesan', [LandingController::class, 'pesan']);

Route::get("/login", [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post("/login", [AuthController::class, 'loginAuth'])->middleware('guest');
Route::get("/logout", [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get("/dashboard", [DashboardController::class, 'index'])->name('dashboard');

    Route::get("/admin", [DashboardController::class, 'admin']);
    Route::get("/admin/get/{biodata}", [DashboardController::class, 'adminGet']);
    Route::put("/admin/edit/", [DashboardController::class, 'adminEdit']);
    Route::delete("/admin/delete/{pemesanan}", [DashboardController::class, 'adminDelete']);

    Route::get("/check-in", [DashboardController::class, 'checkIn']);
    Route::post("/check-in", [DashboardController::class, 'checkInPost']);

    Route::get("/laporan", [DashboardController::class, 'laporan']);
});


Route::get('/tes', function () {
    Mail::send('mail.tiket', [], function ($message) {
        $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));
        $message->to("sallieeky@gmail.com", "Sallie Eky");
        $message->subject("Pemesanan Tiket AgenX");
    });
    return "ok";
});
