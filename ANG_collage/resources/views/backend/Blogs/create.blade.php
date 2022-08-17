@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add BloG</h5>
    </div>
    <div class="card-block">
       <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Title</label>
             <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Public Date</label>
            <input type="date" name="p_date" class="form-control" id="title" >
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Auther</label>
            <input type="text" name="auther" class="form-control" id="title" placeholder="Enter Auther Name">
         </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Tags</label>
            <input type="text" name="tags" class="form-control" id="title" placeholder="Enter tags">
         </div>

         <div class="form-group">
            <label for="title" class="form-control-label">Category</label>
            <input type="text" list="category" name="category" class="form-control" id="title" placeholder="Enter category">
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
            <textarea name="s_desc" class="form-control" id="" placeholder="Enter Short Description" cols="30" rows="3"></textarea>
            {{-- <input type="text" name="" class="form-control" id="title" placeholder="Enter Short Description"> --}}
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Long Description</label>
            <textarea name="l_desc" class="form-control summernote" placeholder="Enter Long Description" id="" cols="30" rows="10"></textarea>
            {{-- <input type="text" name="l_desc" class="form-control" id="title" placeholder="Enter Long Description"> --}}
         </div>
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="image" placeholder="Gallery Photos">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection