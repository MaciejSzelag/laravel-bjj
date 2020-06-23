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



// Route::post('pages/admin/dashboard', 'HomeController@index');

Route::get('/dashboard', 'DashboardController@dashboardPanel');
// Route::get('pages.admin.dashboard', 'DashboardController@counerMember');
//Route fo add new member 
Route::post('pages/admin/dashboard/newMemberAdded', 'DashboardController@addMember');

//Route for a new class
Route::post('/pages/admin/dashboard/newClassAdded','DashboardTimetableController@addNewClass');
//Route for new class information
Route::post('/pages/admin/dashboard/newClassInformation','DashboardTimetableController@addNewClassInformation');
//Delete
Route::get('pages/admin/deleteClass/{id}', ['uses'=>'DashboardTimetableController@deleteClass','as'=>'admin.deleteClass']);
Route::get('pages/admin/deleteClassInformation/{id}',['uses'=>'DashboardTimetableController@deleteClassInformation', 'as'=>'admin.deleteClassInformation']);


//direction for update
Route::get('pages/admin/updateClass/{id}', ['uses' => 'DashboardTimetableController@updatedClass',
'as'=>'admin.updateTimetable']);
//save new updates for timetable

Route:: post('pages/admin/updatedTimetable/{id}',['uses'=>'DashboardTimetableController@saveUpdatedClass','as'=>'pages.admin.updateClass']);

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//for logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


//new post

Route::post('/postCreated', 'HomeController@addNewPost');
Route::post('pages/admin/dashboard', 'DashboardController@dashboardPanel');
//delete post
Route::get('home/delete/{id}', ['uses'=>'HomeController@deletePost','as'=>'deletePost']);


