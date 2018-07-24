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

Route::get('/', 'LandingPageController@index');
Route::get('/contact-us', 'LandingPageController@contact');
Route::get('/become-member', 'LandingPageController@memberRegistration');

Auth::routes();

Route::get('/admin/dashboard', 'AdminController@index')->name('home');
Route::get('/admin/member-requests', 'MemberController@memberRequests')->name('member-requests');
Route::get('/admin/registered-members', 'MemberController@registeredMembers')->name('registered-members');
Route::get('/admin/member/{id}', 'MemberController@show');
