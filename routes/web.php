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
    WaterController,
    Repository91Controller,
    Repository95Controller,
    RepositoryDieselController,
    RepositoryKazController,
    InitialController,
    MonthlyPriceController

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
require __DIR__.'/auth.php';


Route::get('/', function () {
return view('layouts.admin');
})->middleware(['auth'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


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


/* Start Meran Route */
Route::resource('meran', MeranController::class);
/* End Meran Route */

/* Start Water Route */
Route::resource('water', WaterController::class);
/* End Water Route */

/* Start Hesnya Route */
Route::resource('hesnya', HesnyaController::class);
/* End Hesnya Route */

/* Start Delayed Route */
Route::resource('delayed', DelayedController::class);
/* End Delayed Route */

/* Start Claim Route */
Route::resource('claims', ClaimController::class);
/* End Claim Route */

/* Start initial Route */
Route::resource('initial', InitialController::class);
/* End initial Route */

/* Start MonthlyPrice Route */
Route::resource('monthlyprice', MonthlyPriceController::class);
/* End MonthlyPrice Route */

/* Start Readings Route */
Route::resource('readings', ReadingController::class);
/* End Readings Route */
/* Start Readings Route */
Route::resource('box', BoxController::class);
/* End Readings Route */
/* Start Bank Route */
Route::resource('banks', BankController::class);
Route::get('banks/delete/{id}', [BankController::class ,'destroy'])->name('banks.delete');
Route::resource('transaction_bank', TransactionBankController::class);
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



/* Start repository91 Route */
Route::resource('repository91', Repository91Controller::class);
/* End repository91 Route */
/* Start RepositoryDiesel Route */
Route::resource('repositorydiesel', RepositoryDieselController::class);
/* End RepositoryDiesel Route */
/* Start RepositoryKaz Route */
Route::resource('repositorykaz', RepositoryKazController::class);
/* End RepositoryKaz Route */
/* Start repository95 Route */
Route::resource('repository95', Repository95Controller::class);
/* End repository95 Route */
