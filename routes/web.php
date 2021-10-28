<?php

use App\Http\Controllers\SupplierController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use app\Http\Controllers\SuppliersController;
use App\Http\Controllers\xController;
use App\Http\Controllers\yController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
//pake ad ons aja biar gampang
//cari cari aja add ons biar gampang kerja tar
Route::resource('suppliers', SuppliersController::class );
//ini bisa kayaknya kamu salah pas bikin controllernya
Route::get('home', function () {
    return view('home');
});
Route::resource('x', xController::class);
Route::resource('y', yController::class);
//jadi gini setelah tak cek kemungkinan kamu typo atau salah refrensi controller jadinya gitu 
//ngapain susah ngetik cari aja add ons kalo make bootstrap add ons nya so on and so for
// terus kalo bikin laravel pertama bikin migration > model > controller 1 1 selesaiin biar dak bingung tar
// kayak gitu aja biasain ctrl + sapce biar keluar auto code nya manusia wajar typo 
// biar dak typo di bikin add on boar dak susah dan ribet 
// that all kalo ada pertanyaan wa aja 