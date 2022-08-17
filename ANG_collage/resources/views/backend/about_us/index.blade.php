@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">About</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('about_us.create') }}"
                    class="text-dark">Add Member</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>founder Name</th>
                                <th>Director Name</th>
                                <th>Managing Director Name</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($people as $peo)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $peo->fname }}</td>
                                    <td>{{ $peo->dname }}</td>
                                    <td>{{ $peo->mdname }}</td>
                                  
                                  
                                    <td>
                                        <form action="{{ route('about_us.destroy', $peo->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('about_us.edit', $peo->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            {{-- <button type="submit" class="btn btn-dark"><i
                                                    class="fa-solid fa-trash-can"></i></button> --}}
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
