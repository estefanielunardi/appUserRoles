<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [UserController::class, 'getWelcomePageWithUser'])->name('getWelcome');

//--USER ROUTES

Route::get('/users', [UserController::class, 'getAllUsers'])->name('getUsers');
Route::get('/attach/{id}', [UserController::class, 'attachRoleToUser'])->name('attachRole')->middleware(['auth']);
Route::get('/detach/{id}', [UserController::class, 'detachRoleFromUser'])->name('detachRole')->middleware(['auth']);

//--ROLE ROUTES

Route::get('/roles', [RoleController::class, 'getAllRoles'])->name('getRoles');
Route::get('/role/create', [RoleController::class, 'create'])->name('createRoles')->middleware(['auth']);
Route::post('/role/store', [RoleController::class, 'store'])->name('storeRole')->middleware(['auth']);
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('deleteRole')->middleware(['auth']);
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('editRole')->middleware(['auth']);
Route::put('/role/update/{id}', [RoleController::class, 'update'])->name('updateRole')->middleware(['auth']);

require __DIR__.'/auth.php';