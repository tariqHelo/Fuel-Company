<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PermissionsController,
    RolesController,
    UsersController
};
use App\Http\Controllers\{
    Petrol91Controller,
    DieselController,
    KazController,
    Petrol95Controller,
    BankController,
    ActivitiesController,
    BoxController,
    ClaimController,
    DelayedController,
    HesnyaController,
    MeranController,
    ReadingController,
    RepositoryController,
    SellingPointController,
    TransactionActitvityController,
    TransactionBankController,
    TransactionSellingPointsController,
    WaterController
    

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



/* Start Petrol Route */
Route::resource('petrol91', Petrol91Controller::class);
Route::resource('petrol95', Petrol95Controller::class);
Route::resource('diesel', DieselController::class);
Route::resource('kaz', KazController::class);
/* End Petrol Route */

/* Start Bank Route */
Route::resource('banks', BankController::class);
Route::get('banks/delete/{id}', [BankController::class ,'destroy'])->name('banks.delete');

Route::resource('transaction_bank', TransactionBank::class);
/* End Bank Route */

/* Start Actitvity Route */
Route::resource('actitvity', ActivitiesController::class);
Route::get('actitvity/delete/{id}', [ActivitiesController::class ,'destroy'])->name('actitvity.delete');

Route::resource('transaction_actitvity', TransactionActitvityController::class);
/* End Actitvity Route */

/* Start Sellingpoints Route */
Route::resource('sellingpoints', SellingPointController::class);
Route::get('sellingpoints/delete/{id}', [SellingPointController::class
,'destroy'])->name('sellingpoints.delete');

Route::resource('transaction_sellingpoints', TransactionSellingPointsController::class);
/* End Sellingpoints Route */

require __DIR__.'/auth.php';
