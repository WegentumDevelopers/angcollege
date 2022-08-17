@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Edit Gallery</h5>
    </div>
    <div class="card-block">
       <form action="{{route('gallery.update',$gallery->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title" class="form-control-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$gallery->title}}">
         </div>
         <div class="form-group">
            <label for="image" class="form-control-label">Image</label>
            <input type="file" name="image" class="form-control" id="image" placeholder="Gallery Photos">
            <img src="{{asset('galleries/'.$gallery->images)}}" height="150px" width="150px" alt="">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">lab</label>
            <input type="radio" name="lab" class="form-control" id="title" placeholder="Enter title">
         </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control">
                <option value="1" @if ($gallery->status==1) selected   @endif>Active</option>
                <option value="0" @if ($gallery->status==0) selected   @endif>In Active</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
       </form>
    </div>
 </div>
 @endsection