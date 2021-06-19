@extends('layouts.app')

@section('content')
<a href="/dashboard" class="btn btn-primary">Go to Dashboard  </a>
   <h1> Edit post  </h1> 
   
   {!! Form::open(['action'=>['App\Http\Controllers\PostController@update', $post->id], 'method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
   <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control', 'placeholder'=>'title'])}}
   </div>
   <div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'body text'])}}

</div>
<div class="form-group">
   {{Form::file('cover_image')}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Save changes', ['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}

@endsection