<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PermissionsController,
    RolesController,
    UsersController
};
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
return view('layouts.admin');
})->middleware(['auth'])->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/* Start Admin Route */
// Permissions
Route::resource('permissions', PermissionsController::class);
// Roles
Route::resource('roles', RolesController::class);
// Users
Route::resource('users', UsersController::class);
/* End Admin Route */

require __DIR__.'/auth.php';
