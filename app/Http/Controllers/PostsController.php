<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\posts;

class PostsController extends Controller
{
    
    public function home() 
    {
    
    	return view('posts.index');
  
    }

    public function test()
    {
    	return view('posts.testex');
    }

    public function create()
    {
    	return view('posts.create');
    }
    public function store()
    {

    	/*$posts = new \App\posts;
    	//dd(request(['title', 'body']));
    	//dd(request()->all()); 

    	$posts->title = request('title');
    	$posts->body = request('body');
    	$posts->save();*/

    	$this->validate(request(),[ 

    		'title' => 'required',
    		'body' => 'required'
    		]);

    	posts::create([
    		'title' => request('title'),
    		'body'  => request('body')
    		]);
			
			return redirect('/home');

    		//posts::create(request()->all());
    }

}
