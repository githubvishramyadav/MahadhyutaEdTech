<?php
use App\Http\Controllers\Frontend\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CourseController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
// Route::get('/course', [CourseController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
