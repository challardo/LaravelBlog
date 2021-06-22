@extends('layouts.app')

@section('content')
<a href="/dashboard" class="btn btn-primary">Go to Dashboard </a>
   <h1> Create post  </h1> 
   
   {!! Form::open(['action'=>'App\Http\Controllers\PostController@store', 'method'=>'POST', 'enctype'=> 'multipart/form-data' ]) !!}
   <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'title'])}}
   </div>
   <div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'body text', 'value'=> 'hola mundo'])}}

</div>
<div class="form-group">
   {{Form::file('cover_image')}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}
   <div id="editor">
      <header data-inline-inject="true">
         <h2>Gone traveling</h2>
         <h3>Monthly travel news and inspiration</h3>
      </header>
  </div>

@endsection