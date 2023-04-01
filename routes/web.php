<?php

use App\Http\Controllers\front\SecondController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\front\FirstController;
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
})->name("a");

Route::get('/abood', function () {
    return ("my name is aboood");
})->name("b");

Route::get('/abood2/{id}', function ($id) {
    return $id;
})->name("c");

Route::get('/abood3/{id?}', function () {
    return "haha";
})->name("d");

Route::get('second', [SecondController::class, 'show']);

// pass varible to view
Route::get("message", function () {
    return view('message')->with('name', 'abdelkader');
});
// pass many varibles to view  (BAD practice)
Route::get("messages", function () {
    return view('message1')->with(['name' => 'khaled', 'age' => '33', 'job' => 'webdeveloper', 'school' => 'aaa', 'field' => 'kojoj']);
});
// pass many varibles to view  (GOOD practice)
Route::get("messages1", function () {
    $data = [];
    $data['name'] = 'abdallah';
    $data['age'] = 33;
    $data['job'] = "webdeveloper";
    $data['school'] = 'aaa';
    $data['field'] = 'kojoj';
    return view('message1', $data);
});
//Route::get('/user/{id}', [UserController::class, 'show']);

Route::resource('news', NewsController::class);
Route::resource("super", SuperController::class);

Route::get('index', [FirstController::class, 'index']);

Route::get('index1', [FirstController::class, 'index1']);

