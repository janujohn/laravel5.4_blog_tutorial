<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = array('body', 'posts_id');
    public function post()
    {
    	//return $this->belongsTo('App\posts', 'posts_id', 'id');
    	return $this->belongsTo(posts::class);
  
    }
}
