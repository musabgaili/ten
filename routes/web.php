<?php

use App\Http\Controllers\UserController;
use App\Models\User;
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
    // User::factory()->create();
    // User::create([
    //     'name'=> 'x',
    //     'email'=> '1@n.co',
    //     "password"=> '123456'
    // ]);
    return view('welcome');
});

// s


Route::domain('{name}.musab.link')->group(function () {
    Route::get('users', [UserController::class ,'index']);
});
