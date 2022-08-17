@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Feedbacks</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('testimonial.create') }}"
                    class="text-dark">Add Feedback</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($feedback as $feeds)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $feeds->Name }}</td>
                                    <td>{{ $feeds->email }}</td>
                                    <td>{{ $feeds->subject }}</td>
                                    <td>{{ $feeds->message }}</td>
                                    <td><img src="{{ asset('images/'. $feeds->images) }}" height="150px" width="150px"
                                        alt=""></td>
                                    <td>
                                        @if ($feeds->status == 1)
                                            <span class="right badge badge-warning "> Active</span>
                                        @else
                                            <span class="right badge badge-info ">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('testimonial.destroy',$feeds->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('testimonial.edit',$feeds->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
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
