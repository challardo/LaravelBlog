
@extends('layouts.app')

@section('content')
       <h1> {{$title}}</h1>
       <p> This is the services page</P>
        
@if (count($services) >0)
        <ul class="list-group">
@foreach ($services as $service)
    <li class="list-group-item">{{$service}}</li>
        </ul>

@endforeach
    
@endif
        @endsection
     