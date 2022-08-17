@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
        <h5 class="card-header-text">Setting</h5>
    </div>
    <div class="card-block">
        <form action="{{route('setting.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Company Name</label>
                        <input type="text" name="company_name" class="form-control" id="name" value="{{$setting->company_name}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Company Website</label>
                        <input type="url" name="company_url" class="form-control" id="name" value="{{$setting->url}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image" class="form-control-label">Logo</label>
                        <input type="file" name="image" class="form-control" id="image" value="{{$setting->logo}}">
                        <img src="{{ asset('setting_img/' . $setting->logo) }}" style="width: 150px;height:150px;" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{$setting->email}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Contact no.</label>
                        <input type="tel" name="contact_no" class="form-control" id="contact" value="{{$setting->contact_no}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Optional Contact</label>
                        <input type="tel" name="contact_optional" class="form-control" id="op_contact" value="{{$setting->contact_optional}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Address</label>
                        <textarea name="address" class="form-control" id=""  cols="30" rows="3">{{$setting->address}}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Facebook Link</label>
                        <input type="url" name="facebook_link" class="form-control" id="" value="{{$setting->facebook_link}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Twitter Link</label>
                        <input type="url" name="twitter_link" class="form-control" id="" value="{{$setting->twitter_link}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Instagram Link</label>
                        <input type="url" name="insta_link" class="form-control" id="" value="{{$setting->insta_link}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Linkedin Link</label>
                        <input type="url" name="linkedin_link" class="form-control" id="" value="{{$setting->linkedin_link}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Google Link</label>
                        <input type="url" name="google_link" class="form-control" id="" value="{{$setting->google_link}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Pinterest Link</label>
                        <input type="url" name="pinterest_link" class="form-control" id="" value="{{$setting->pinterest_link}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">About</label>
                        <textarea name="f_about" class="form-control" id="" rows="5" cols="10">{{$setting->f_about}}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Google Map</label>
                        <input type="url" name="g_map" class="form-control" id="" value="{{$setting->g_map}}">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection