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
