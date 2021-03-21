<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

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


//--ROLE ROUTES

Route::get('/roles', [RoleController::class, 'getAllRoles'])->name('getRoles');
Route::get('/role/create', [RoleController::class, 'create'])->name('createRoles')->middleware(['auth']);
Route::post('/role/store', [RoleController::class, 'store'])->name('storeRole')->middleware(['auth']);
