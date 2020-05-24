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

Route::get('/dashboard', 'DashboardController@dashboardPanel');
//Route fo add new member do DB
Route::post('pages/admin/dashboard/newMemberAdded', 'DashboardController@addMember');
//route for delete member
Route::get('pages/admin/delete/{id}', ['uses'=>'DashboardController@deleteMember','as'=>'admin.deleteMember']);
//route for update details about member
Route::get('pages/admin/update/{id}', ['uses'=>'DashboardController@updateMember','as'=>'admin.updateMember']);
Route::post('pages/admin/update/{id}', ['uses' => 'DashboardController@saveUpdate',
'as'=>'pages.admin.update']);

