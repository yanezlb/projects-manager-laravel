<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('getAllProjects', [ProjectController::class, 'getAllProjects']);
Route::get('getLastProjects', [ProjectController::class, 'getLastProjects']);
Route::get('getIdProject', [ProjectController::class, 'getIdProject']);
Route::get('insertProject', [ProjectController::class, 'insertProject']);
Route::get('insertCity', [CityController::class, 'insertCity']);
Route::get('insertCompany', [CompanyController::class, 'insertCompany']);
Route::get('updateProject', [ProjectController::class, 'updateProject']);
Route::get('deleteProject', [ProjectController::class, 'deleteProject']);
