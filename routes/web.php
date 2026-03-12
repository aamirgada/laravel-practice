<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/productlist', function () {
    return view('productlist');
});
Route::get('/productcategory', function () {
    return view('productcategory');
});


Route::get('cal/{op}/{num1}/{num2}', function ($op, $num1, $num2) {

    if($op == 'add') {
        $result = $num1 + $num2;
    } 
    else if($op == 'sub') {
        $result = $num1 - $num2;
    } 
    else if($op == 'mul') {
        $result = $num1 * $num2;
    } 
    else if($op == 'div') {
        $result = $num1 / $num2;
    } 
    else {
        $result = "Invalid operation";
    }

    return "Result: $result";   
    
});

// Route::get('/about', function () {
//     return view('about');
// }); 
// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });
