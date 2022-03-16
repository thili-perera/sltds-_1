<?php

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
    return view('Layout.index');
});

/*user Management*/
Route::namespace('User')->prefix('dashboard')->name('user.')->group(function () {
    Route::get('/allusers', 'UserController@index')->name('index');
    Route::get('/adduser', 'UserController@create')->name('create');
    Route::post('/saveuser', 'UserController@store')->name('store');
    Route::get('/user/{user}', 'UserController@show')->name('show');
    Route::get('/edit/user/{user}', 'UserController@edit')->name('edit');
    Route::get('/edit/account/{user}', 'UserController@account_edit')->name('account_edit');
    Route::put('/update/account/{account}', 'UserController@user_update')->name('user_update');
    Route::delete('/userdelete/{user}', 'UserController@destroy')->name('destroy');
});

/*Bank Management*/
Route::namespace('Bank')->prefix('dashboard')->name('bank.')->group(function () {
    Route::get('/allbanks', 'BankController@index')->name('index');
    Route::get('/addbank', 'BankController@create')->name('create');
    Route::post('/savebank', 'BankController@store')->name('store');
    Route::get('/bank/{bank}', 'BankController@show')->name('show');
    // Route::get('/edit/user/{user}', 'UserController@edit')->name('edit');
    // Route::delete('/userdelete/{user}', 'UserController@destroy')->name('destroy');
});

/*Branch Management*/
Route::namespace('Branch')->prefix('dashboard')->name('branch.')->group(function () {
    Route::get('/addbranch', 'BranchController@create')->name('create');
    Route::post('/savebranch', 'BranchController@store')->name('store');
    Route::get('/edit/branch/{branch}', 'BranchController@edit')->name('edit');
    Route::put('/update/branch/{branch}', 'BranchController@update')->name('update');
    Route::delete('/branchdelete/{branch}', 'BranchController@destroy')->name('destroy');
    // Route::get('/user/{user}', 'UserController@show')->name('show');
    // Route::get('/allbanks', 'BranchController@index')->name('index');
});