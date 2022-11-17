<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BricolageController;
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
})->name('Wel');

Route::get('/Job', function () {
    return view('Jobber');
})->name('Job');

//Route::get('/Bricolage/index', [BricolageController::class, 'index'])->name('bricoloage.index');
Route::get('/Bricolage/create', [BricolageController::class, 'create'])->name('bricolage.create');
Route::post('/Bricolage/store', [BricolageController::class, 'store'])->name('bricoloage.store');
// Route::get('/Bricolage/show{id}', [BricolageController::class, 'show'])->name('bricoloage.show');
// Route::get('/Bricolage/edit{id}', [BricolageController::class, 'edit'])->name('bricoloage.edit');
// Route::post('/Bricolage/update{id}', [BricolageController::class, 'update'])->name('bricoloage.update');
// Route::delete('Bricolage/destroy{id}', [BricolageController::class, 'destroy'])->name('bricoloage.destroy');
