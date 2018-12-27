<?php

Route::get('/', 'TermsController@index');
Route::get('/terms/{term}', 'TermsController@show');
