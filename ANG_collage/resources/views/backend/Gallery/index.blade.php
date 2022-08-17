@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Our Gallery</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('gallery.create') }}"
                    class="text-dark">AddImages</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                {{-- <th>Title</th> --}}
                                <th>Image Type</th>
                                <th>Images</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($image as $images)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    {{-- <td>{{ $images->title }}</td> --}}
                                    <td>
                                        @if ($images->lab == 'on')
                                            <span class="right badge badge-primary">lab</span>
                                        @else
                                            <span class="right badge badge-danger text-light">library</span>
                                        @endif
                                    </td>
                                    <td><img src="{{ asset('galleries/' . $images->images) }}" height="150px"
                                            width="150px" alt=""></td>
                                    <td>
                                        @if ($images->status == 1)
                                            <span class="right badge badge-warning "> Active</span>
                                        @else
                                            <span class="right badge badge-info ">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('gallery.destroy', $images->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('gallery.edit', $images->id) }}" class="btn btn-success"><i
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
{{-- <script>
    $(function() { 
            $('.toggle-class').change(function() { 
            var status = $(this).prop('checked') == true ? 1 : 0;  
            var product_id = $(this).data('id');  
            $.ajax({ 
     
                type: "GET", 
                dataType: "json", 
                url: '/status/update', 
                data: {'status': status, 'product_id': product_id}, 
                success: function(data){ 
                console.log(data.success) 
             } 
          }); 
       }) 
    }); 
 </script> --}}
