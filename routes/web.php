<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SurveyController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {


Route::get('/home', function () {
    return view('index');
});
 
   
Route::get('/general', [SurveyController::class, 'general']);
Route::post('/add_general', [SurveyController::class, 'add_general']);
// Route::get('/show_general', [SurveyController::class, 'show_general']);


Route::get('/layout', [SurveyController::class, 'layout']);
Route::post('/add_layout', [SurveyController::class, 'add_layout']);
// Route::get('/show_layout', [SurveyController::class, 'show_layout']);


Route::get('/profile', [SurveyController::class, 'profile']);
Route::post('/add_profile', [SurveyController::class, 'add_profile']);

Route::get('/household', [SurveyController::class, 'household']);
Route::post('/add_household', [SurveyController::class, 'add_household']);

Route::get('/cooking', [SurveyController::class, 'cooking']);
Route::post('/add_cooking', [SurveyController::class, 'add_cooking']);


Route::get('/congratulations', [SurveyController::class, 'congratulations'])->name('congratulations');

Route::get('/show_list', [SurveyController::class, 'show_list']);
});

// Route::get('/login', [AuthController::class, 'show_login'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login');  

Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); 

Route::get('/login', [AuthController::class, 'show_login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
