<?php

use App\Http\Controllers\SellControlle;
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
    return view('welcome');
});


Route::prefix('sells')->group(function () {
    Route::get('/index', [SellControlle::class, "index"])->name('sells.index');
    Route::get('/{id}/destroy', [SellControlle::class, "destroy"])->name('sells.destroy');
    Route::get('/{id}/show', [SellControlle::class, "show"])->name('sells.show');
    Route::get('/create', [SellControlle::class, "create"])->name('sells.create');
    Route::post('/create', [SellControlle::class, "store"])->name('sells.store');
    Route::post('{id}/update', [SellControlle::class, "update"])->name('sells.update');
    Route::get('{id}/update', [SellControlle::class, "edit"])->name('sells.edit');
});
