@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Enquiry</h5>
            {{-- <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('ourteam.create') }}" class="text-dark">Add Member</a></button> --}}
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
                                <th>Contact</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($list as $lists)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $lists->Name }}</td>
                                    <td>{{ $lists->email }}</td>
                                    <td>{{ $lists->contact }}</td>
                                    <td>{{ $lists->subject }}</td>
                                    <td>{{ $lists->message }}</td>
                                            <td>@if($lists->status==1)
          <span class="right badge badge-warning "> Active</span>
            @else <span class="right badge badge-info ">In Active</span>  @endif</td>
          <td>
          <form action="{{route('enquiries.destroy',$lists->id)}}" method="POST">
                @csrf
                @method('Delete')
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
