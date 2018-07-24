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

// Landing Pages Routes
Route::get('/', 'LandingPageController@index');
Route::get('/contact-us', 'LandingPageController@contact');

Auth::routes();

// Admin Dashboard Route
Route::get('/admin/dashboard', 'AdminController@index')->name('home');

// Member Routes
Route::get('/become-member', 'LandingPageController@memberRegistration');
Route::get('/admin/member-requests', 'MemberController@memberRequests')->name('member-requests');
Route::get('/admin/registered-members', 'MemberController@registeredMembers')->name('registered-members');
Route::get('/admin/member/{id}', 'MemberController@show');
Route::post('/admin/member/active', 'MemberController@active')->name('make-active');
Route::post('/admin/member/inactive', 'MemberController@inactive')->name('make-inactive');
