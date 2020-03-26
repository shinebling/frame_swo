<?php
// http的路由
use Swo\Routes\Route;
Route::get('index', function(){
    return 'this is route index () tests';
});

Route::get('/index/index', 'IndexController@index');
