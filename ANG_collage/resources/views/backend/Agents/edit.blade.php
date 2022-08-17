@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Update</h5>
    </div>
    <div class="card-block">
       <form action="{{route('agent.update',$agent->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
             <label for="title" class="form-control-label">Name</label>
             <input type="text" name="fname" class="form-control"  value="{{$agent->Name}}">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Email</label>
            <input type="email" name="email" class="form-control"  value="{{$agent->email}}">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Contact</label>
            <input type="text" name="phone" class="form-control"  value="{{$agent->contact}}">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Designation</label>
            <input type="text" name="designation" class="form-control"  value="{{$agent->designation}}">
         </div>
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="image" >
             <img src="{{ asset('images/'. $agent->images) }}" height="150" width="150" alt="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control">
                <option value="1" @if ($agent->status==1) selected   @endif>Active</option>
                <option value="0" @if ($agent->status==0) selected   @endif>In Active</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
       </form>
    </div>
 </div>
 @endsection