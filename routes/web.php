<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlidersController;
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


Route::as('app.')->group(function() {

        Route::get('/' , 'IndexController@index')->name('home');
        Route::get('/services/{id}' , 'IndexController@services')->name('services');
        Route::get('/contact' , 'IndexController@contact')->name('contact');
    });



Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'user.type:admin,super-admin'],
], function() {
    Route::get('/' , 'AdminController@index')->name('Admin_dashboard');
    Route::resource('/sliders', 'SlidersController');
    Route::resource('/services', 'ServicesController');
    Route::resource('/doctors', 'DoctorsController');
    Route::resource('/clients', 'ClientsController');
    Route::resource('/gallerys', 'GallerysController');
    Route::delete('gallerysdeleteAll', 'GallerysController@deleteAll')->name('gallerys.deleteAll');
    Route::delete('slidersdeleteAll', 'SlidersController@deleteAll')->name('sliders.deleteAll');
    Route::delete('servicesdeleteAll', 'ServicesController@deleteAll')->name('services.deleteAll');
    Route::delete('clientsdeleteAll', 'ClientsController@deleteAll')->name('clients.deleteAll');
    Route::delete('doctorsdeleteAll', 'DoctorsController@deleteAll')->name('doctors.deleteAll');
    Route::delete('contactdeleteAll', 'ContactMessagesController@deleteAll')->name('contact.deleteAll');
    Route::delete('appointmentsdeleteAll', 'AppointmentsController@deleteAll')->name('appointments.deleteAll');

    Route::get('contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
    Route::put('contact/{id}', 'ContactController@update')->name('contact.update');

    Route::get('messages/', 'ContactMessagesController@index')->name('messages.index');
    Route::post('messages/', 'ContactMessagesController@store')->name('messages.store');
    Route::get('messages/{id}', 'ContactMessagesController@show')->name('messages.show');


    Route::get('appointments/', 'AppointmentsController@index')->name('appointments.index');
    Route::post('appointments/', 'AppointmentsController@store')->name('appointments.store');
    Route::get('appointments/{id}', 'AppointmentsController@show')->name('appointments.show');
    });

    Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
        return redirect()
        ->route('admin.Admin_dashboard');
    })->name('dashboard');
