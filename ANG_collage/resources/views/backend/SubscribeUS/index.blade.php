@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Feedbacks</h5>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Subscribe At</th>
                                <th>Un subscribe At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($user as $users)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $users->created_at }}</td>
                                    <td>{{ $users->	Un_subscribe_At	 }}</td>
                                    
                                    <td>
                                        <form action="{{ route('testimonial.destroy', $users->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                           
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
