<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/home', function () {
    return view('admin/home');
});
Route::get('/', [App\Http\Controllers\PersonController::class, 'index']);
Route::get('/admin/clasificacion', [App\Http\Controllers\HomeController::class, 'clasificacion'])->name('clasificacion');
Route::get('/admin/jugadores', [App\Http\Controllers\HomeController::class, 'jugadores'])->name('jugadores');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');
// Route::get('/admin/contabilidad', [App\Http\Controllers\HomeController::class, 'contabilidad'])->name('contabilidad');
Auth::routes();
Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');
Route::post('admin/jugadores', [App\Http\Controllers\HomeController::class, 'storeplayer'])->name('newplayer');
Route::get('admin/jugador/{id}', [App\Http\Controllers\HomeController::class, 'editplayer'])->name('editPlayer');
Route::post('admin/Editarjugador/{id}', [App\Http\Controllers\HomeController::class, 'UpdatePlayer'])->name('UpdatePlayer');
Route::get('admin/', [App\Http\Controllers\HomeController::class, 'nuevajornada'])->name('nuevajornada');

Route::get('admin/clasificacion/{id}', [App\Http\Controllers\HomeController::class, 'Editjornada'])->name('Editjornada');
Route::post('admin/Editjornada/{id}', [App\Http\Controllers\HomeController::class, 'Updatejornada'])->name('Updatejornada');
