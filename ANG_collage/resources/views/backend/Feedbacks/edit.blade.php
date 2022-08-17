@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Edit Feedbacks</h5>
    </div>
    <div class="card-block">
       <form action="{{route('testimonial.update',$feedback->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
             <label for="title" class="form-control-label">Name</label>
             <input type="text" name="fname" class="form-control" id="title" value="{{$feedback->Name}}">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Email</label>
            <input type="email" name="email" class="form-control" id="title" value="{{$feedback->email}}">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Subject</label>
            <input type="text" name="subject" class="form-control" id="title" value="{{$feedback->subject}}">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Image</label>
            <input type="file" name="image" class="form-control" >
            <img src="{{ asset('images/'. $feedback->images) }}" height="150px" width="150px"
                                        alt="">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Message</label>
            <input type="text" name="msg" class="form-control" id="title" value="{{$feedback->message}}">
         </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control">
                <option value="1" @if ($feedback->status==1) selected   @endif>Active</option>
                <option value="0" @if ($feedback->status==0) selected   @endif>In Active</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection