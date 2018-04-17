<?php

Route::get('/', ['as' => 'inicio', 'uses' => 'Crudpaginas@inicio']);

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'Crudpaginas@saludo'])->where('nombre',"[A-Za-z]+");

Route::resource('publicaciones','Crudpublicaciones');

Route::get('login',['as'=>'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::post('login',['as'=>'login', 'uses' => 'Auth\LoginController@login']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

route::resource('registros','Crudusers');
