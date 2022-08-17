@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Our Blogs</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{route('blog.create')}}" class="text-dark">Post a Blog</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Auther</th>
                                <th>Title</th>
                                <th>Tags</th>
                                <th>Category</th>
                                <th>Short Description</th>
                                {{-- <th>Long Description</th> --}}
                                <th>Images</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($blog as $blogs)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $blogs->auther }}</td>
                                    <td>{{ $blogs->title }}</td>
                                    <td>{{ $blogs->tags}}</td>
                                    <td>{{ $blogs->category}}</td>
                                    <td>{{ $blogs->short_description}}</td>
                                    {{-- <td>{{ $blogs->long_description}}</td> --}}
                                    <td><img src="{{ asset('blogs/'. $blogs->images) }}" height="150px" width="150px"
                                            alt=""></td>
                                    <td>{{ $blogs->date}}</td>
                                            <td>@if($blogs->status==1)
          <span class="right badge badge-warning "> Active</span>
            @else <span class="right badge badge-info ">In Active</span>  @endif</td>
          <td>
          <form action="{{route('blog.destroy',$blogs->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('blog.edit',$blogs->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                <button type="submit" class="btn btn-dark"><i class="fa-solid fa-trash-can"></i></button>
            </form>
            
          </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
