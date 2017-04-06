<?php


Route::group(['prefix'=>'vue'],function(){
    Route::get('{path?}','VueController@index');
});

Route::group(['prefix'=>'api'],function(){
    Route::get('/info','VueController@getUserInfo');
});