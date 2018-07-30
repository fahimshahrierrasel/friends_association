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
Route::get('/admin/member-requests', 'MemberController@memberRequests')->name('member-requests');
Route::get('/admin/registered-members', 'MemberController@registeredMembers')->name('registered-members');
Route::get('/admin/member/{id}', 'MemberController@show');
Route::get('/admin/member/active/{id}', 'MemberController@activeShow');
Route::post('/admin/member/active', 'MemberController@active')->name('make-active');
Route::post('/admin/member/inactive', 'MemberController@inactive')->name('make-inactive');

//Member Registration Multi page Form
Route::get('/member-reg-info','Member\MemberRegistrationController@memberRegistrationShow');
Route::post('/member-reg-info','Member\MemberRegistrationController@memberRegistrationStore');

Route::get('/nominee-reg-info','Member\MemberRegistrationController@nomineeRegistrationShow');
Route::post('/nominee-reg-info','Member\MemberRegistrationController@nomineeRegistrationStore');

Route::get('/member-image','Member\MemberRegistrationController@memberImageShow');
Route::post('/member-store','Member\MemberRegistrationController@memberStore');

// Installments
Route::get('/admin/installments', 'InstallmentController@index')->name('installments');
Route::get('/admin/installments/new', 'InstallmentController@create')->name('new_installment');
Route::get('/admin/installment/add/{id}', 'InstallmentController@createInstallment');