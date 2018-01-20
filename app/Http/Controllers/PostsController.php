<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\posts;
use App\User;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['home', 'show']);
    }
    
    public function home() 
    {
    
    //posts = Posts::all();

    	$posts = Posts::orderBy('created_at', 'desc')->get();
    	return view('posts.index', compact('posts'));
  
    }

    public function test()
    {
    	return view('posts.testex');
    }

    /*public function show($id)
    {
    	$post = Posts::find($id);

    	return view('posts.show',compact('post'));
    }*/

    public function show(Posts $post)
    {
    	//$post = Posts::find($id);

    	return view('posts.show',compact('post'));
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

        auth()->user()->publish(
            new posts(request(['title','body']))
            );
    	/*posts::create([
    		'title' => request('title'),
    		'body'  => request('body'),
            'user_id' => auth()->id()
    		]);*/
			
			return redirect('/home');

    		//posts::create(request()->all());
    }

}
