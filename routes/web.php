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

Route::get('/student', function () {
    return view('pages.Student');
});
Route::get('/teacher', function () {
    return view('pages.teachers');
});
Route::get('/Updateteacher', function () {
    return view('pages.updateTeacher');
});
Route::get('/class', function () {
    return view('pages.class');
});
Route::get('/grade', function () {
    return view('pages.grades');
});
Route::get('/Updategrade', function () {
    return view('pages.UpdateGrade');
});
Route::get('/schedule', function () {
    return view('pages.schedule');
});
Route::get('/absence', function () {
    return view('pages.absences');
});
Route::get('/viewAbsence', function () {
    return view('pages.viewAbsenc');
});
Route::get('/payment', function () {
    return view('pages.payment');
});
Route::get('/Updatepayment', function () {
    return view('pages.UpdatePayment');
});
Route::get('/activites', function () {
    return view('pages.activites');
});
Route::get('/showActivites', function () {
    return view('pages.showActivites');
});
Route::get('/news', function () {
    return view('pages.News');
});

Route::get('/UpdateNews', function () {
    return view('pages.UpdateNews');
});

Route::get('/UpdateStudent', function () {
    return view('pages.UpdateStudent');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/chart', function () {
    return view('pages.chart');
});
Route::get('/library', function () {
    return view('pages.libraryBook');
});
Route::get('/libraryBook', function () {
    return view('pages.library');
});