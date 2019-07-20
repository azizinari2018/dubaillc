<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class Products extends Controller
{
    function index(){
    	$products = Product::all();

    	return view('index',compact('products'));
    }
}
