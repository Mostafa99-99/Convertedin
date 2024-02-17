<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/clear-cache', function(){
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');

    return 'DONE'; //return anything
});


Route::get('/', function () {

    $admins = DB::table("admins")->get();
    $users = DB::table("users")->get();


    return view('welcome')->with('admins',$admins)->with('users',$users);
})->name('home');


Route::post('/new_task', [MainController::class, 'new_task'])->name('new_task');
Route::get('/display_data', [MainController::class, 'display_data'])->name('display_data');
Route::get('/statistics', [MainController::class, 'statistics'])->name('statistics');
