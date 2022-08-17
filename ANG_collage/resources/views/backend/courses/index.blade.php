@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Courses</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('course.create') }}"
                    class="text-dark">Add Course</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Parenrt Course</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($course as $courses)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $courses->c_name }}</td>
                                    <td>{{ $courses->parent_course }}</td>
                                  
                                    <td><img src="{{ asset('images/' . $courses->c_image) }}" height="150px" width="150px"
                                            alt=""></td>
                                   
                                    <td>
                                        <form action="{{ route('course.destroy', $courses->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('course.edit', $courses->id) }}"
                                                class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="submit" class="btn btn-dark"><i
                                                    class="fa-solid fa-trash-can"></i></button>
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
