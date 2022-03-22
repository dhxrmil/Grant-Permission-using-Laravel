<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bigcon;
use App\Http\Controllers\Usercon;
use App\Http\Controllers\Sportscon;
use App\Http\Controllers\Electroniccon;
use App\Http\Controllers\Furniturecon;

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

/*  Route::get('/', function () {
    return view('login');
});  */ 
Route::get('', [Bigcon::class, 'index']);
Route::get('userlogin', [Usercon::class, 'login']);

Route::POST('login', [Bigcon::class, 'authenticate']);
Route::POST('user/userlogin', [Usercon::class, 'userauthenticate']);

Route::POST('logoutadmin', [Bigcon::class, 'logout']);
Route::POST('logout', [Bigcon::class, 'logout']);

//Route::POST('logout', [Bigcon::class, 'logout']);
//Route::POST('logout', [Usercon::class, 'logoutuser']);

Route::POST('usersuccesslogin', [Usercon::class, 'usersuccesslogin'])->name('usersuccesslogin');

Route::GET('userdata', [Bigcon::class, 'userdata']);

Route::GET('insertuser', [Bigcon::class, 'insertuser']);

Route::POST('insertdata', [Bigcon::class, 'insertdata']);

Route::GET('edit/{id}', [Bigcon::class, 'edit']);

Route::POST('update/{id}', [Bigcon::class, 'update']);

Route::GET('deldata/{id}', [Bigcon::class, 'deldata']);

Route::POST('delete/{id}', [Bigcon::class, 'delete']);

Route::GET('permissions', [Bigcon::class, 'permission']);

Route::POST('grant_permissions/{id}', [Bigcon::class, 'grantpermission']);

Route::POST('insertpermission/{id}', [Bigcon::class, 'insertpermission'])->name('insertpermission');

Route::POST('updatepermissions/{id}', [Bigcon::class, 'updatepermissions']);

Route::GET('user/sports', [Sportscon::class, 'viewsports']);

Route::GET('user/addsports', [Sportscon::class, 'sportinsertview']);

Route::POST('insertsports', [Sportscon::class, 'insertsports'])->name('insertsports');

Route::get('sportslisting', [Sportscon::class, 'sportslisting']);

Route::GET('sportsedit/{id}', [Sportscon::class, 'sportsedit'])->name('sportsedit');

Route::POST('user/sportsupdate/{id}', [Sportscon::class, 'sportsupdate'])->name('sportsupdate');

Route::GET('user/displaysports', [Sportscon::class, 'displaysports'])->name('displaysports');

Route::GET('sportsdelete/{id}', [Sportscon::class, 'sportsdelete'])->name('sportsdelete');



Route::GET('user/electronics', [Electroniccon::class, 'viewelectronics']);

Route::GET('user/addelectronics', [Electroniccon::class, 'electronicsinsertview']);

Route::POST('insertelectronics', [Electroniccon::class, 'insertelectronics'])->name('insertelectronics');

Route::get('electronicslisting', [Electroniccon::class, 'electronicslisting']);

Route::GET('electronicsedit/{id}', [Electroniccon::class, 'electronicsedit'])->name('electronicsedit');

Route::POST('user/electronicsupdate/{id}', [Electroniccon::class, 'electronicsupdate'])->name('electronicsupdate');

Route::GET('user/displayelectronics', [Electroniccon::class, 'displayelectronics'])->name('displayelectronics');

Route::GET('electronicsdelete/{id}', [Electroniccon::class, 'electronicsdelete'])->name('electronicsdelete');



Route::GET('user/furniture', [Furniturecon::class, 'viewfurniture']);

Route::GET('user/addfurniture', [Furniturecon::class, 'furnitureinsertview']);

Route::POST('insertfurniture', [Furniturecon::class, 'insertfurniture'])->name('insertfurniture');

Route::get('furniturelisting', [Furniturecon::class, 'furniturelisting']);

Route::GET('furnitureedit/{id}', [Furniturecon::class, 'furnitureedit'])->name('furnitureedit');

Route::POST('user/furnitureupdate/{id}', [Furniturecon::class, 'furnitureupdate'])->name('furnitureupdate');

Route::GET('user/displayfurniture', [Furniturecon::class, 'displayfurniture'])->name('displayfurniture');

Route::GET('user/displayfurniture', [Furniturecon::class, 'displayfurniture'])->name('displayfurniture');

Route::GET('furnituredelete/{id}', [Furniturecon::class, 'furnituredelete'])->name('furnituredelete');



