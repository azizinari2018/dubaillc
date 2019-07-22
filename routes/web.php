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
    return view('index');
});

// delete this section 
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
// end delete section

//add item to the cart
Route::get('addToCart/{prductId}','CartController@addProductToCart');

//show the cart page
Route::get('cart','CartController@showCart');

//flush the cart by url
Route::get('emptyCart','CartController@emptyCart');

//customer login and logout
Route::post('login','User@login')->name('login');

Route::get('logout','User@logout');
//customer  end

//order checkout
Route::get('checkout','CartController@placeOrder');

//order completed
Route::get('orderCompleted','CartController@orderCompleted');

//admin Section
Route::get('portal','AdminController@login');

Route::get('adminLogout','AdminController@logout');

Route::post('adminLoginSubmit','AdminController@loginSubmit');

Route::get('adminDashboard','AdminController@dashboard');

//admin Product
Route::get('adminProducts','AdminController@adminProducts');
Route::get('adminAddProduct','AdminController@adminAddProduct');
Route::get('adminEditProduct/{id}','AdminController@adminEditProduct');
Route::post('submitNewProduct','AdminController@submitNewProduct');
Route::post('updateProduct','AdminController@updateProduct');
Route::get('adminDeleteProduct/{id}','AdminController@adminDeleteProduct');

//admin Customers
Route::get('adminUsers','AdminController@adminUsers');
Route::get('adminDeleteUser/{id}','AdminController@adminDeleteUser');


//admin Suppliers
Route::get('adminSuppliers','AdminController@adminSuppliers');
Route::get('adminAddSupplier','AdminController@adminAddSupplier');
Route::get('adminEditSupplier/{id}','AdminController@adminEditSupplier');
Route::post('submitNewSupplier','AdminController@submitNewSupplier');
Route::post('updateSupplier','AdminController@updateSupplier');
Route::get('adminDeleteSupplier/{id}','AdminController@adminDeleteSupplier');


//admin orders
Route::get('adminOrders','AdminController@adminOrders');
Route::get('adminDeleteOrder/{id}','AdminController@adminDeleteOrder');

