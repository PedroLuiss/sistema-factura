<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function() {
 return view('auth.login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/usuarios', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios',[App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/compra', [App\Http\Controllers\UserController::class, 'addcompra'])->name('user.add');
Route::resource('/producto', 'ProductoController');
Route::get('/factures/list', [App\Http\Controllers\FacturaController::class, 'index'])->name('factura.index');
Route::get('/factures/views/{id}', [App\Http\Controllers\FacturaController::class, 'show'])->name('factura.show');
Route::post('/factures/Add', [App\Http\Controllers\FacturaController::class, 'store'])->name('factura.store');
Route::get('/compras/list', [App\Http\Controllers\CompraController::class, 'index'])->name('compra.index');


});
