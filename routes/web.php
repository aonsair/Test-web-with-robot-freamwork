<?php

/************************************************
                  Login Redirect
 ************************************************/
Auth::routes();

/************************************************
                  Home Controller
 ************************************************/
Route::get('/', 'HomeController@showSample');


/************************************************
                Review Controller
 ************************************************/
Route::get('review/unpublished', 'ReviewController@unpublished');
Route::get('review/delete/{id}', 'ReviewController@destroy' ); // จำเป็นต้องใช้เนื่องจาก tag <a> ไม่ support action ทำให้ต้องสร้าง route --> ปุ่มอยู่ที่หน้า show
Route::resource('review','ReviewController');


/************************************************
                  Trip Controller
 ************************************************/
Route::get('trip/unpublished', 'TripController@unpublished');
Route::get('trip/delete/{id}', 'TripController@destroy' ); // จำเป็นต้องใช้เนื่องจาก tag <a> ไม่ support action ทำให้ต้องสร้าง route --> ปุ่มอยู่ที่หน้า show
Route::resource('trip','TripController');


/************************************************
                 Comment Controller
 ************************************************/
Route::post('review/{id}', 'CommentController@store' );


/************************************************
               Language Switching
 ************************************************/
Route::get('lang/{lang}', function($lang){
    $availLanguages = ['en', 'th'];
    Session::put('locale', in_array($lang, $availLanguages)? $lang : Config::get('app.locale'));
    return redirect()->back();
});


