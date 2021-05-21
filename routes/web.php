<?php

use App\model\table;
use App\model\menu;
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


Route::post('addnew','Controller@addNew');
Route::get('addnew', function () {
    return view('backctrl.addnew');
});

// Route::get('testcon', 'Controller@doTestModel');
Route::get('update','Controller@Produpdate');
Route::post('up','Controller@update');

Route::get('menuupdate','Controller@menuupdate');
Route::post('menuup','Controller@menuup');

Route::get('/', function () {
    return view('frontend.main');
});

Route::get('test', 'Controller@doTestModel');
Route::get('testget', 'Controller@getcookie');

Route::get('itemlist', 'Controller@listModel');

Route::get('menu', 'Controller@menulist');

Route::get('itemdetail/{id}','Controller@detailModel');


