<?php


Route::get('/', function () {
    return "微信搜索 “云档” 进入小程序";
});

Route::get("/jike","JiKeController@index");
Route::get("/jike-content","JiKeController@content");

//Auth::routes();


