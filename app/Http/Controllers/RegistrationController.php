<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    
    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	//validate form

    	$this->validate(request(), [

    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'

    		]);



    	//create and save user

        $user = User::create(request(['name','email','password']));

    	//sign them in

        auth()->login($user);	


        return redirect()->home();
    	//
    }
}
