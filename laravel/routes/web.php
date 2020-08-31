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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/session/{id}', 'sessionController@s1');

Route::get('session1', function() {
    return view('javascript_practice.session_1');
});

Route::get('/PHPtests', function(){
    return view('PHPtests');
});

Route::get('VueSession/{id}', 'sessionController@VueSession');

Route::get('vue', function(){
    return view('learning_vueJS.vue');
});


Route::get('dataStructuresAndAlgorithems/{id}', 'sessionController@jsSession');