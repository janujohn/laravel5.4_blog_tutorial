<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user() //$comment->post->user
    {
        return $this->belongsTo(User::class);
  
    }

    public function addcomment($body)
    {
    	/*Comment::create([

    		'body' => $body,
    		'posts_id' => $this->id
    		
    		]);
*/
            $this->comments()->create(compact('body'));
    } 
}

