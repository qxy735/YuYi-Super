<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

Route::get('/', function () {
    echo '<h3 align="center">Welcome To Using YuYiPHP Framework !</h3>';
});

Route::get('/', 'IndexController@index');

Route::get('index/index', 'IndexController@index');

Route::group(array('before' => 'auth'), function () {
    Route::get('index/show', 'IndexController@show');
    Route::get('index/add', 'IndexController@add');
});

Route::get('/test', function(){
    echo 'this is a test !';
});