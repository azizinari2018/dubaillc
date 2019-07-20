<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    function addProductToCart($productId){
    	$result = Product::where('id',$productId)->first();
    	// $result = Product::all();
    	//var_dump($result);exit;
    	$add  = Cart::add([
    		'id'=> $productId,
    		'name' =>  $result->prouctName,
    		'price' =>  $result->productPrice,
    		'quantity' =>  '1'
    	]);
    	return redirect('cart');
    }

    function showCart(){
    	echo "This is cart";
    }
}
