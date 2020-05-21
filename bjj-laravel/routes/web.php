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

use App\Http\Controllers\indexController;

Route::get('/', 'indexController@index');
Route::get('/about', 'AboutController@about');
Route::get('/gallery', 'GalleryController@gallery');
Route::get('/seminar', 'SeminarController@seminars');
Route::get('/timetable', 'TimetableController@timetable');
Route::get('/prices', 'PricesController@prices');
Route::get('/partners', 'PartnersController@partners');
Route::get('/contactForm', 'ContactFormController@contactForm');
Route::post('/contact', 'ContactFormController@mail');
Route::get('/admin', 'AdminController@showAdmin');
Route::post('pages/admin/dashboard', 'DashboardController@dashboardPanel');
Route::post('pages/admin/dashboard/newMemberAdded', 'DashboardController@addMember');
Route::get('/dashboard', 'DashboardController@dashboardPanel');

