<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrototypeController;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::resource('prototypes', PrototypeController::class);

Route::get('/prototypes', [PrototypeController::class, 'index']);
Route::get('/prototypes/create', [PrototypeController::class, 'create']);
Route::post('/prototypes', [PrototypeController::class, 'store']);
Route::get('/prototypes/{id}', [PrototypeController::class, 'show']);
Route::get('/prototypes/{id}/edit', [PrototypeController::class, 'edit']);
Route::put('/prototypes/{id}', [PrototypeController::class, 'update']);
Route::delete('/prototypes/{id}/', [PrototypeController::class, 'destroy']);

Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);