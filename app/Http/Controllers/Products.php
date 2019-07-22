<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use Darryldecode\Cart\Facades\CartFacade as Cart;

class Products extends Controller
{
    function index(){
    	$products = Product::where('is_deleted','0')->get();
    	$data = [
		    'products'  => $products,
		    'cartCount'   => count(Cart::getContent()),
            'page' => 'home'
		];

    	return view('index')->with($data);
    }
}
