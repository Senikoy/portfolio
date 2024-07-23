<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/about', function(){
    //return view ('this is about page');//
    return view ('about');
});
route::get('/product', function(){
    //return ('this is product page');//
    return view('product', ['name' => 'shoes']);
});
route::get('/portfolio', function(){
    //return ('this is product page');//
    return view('portfolio');
});
route::get('name/{name?}', function($name = 'guest'){
    return ('my name is '. $name);
});
