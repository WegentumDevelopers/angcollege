@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Feedback Add</h5>
    </div>
    <div class="card-block">
       <form action="{{route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Name</label>
             <input type="text" name="fname" class="form-control" id="title" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Email</label>
            <input type="email" name="email" class="form-control" id="title" placeholder="Enter email">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Subject</label>
            <input type="text" name="subject" class="form-control" id="title" placeholder="Enter contact number">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Image</label>
            <input type="file" name="image" class="form-control" >
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Message</label>
            <input type="text" name="msg" class="form-control" id="title" placeholder="Enter designation">
         </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection