@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add People</h5>
    </div>
    <div class="card-block">
       <form action="{{route('about_us.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image" class="form-control-label">founder Image</label>
            <input type="file" name="fimage" class="form-control" id="image" placeholder="Gallery Photos">
         </div>
          <div class="form-group">
             <label for="title" class="form-control-label">Founder Name</label>
             <input type="text" name="fname" class="form-control" id="title" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Founder Message</label>
            <textarea name="fmsg" class="form-control summernote"  cols="30" rows="10"></textarea>
         </div>
         
         <hr class="w-100">

         <div class="form-group">
            <label for="image" class="form-control-label">MD Image</label>
            <input type="file" name="mdimage" class="form-control" id="image" placeholder="Gallery Photos">
         </div>
          <div class="form-group">
             <label for="title" class="form-control-label">MD Name</label>
             <input type="text" name="mdname" class="form-control" id="title" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">MD Message</label>
            <textarea name="mdmsg" class="form-control summernote"  cols="30" rows="10"></textarea>
         </div>

         <hr class="w-100">

         <div class="form-group">
            <label for="image" class="form-control-label">Director Image</label>
            <input type="file" name="dimage" class="form-control" id="image" placeholder="Gallery Photos">
         </div>
          <div class="form-group">
             <label for="title" class="form-control-label">Director Name</label>
             <input type="text" name="dname" class="form-control" id="title" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Director Message</label>
            <textarea name="dmsg" class="form-control summernote"  cols="30" rows="10"></textarea>
         </div>

         <hr class="w-100">

         <div class="form-group">
            <label for="image" class="form-control-label">About Image</label>
            <input type="file" name="about_img" class="form-control" id="image" placeholder="Gallery Photos">
         </div>
          <div class="form-group">
             <label for="title" class="form-control-label">About Content</label>
             <textarea name="aboutmsg" class="form-control summernote"  cols="30" rows="10"></textarea>
             {{-- <input type="text" name="aboutmsg" class="form-control" id="title" placeholder="Enter name"> --}}
          </div>

         <hr class="w-100">

         <div class="form-group">
            <label for="image" class="form-control-label">Trust Image</label>
            <input type="file" name="trust_img" class="form-control" id="image" placeholder="Gallery Photos">
         </div>
          <div class="form-group">
             <label for="title" class="form-control-label">Trust Content</label>
             <textarea name="trustmsg" class="form-control summernote"  cols="30" rows="10"></textarea>
             {{-- <input type="text" name="trustmsg" class="form-control" id="title" placeholder="Enter name"> --}}
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection