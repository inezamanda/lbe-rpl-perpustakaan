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

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin/index', 'HomeController@dashboardAdmin')->middleware('onlyAdmin');
// Route::get('/user/index', 'HomeController@dashboardUser')->middleware('onlyOrdinaryUser');
// Route::get('/notfound/index', 'HomeController@NotFoundPage')->name('notfound');
// Route::get('/admin/catalog', 'HomeController@catalogAdmin')->middleware('onlyAdmin');
// Route::get('/user/catalog', 'HomeController@catalogUser')->middleware('onlyOrdinaryUser');
// Route::get('/admin/member', 'HomeController@memberAdmin')->middleware('onlyAdmin');

<<<<<<< HEAD
Route::group(['middleware' => 'onlyOrdinaryUser'], function () {
    Route::get('user/index', 'PerpusController@dashboardUser')->name('user.index');
    Route::get('user/catalog', 'PerpusController@catalogUser')->name('user.catalog');
    Route::get('{id}', 'PerpusController@userShowBook')->name('user.show');
=======
Route::group(['prefix' => 'user','middleware' => 'onlyOrdinaryUser'], function () {
    Route::get('index', 'PerpusController@dashboardUser')->name('user.index');
    Route::get('catalog', 'PerpusController@catalogUser')->name('user.catalog');
    Route::get('{id}', 'PerpusController@userShowBook')->name('user.showBook');
>>>>>>> b492326ea8e8a70638c8258adaa4854a630ba537
});

// Route::group(['middleware' => 'onlyAdmin'], function () {
//     Route::get('/admin/index', 'PerpusController@dashboardAdmin')->name('admin.index');
//     Route::get('/admin/catalog', 'PerpusController@dashboardAdmin')->name('admin.catalog');
//     Route::get('/admin/member', 'PerpusController@dashboardAdmin')->name('admin.member');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'onlyAdmin'], function () {
    Route::get('index', 'PerpusController@dashboardAdmin')->name('admin.index');
    Route::get('catalog', 'PerpusController@catalogAdmin')->name('admin.catalog');
    Route::get('member', 'PerpusController@memberAdmin')->name('admin.member');

    Route::get('create', 'PerpusController@displayCreateBookPage')->name('admin.create');
    Route::post('create', 'PerpusController@createBook')->name('admin.createpost');

    Route::get('edit/{id}', 'PerpusController@displayEditBookPage')->name('admin.edit');
    Route::put('edit/{id}', 'PerpusController@editBook')->name('admin.editput');

    Route::get('delete/{id}', 'PerpusController@displayDeleteBookPage')->name('admin.deletepage');
    Route::delete('delete/{id}', 'PerpusController@deleteBook')->name('admin.delete');

    Route::get('{id}', 'PerpusController@showBook')->name('admin.detail');
});

Route::get('/notfound/index', 'HomeController@NotFoundPage')->name('notfound');