<?php

Route::get('add/{a}/{b}', 'Mazhar\Calculator\CalculatorController@add');

Route::get('subtract/{a}/{b}', 'Mazhar\Calculator\CalculatorController@subtract');