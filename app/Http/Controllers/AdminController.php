<?php

namespace App\Http\Controllers;

use Session;

use App\Admin;
use App\Product;
use App\Supplier;
use App\Customer;
use App\Order;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login(){
    	$data = [
    			'error' => ''
    		];
    	return view('adminLogin')->with($data);
    }

    function loginSubmit(Request $request){
    	$username = $request->input('username');
    	$password = $request->input('password');

    	$count = Admin::where('username',$username)->where('password',$password)->count();
    	if($count>0){
    		$result = Admin::where('username',$username)->where('password',$password)->first();
    		Session::put('admin_id',$result->id);
    		Session::put('username',$result->username);
    		return redirect()->action('AdminController@dashboard');
    	}
    	else{
    		$data = [
    			'error' => 'Username or Password is incorrect.'
    		];
    		return view('adminLogin')->with($data);
    	}

    }

    function logout(){
    	Session::flush();
    	return redirect()->action('AdminController@login');
    }


    function dashboard(){
    	$data = [
    			'page' => 'dashboard'
    		];
    	return view('adminDashboard')->with($data);
    } 

    function adminProducts(){
    	$products = DB::table('products')
            ->join('suppliers', 'suppliers.id', '=', 'products.supplierId')
            ->select('products.*', 'suppliers.name as supplierName')
            ->where('products.is_deleted','0')
            ->get();
    	$data = [
    		    'products'  => $products,
    			'page' => 'products',
    			'message' => ''
    		];
    	return view('adminProductList')->with($data);
    }

    function adminAddProduct(){
    	$suppliers = Supplier::all();
    	$data = [
    			'suppliers' => $suppliers,
    			'page' => 'products'
    		];
    	return view('adminAddProduct')->with($data);
    } 

    function adminEditProduct($id){
    	$products = Product::find($id);
    	$suppliers = Supplier::all();
    	$data = [
    		    'product' => $products,
    			'suppliers' => $suppliers,
    			'page' => 'products'
    		];
    	return view('adminEditProduct')->with($data);
    }

    function submitNewProduct(Request $request){
    	$productName = $request->input('productName');
    	$supplierId = $request->input('supplierId');
    	$productPrice = $request->input('productPrice');
    	$productInventory = $request->input('productInventory');
    	$file = $request->file('productImage');
    	$productImage = $file->getClientOriginalName();
    	 //Move Uploaded File
	    $destinationPath = 'img/products';
	    $fileNewName = time().$file->getClientOriginalName();
	    $file->move($destinationPath,$fileNewName);

	    $product = new Product;
	    $product->productName = $productName;
	    $product->supplierId = $supplierId;
	    $product->productPrice = $productPrice;
	    $product->productInventory = $productInventory;
	    $product->productImage = $fileNewName;
	    $product->save();
	    
	    return redirect('adminProducts')->with('message','Your Product has been added successfully');
    }

    function adminDeleteProduct($id){
    	$product = Product::find($id);
    	//$product->delete();
    	$product->is_deleted = '1';
    	$product->save();
    	return redirect('adminProducts')->with('message','Your Product has been deleted successfully');
    }

    function updateProduct(Request $request){
    	$id = $request->input('id');
    	$productName = $request->input('productName');
    	$supplierId = $request->input('supplierId');
    	$productPrice = $request->input('productPrice');
    	$productInventory = $request->input('productInventory');

    	$product = Product::find($id);
    	if ($request->hasFile('productImage')) {
	    	$file = $request->file('productImage');
	    	$productImage = $file->getClientOriginalName();
	    	 //Move Uploaded File
		    $destinationPath = 'img/products';
		    $fileNewName = time().$file->getClientOriginalName();
		    $file->move($destinationPath,$fileNewName);
		    $product->productImage = $fileNewName;
		}

	    
	    $product->productName = $productName;
	    $product->supplierId = $supplierId;
	    $product->productPrice = $productPrice;
	    $product->productInventory = $productInventory;
	    
	    $product->save();
	    
	    return redirect('adminProducts')->with('message','Your Product has been updated successfully');
    }

    //admin customers
    function adminUsers(){
    	$users = DB::table('customers')
            ->select('customers.*')
            ->where('customers.is_deleted','0')
            ->get();
    	$data = [
    		    'users'  => $users,
    			'page' => 'users',
    			'message' => ''
    		];
    	return view('adminUserList')->with($data);
    }

    function adminDeleteUser($id){
    	$product = Customer::find($id);
    	//$product->delete();
    	$product->is_deleted = '1';
    	$product->save();
    	return redirect('adminUsers')->with('message','User has been deleted successfully');
    }

    //admin supplier
    function adminSuppliers(){
    	$suppliers = DB::table('suppliers')
            ->select('suppliers.*')
            ->where('suppliers.is_deleted','0')
            ->get();
    	$data = [
    		    'suppliers'  => $suppliers,
    			'page' => 'suppliers',
    			'message' => ''
    		];
    	return view('adminSupplierList')->with($data);
    }

    function adminAddSupplier(){
    	$data = [
    			'page' => 'suppliers'
    		];
    	return view('adminAddSupplier')->with($data);
    } 

    function adminEditSupplier($id){
    	$suppliers = Supplier::find($id);
    	$data = [
    			'supplier' => $suppliers,
    			'page' => 'suppliers'
    		];
    	return view('adminEditSupplier')->with($data);
    }

    function submitNewSupplier(Request $request){
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$phone = $request->input('phone');

	    $supplier = new Supplier;
	    $supplier->name = $name;
	    $supplier->email = $email;
	    $supplier->password = $password;
	    $supplier->phone = $phone;
	    
	    $supplier->save();
	    
	    return redirect('adminSuppliers')->with('message','New Supplier has been added successfully');
    }

    function adminDeleteSupplier($id){
    	$product = Supplier::find($id);
    	//$product->delete();
    	$product->is_deleted = '1';
    	$product->save();
    	return redirect('adminSuppliers')->with('message','Supplier has been deleted successfully');
    }

    function updateSupplier(Request $request){
    	$id = $request->input('id');
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$phone = $request->input('phone');

    	$supplier = Supplier::find($id);
    	$supplier->name = $name;
	    $supplier->email = $email;
	    $supplier->password = $password;
	    $supplier->phone = $phone;
	    
	    $supplier->save();
	    
	    return redirect('adminSuppliers')->with('message','Supplier has been updated successfully');
    }

    //admin orders
    function adminOrders(){
    	$orders = DB::table('orders')
    		->join('customers', 'customers.id', '=', 'orders.user_id')
            ->select('orders.*','customers.name','customers.email','customers.phone')
            ->where('orders.is_deleted','0')
            ->get();
    	$data = [
    		    'orders'  => $orders,
    			'page' => 'orders',
    			'message' => ''
    		];
    	return view('adminOrderList')->with($data);
    }

    function adminDeleteOrder($id){
    	$product = Order::find($id);
    	//$product->delete();
    	$product->is_deleted = '1';
    	$product->save();
    	return redirect('adminOrders')->with('message','Order has been deleted successfully');
    }
}
