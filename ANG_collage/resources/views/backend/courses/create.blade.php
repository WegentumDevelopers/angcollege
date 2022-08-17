@extends('layouts.new_app')
@section('new_content')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Course Add</h5>
    </div>
    <div class="card-block">
       <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Name</label>
             <input type="text" name="cname" class="form-control" id="title" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Image</label>
            <input type="file" name="c_image" class="form-control" >
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Parent Courses</label>
            <select name="p_course" class="form-control">
                <option selected disabled >-select-</option>
                <option value="Courses">Courses</option>
                @foreach($course as $cos)
                <option value="{{$cos->c_name}}">{{$cos->c_name}}</option>
                @endforeach
            </select>
         </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Description</label>
            <div id="editor"></div>
            {{-- <input type="email" name="email" class="form-control" id="title" placeholder="Enter email"> --}}
         </div>
        
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>

<script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
 @endsection