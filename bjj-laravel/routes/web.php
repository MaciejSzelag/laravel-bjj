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
// Route::get('pages.admin.dashboard', 'DashboardController@counerMember');
//Route fo add new member 
Route::post('pages/admin/dashboard/newMemberAdded', 'DashboardController@addMember');

//Route for a new class
Route::post('/pages/admin/dashboard/newClassAdded','DashboardTimetableController@addNewClass');
//route for delete member
Route::get('pages/admin/delete/{id}', ['uses'=>'DashboardController@deleteMember','as'=>'admin.deleteMember']);
//route for update details about member
Route::get('pages/admin/update/{id}', ['uses'=>'DashboardController@updateMember','as'=>'admin.updateMember']);
Route::post('pages/admin/updateMember/{id}', ['uses' => 'DashboardController@saveUpdate',
'as'=>'pages.admin.update']);

//route update for plans adults
Route::get('pages/admin/updatePlans/{id}', ['uses'=>'DashboardPriceController@updateAdultPrice','as'=>'admin.updatePrices']);

Route::post('pages/admin/update/{id}', ['uses' => 'DashboardPriceController@saveUpdatePlan',
'as'=>'pages.admin.updatePlans']);







//route update for plans private
// Route::get('pages/admin/updatePrivate/{id}', ['uses'=>'DashboardPriceController@updatePrivatePrice','as'=>'admin.updatePrivatePlan']);

// Route::post('pages/admin/updatePrivate/{id}', ['uses' => 'DashboardPriceController@saveUpdatePrivatePlan',
// 'as'=>'pages.admin.updatePrivate']);

//route update for plans kids
// Route::get('pages/admin/updateKids/{id}', ['uses'=>'DashboardPriceController@updateKidsPrice','as'=>'admin.updateKidsPlan']);
// Route::post('pages/admin/updateKids/{id}', ['uses' => 'DashboardPriceController@saveUpdateKidsPlan',
// 'as'=>'pages.admin.updateKids']);