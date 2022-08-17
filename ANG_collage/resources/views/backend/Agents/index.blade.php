@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Our Agents</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('agent.create') }}" class="text-dark">Add New Agent</a></button>
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
                                <th>Designation</th>
                                <th>Images</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($agent as $agentss)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $agentss->Name }}</td>
                                    <td>{{ $agentss->email }}</td>
                                    <td>{{ $agentss->contact }}</td>
                                    <td>{{ $agentss->designation }}</td>
                                    <td><img src="{{ asset('images/'. $agentss->images) }}" height="150px" width="150px"
                                            alt=""></td>
                                            <td>@if($agentss->status==1)
          <span class="right badge badge-warning "> Active</span>
            @else <span class="right badge badge-info ">In Active</span>  @endif</td>
          <td>
          <form action="{{route('agent.destroy',$agentss->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('agent.edit',$agentss->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
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
