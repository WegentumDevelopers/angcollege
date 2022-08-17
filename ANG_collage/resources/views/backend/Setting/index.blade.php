@extends('layouts.new_app')
@section('new_content')
<div class="card" style="overflow:scroll">
    <div class="card-header">
        <h5 class="card-header-text"> Settings</h5>
        {{-- <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('setting.create') }}" class="text-dark"> Add changes</a></button> --}}

    </div>
    <div class="card-block">
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>logo</th>
                            <th>company_name</th>
                            <th>contact_no</th>
                            <th>contact_optional</th>
                            <th>address</th>
                            <th>email</th>
                            {{-- <th>facebook_link</th>
                            <th>twitter_link</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($setting as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="{{ asset('setting_img/' . $data->logo) }}" height="60px" width="60px" alt=""></td>
                            <td>{{ $data->company_name }}</td>
                            <td>{{$data->contact_no}}</td>
                            <td>{{$data->contact_optional}}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->email }}</td>
                            {{-- <td>{{$data->facebook_link}}</td>
                            <td>{{$data->twitter_link}}</td> --}}
                            <td>
                                <form action="{{ route('setting.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <a href="{{ route('setting.edit', $data->id) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                    {{-- <button type="submit" class="btn btn-dark"><i class="fa-solid fa-trash-can"></i></button> --}}
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