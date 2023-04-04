<?php

use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PratosController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('leading');
})->name('start');


Route::prefix('prato')->group(function () {
    Route::get('/', [PratosController::class, 'index'])->name('prato.index');
    Route::get('/create', [PratosController::class, 'create'])->name('prato.create');
    Route::post('/', [PratosController::class, 'store'])->name('prato.store');
    Route::delete('/{id}', [PratosController::class, 'destroy'])->name('prato.destroy');
    Route::get('/{id}/edit', [PratosController::class, 'edit'])->where('id', '[0-9]+')->name('prato.edit');
    Route::put('/{id}', [PratosController::class, 'update'])->where('id', '[0-9]+')->name('prato.update');
});

Route::prefix('status')->group(function () {
    Route::get('/', [StatesController::class, 'index'])->name('status.index');
    Route::get('/create', [StatesController::class, 'create'])->name('status.create');
    Route::get('/{id}/edit', [StatesController::class, 'edit'])->where('id', '[0-9]+')->name('status.edit');
    Route::post('/', [StatesController::class, 'store'])->name('status.store');
    Route::put('/{id}', [StatesController::class, 'update'])->where('id', '[0-9]+')->name('status.update');
    Route::delete('/{id}', [StatesController::class, 'destroy'])->name('status.destroy');
});

Route::prefix('users')->group(function () {
    Route::get('/create', [UsersController::class, 'create'])->name('users.create');
    Route::get('/funcionarios/index', [FuncionariosController::class, 'index'])->name(('users.funcionarios.index'));
    Route::post('/', [UsersController::class, 'store'])->name('users.store');
    Route::delete('/{id}/{users_id}', [UsersController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('pedidos')->group(function () {
    Route::get('/', [PedidosController::class, 'index'])->name('pedidos.index');
    Route::get('/create', [PedidosController::class, 'create'])->name('pedidos.create');
    Route::post('/', [PedidosController::class, 'store'])->name('pedidos.store');
});
