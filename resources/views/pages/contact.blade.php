@extends('layouts.app')

@section('content')
<h1> contact form </h1>
   <!-- Success message -->

<form action="" method="post" action="/contact">

   <!-- CROSS Site Request Forgery Protection -->
   @csrf

   <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" name="name" id="name">
   </div>

   <div class="form-group">
       <label>Email</label>
       <input type="email" class="form-control" name="email" id="email">
   </div>

   <div class="form-group">
       <label>Phone</label>
       <input type="text" class="form-control" name="phone" id="phone">
   </div>

   <div class="form-group">
       <label>Subject</label>
       <input type="text" class="form-control" name="subject" id="subject">
   </div>

   <div class="form-group">
       <label>Message</label>
       <textarea class="form-control" name="message" id="message" rows="4"></textarea>
   </div>

   <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
@endsection