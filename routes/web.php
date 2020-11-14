<?php

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
})->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index', 'HomeController@dashboardAdmin')->middleware('onlyAdmin');
Route::get('/user/index', 'HomeController@dashboardUser')->middleware('onlyOrdinaryUser');
Route::get('/notfound/index', 'HomeController@NotFoundPage')->name('notfound');
Route::get('/admin/catalog', 'HomeController@catalogAdmin')->middleware('onlyAdmin');
Route::get('/user/catalog', 'HomeController@catalogUser')->middleware('onlyOrdinaryUser');
Route::get('/admin/member', 'HomeController@memberAdmin')->middleware('onlyAdmin');

Route::get('/home', 'PerpusController@userDashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/create', 'PerpusController@displayCreateBookPage')->name('admin.create');
    Route::post('/create', 'PerpusController@createBook')->name('admin.createpost');

    Route::get('/edit/{id}', 'PerpusController@displayEditBookPage')->name('admin.edit');
    Route::put('/edit/{id}', 'PerpusController@editBook')->name('admin.editput');

    Route::get('/delete/{id}', 'PerpusController@displayDeleteBookPage')->name('admin.deletepage');
    Route::delete('/delete/{id}', 'PerpusController@deleteBook')->name('admin.delete');

    Route::get('/', 'PerpusController@displayUserBook')->name('admin.index');

    Route::get('/{id}', 'PerpusController@showBook')->name('admin.show');
});