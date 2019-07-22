<?php

namespace App\Http\Controllers;

use App\Product;

use App\Order;

use App\Order_item;

use Session;

use Illuminate\Http\Request;

use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    function addProductToCart($productId){
    	$result = Product::where('id',$productId)->first();
    	// $result = Product::all();
    	// var_dump($result);exit;
    	$add  = Cart::add([
    		'id'=> $productId,
    		'name' =>  $result->productName,
    		'price' =>  $result->productPrice,
    		'quantity' =>  '1',
            'attributes' => array(
                'image' => $result->productImage
            )
    	]);
    	return redirect('cart');
    }

    function showCart(){
        //Session::put('user_id','1');
        $data =[
            'cartItems'=> Cart::getContent(),
            'cartCount'   => count(Cart::getContent()),
            'total' => Cart::getTotal(),
            'page' => 'cart'
        ];
        return view('cart')->with($data);
    	//return Session::get('user_id');
    }

    function emptyCart(){
        Cart::clear();
    }

    function placeOrder(){
        if(count(Cart::getContent())==0){
           return redirect()->action('Products@index');
        }
        else{
            $order = new Order;
            $order->user_id = Session::get('user_id');
            $order->total_price = Cart::getTotal();
            $order->save();
            $order_id = $order->id;
            $cartItem = Cart::getContent();
            foreach($cartItem as $item){
                $order_item = new Order_item;
                $order_item->order_id = $order_id;
                $order_item->item_id = $item->id;
                $order_item->price = $item->price;
                $order_item->quantity = $item->quantity;
                $order_item->save();
            }
            Cart::clear();
            return redirect('orderCompleted');
        }
    }

    function orderCompleted(){
        $data =[
            'cartCount'   => count(Cart::getContent()),
            'total' => Cart::getTotal(),
            'page' => 'cart'
        ];
        return view('thanks')->with($data);
    }
}
