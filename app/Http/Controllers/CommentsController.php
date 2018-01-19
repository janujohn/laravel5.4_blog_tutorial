<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\posts;

use App\Comment;

class CommentsController extends Controller
{
    //

    public function store(posts $post)
    {
    	/*Comment::create([
    		'body' => request('body'),
    		'posts_id' => $post->id
    		]);*/

    	$this->validate(request(), ['body' => 'required|min:2']);

	$post ->addcomment(request('body'));	
    	return back();
    }
}
