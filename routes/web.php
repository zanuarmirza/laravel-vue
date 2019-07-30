<?php
use App\Http\Controllers\Employee\EmployeeController;

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
Route::get('/employee', EmployeeController::class."@index");
Route::get('/employee/{id}', function () {
    return view('welcome');
});
Route::post('/employee/submit', function () {
    return view('welcome');
});

//Vuew SPA
// Route::get('/spa/{any}', 'SpaController@index')->where('any', '.*');
