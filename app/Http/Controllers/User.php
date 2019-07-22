<?php

namespace App\Http\Controllers;

use App\Customer;

Use Session;

use Illuminate\Http\Request;

class User extends Controller
{
    function login(Request $request){
    	$email = $request->input('loginEmail');
    	$password = $request->input('loginPassword');

    	$count = Customer::where('email',$email)->where('password',$password)->count();
    	if($count>0){
    		$result = Customer::where('email',$email)->where('password',$password)->first();
    		Session::put('user_id',$result->id);
    		Session::put('email',$result->email);
    		return 'success';
    	}
    	else{
    		return 'error';
    	}

    }

    function logout(){
    	Session::flush();
    	return redirect()->action('Products@index');
    }
}
