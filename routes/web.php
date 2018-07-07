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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/contact', 'PagesController@store')->name('contact.store');



/*Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});*/


Route::get('/viewmsg', function () {
    return view('pages.viewmsg');
});

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/displaymsg', function () {
    return view('pages.displaymsg');
});





Route::post('/contact', function () {

    $data = request()->all();

    echo "Email: " . $data['email']. '<br>';
    echo "Body: " . $data['body'];


});
