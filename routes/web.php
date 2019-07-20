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

// Route::get('/', function () {
	
//     return view('welcome');
// });

Route::get('/', 'Products@index');

Route::get('new', function () {
	//echo asset('');
    return view('index');
});

Route::get('productsUpload', function (App\Product $product) {
	//$product = new Product;
	$product->supplierId = '1';
	$product->prouctName = 'Product One';
	$product->productPrice = '100';
	$product->productInventory = '10';
	$product->productImage = 'productImage.png';
	$product->save();
    return 'Products uploaded successfully';
});

Route::get('print', function () {
	DB::table('products')->orderBy('id')->chunk(100, function ($products) {
	    foreach ($products as $product) {
	        echo $product->id;
	        var_dump($product);
	    }
	});
    
});

Route::get('addToCart/{prductId}','CartController@addProductToCart');
Route::get('cart','CartController@showCart');

