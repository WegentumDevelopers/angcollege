@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
        <h5 class="card-header-text">Setting</h5>
    </div>
    <div class="card-block">
        <form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Company Name</label>
                        <input type="text" name="company_name" class="form-control" id="name" placeholder="Enter name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Company Website</label>
                        <input type="url" name="company_url" class="form-control" id="name" placeholder="Enter url">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image" class="form-control-label">Logo</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Add image">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Contact no.</label>
                        <input type="tel" name="contact_no" class="form-control" id="contact" placeholder="Enter mobile no.">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Optional Contact</label>
                        <input type="tel" name="contact_optional" class="form-control" id="op_contact" placeholder="Enter optional mobile no.">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Address</label>
                        <textarea name="address" class="form-control" id="" placeholder="Enter address" cols="30" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Facebook Link</label>
                        <input type="url" name="facebook_link" class="form-control" id="" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Twitter Link</label>
                        <input type="url" name="twitter_link" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Instagram Link</label>
                        <input type="url" name="insta_link" class="form-control" id="" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Linkedin Link</label>
                        <input type="url" name="linkedin_link" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Google Link</label>
                        <input type="url" name="google_link" class="form-control" id="" placeholder="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Pinterest Link</label>
                        <input type="url" name="pinterest_link" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">About</label>
                        <textarea name="f_about" class="form-control" id="" rows="5" cols="10" placeholder=""></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="form-control-label">Google Map</label>
                        <input type="url" name="g_map" class="form-control" id="" placeholder="">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection