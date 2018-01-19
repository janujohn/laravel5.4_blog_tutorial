 @extends('layouts.master')


 @section('content') 
  <div class="col-sm-8 blog-main">

<h2 class="blog-post-title">{{ $post-> title}}</h2>
 
            {{ $post->body }}
            <hr>
            <div class="comment">
            <ul class="list-0item">
             @foreach($post->comments as $comment)
             <strong>{{ $comment->created_at->diffForHumans() }}</strong>
            <li class="list-item-group">
            	
            	{{ $comment->body }}
            </li>

            @endforeach
            </ul> 
             </div>
             <div class="card">
             	<div class="card-block">
             		<form method="post" action="/posts/{{$post->id}}/comments">
             		{{ csrf_field() }}
	             			<div class="form-group">
	             			<textarea name="body" placeholder="your comments here" required></textarea>
	             			</div>

	             			<div class="form-group">
  		<button type="submit" class="btn btn-primary">Add comment</button>
             			</div>


             		</form>

                    @include('layouts.errors')
             	</div>
             </div>


</div>
    @endsection      