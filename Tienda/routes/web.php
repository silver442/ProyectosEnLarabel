<?php



Route::get('products', function () {
    return view('products.index');
});

Route::get('product/create', function(){
    return view('products.create');
})->name('products.create');


