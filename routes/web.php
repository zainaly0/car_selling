<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/* 

Route::get('/about', function (){
    return view('about');
});

// route require parameter
Route::get('/products/{id}', function(string $id){
    return "mullah $id";
});

// route with optional parameter 
Route::get('/product/{category?}', function($category=null){
    return "this is optional parameter $category";
});
 */

/*

 Route::fallback(function(){
    return redirect()->route('home');
 });

//  parameter in name route

Route::get('/{lang}/product/{id}', function(){
    return "this is mullah zain aly";

})->name('name.route');


Route::get('/accessroute', function(){
    $nameRoutePara = route('name.route', ['zaid', 'aly']);
    // dd($nameRoutePara);
    return "zaid";
});

Route::get('/user/profile', function(){})->name('profile');

*/


Route::get('/{zaid}/{srname}', function(int $zaid,int $srname){
    return ( $zaid+$srname);
})->whereNumber(['zaid', 'srname']);