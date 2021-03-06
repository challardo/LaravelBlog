@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">go back </a>
   <h1> {{$post->title}} </h1> 
   <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
    <div> 
        {!!$post->body!!}
    </div>
    <hr>
    <small> Written on {{$post->created_at}} </small>
    <hr>
    @if (!Auth::guest())
    @if (Auth::user()->id == $post->user_id)

    <div class="btn-group " >
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit </a>

        {!!Form::open(['action'=>['App\Http\Controllers\PostController@destroy',$post->id],'method'=>'POST'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}

    </div>
    @endif
    @endif
  
@endsection