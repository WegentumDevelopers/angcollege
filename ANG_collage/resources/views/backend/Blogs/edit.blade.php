@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Edit Blogs</h5>
    </div>
    <div class="card-block">
        <form action="{{route('blog.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="form-group">
                 <label for="title" class="form-control-label">Title</label>
                 <input type="text" name="title" class="form-control" id="title" value="{{$blog->title}}">
              </div>
              <div class="form-group">
                <label for="title" class="form-control-label">Public Date</label>
                <input type="date" name="p_date" class="form-control" id="title" value="{{$blog->date}}">
             </div>
             <div class="form-group">
                <label for="title" class="form-control-label">Auther</label>
                <input type="text" name="auther" class="form-control" id="title" value="{{$blog->auther}}">
             </div>
              <div class="form-group">
                <label for="title" class="form-control-label">Tags</label>
                <input type="text" name="tags" class="form-control" id="title" value="{{$blog->tags}}">
             </div>
    
             <div class="form-group">
                <label for="title" class="form-control-label">Category</label>
                <input type="text" list="category" name="category" class="form-control" id="title" value="{{$blog->category}}">
                <datalist id="category">
                    <option value=" ">
                    <option value=" ">
                    <option value=" ">
                    <option value="">
                    <option value=" ">
                  </datalist>
             </div>
    
             <div class="form-group">
                <label for="title" class="form-control-label">Short Description</label>
                <textarea name="s_desc" class="form-control" id="" value="" cols="30" rows="3">{{$blog->short_description}}</textarea>
                {{-- <input type="text" name="" class="form-control" id="title" placeholder="Enter Short Description"> --}}
             </div>
             <div class="form-group">
                <label for="title" class="form-control-label">Long Description</label>
                <textarea name="l_desc" class="form-control summernote" value="" id="" cols="30" rows="10">{{$blog->long_description}}</textarea>
                {{-- <input type="text" name="l_desc" class="form-control" id="title" placeholder="Enter Long Description"> --}}
             </div>
              <div class="form-group">
                 <label for="image" class="form-control-label">Image</label>
                 <input type="file" name="image" class="form-control" id="image" >
                 <img src="{{ asset('blogs/'. $blog->images) }}" height="150px" width="150px" alt="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" class="form-control">
                    <option value="1" @if ($blog->status==1) selected   @endif>Active</option>
                    <option value="0" @if ($blog->status==0) selected   @endif>In Active</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
           </form>
    </div>
 </div>
 @endsection