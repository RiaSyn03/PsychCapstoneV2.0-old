<?php

Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/unregistered', function () {
        return view('admin.users.student.unregistered');
    });

Route::get('markAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markRead');

Route::get('/studentdash', function () {
    return view('admin.users.student.studentdash');
});

Route::get('/studentdash', function () {
    return view('admin.users.student.wellness');
});

Route::get('/wellness', function () {
    return view('admin.users.student.wellness');
});

Route::get('/stdntappointment', function () {
    return view('admin.users.student.stdntappointment');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/show', 'HomeController@index')->name('home.show');
Route::get('/search', 'UserFilterController@search');

Route::get('/account/activate/{token}', 'AccountController@activate');

Route::get('/index', function(){
    return view('admin.users');
}) ->middleware(['auth', 'auth.admin']);
 
Route::namespace('Admin') ->prefix('admin')->middleware(['auth', 'auth.admin']) ->name('admin.')->group(function(){
Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
Route::get('/impersonate/user/{id}', 'ImpersonateController@index')->name('impersonate');

});

Route::get('/admin/impersonate/destroy', 'Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



