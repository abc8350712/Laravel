@extends('main')
@section('title', '| HomePage')
@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="styles.css">
@endsection
@section('content')
    <div class="container">
      <div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4"><!--width is set by this div -->

      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Search</span></button>
        </span>
      </div><!-- /input-group -->

    </div>
  </div>
</div>
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8">
   
      		@foreach($posts as $post)
      			  <div class="post">
      				<h3>{{$post->title}}</h3>
      				<p>{{substr($post->body, 0, 300)}}{{strlen($post->body)>30?'...':''}}</p>
      				<a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
      			  </div>

      			  <hr>
      		 @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>
      </div>

    </div>
@endsection
@section('scripts')

