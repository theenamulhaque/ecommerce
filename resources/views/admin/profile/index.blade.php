@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Profile</div>
        </div>
      </div>
      <div class="section-body">

        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">


              <form method="post" action="{{ route('admin.profile.update') }}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                @csrf

                <div class="card-header">
                  <h4>Update Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">

                      <div class="mb-3">
                        <img src="{{ asset(Auth::user()->image) }}" alt="" width="130px">
                      </div>
                      
                      <div class="form-group col-12">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                      </div>
                      
                      <div class="form-group col-md-6 col-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                      </div>

                      <div class="form-group col-md-6 col-12">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                      </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>


          {{-- uPDATE PASSWORD START --}}
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">

              @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <span class="alert alert-danger">{{ $error }}</span>
                  @endforeach
              @endif

              <form method="post" action="{{ route('admin.password.update') }}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                @csrf

                <div class="card-header">
                  <h4>Update Password</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      
                      <div class="form-group col-12">
                        <label>Current Password</label>
                        <input type="password" name="current_password" class="form-control">
                      </div>

                      <div class="form-group col-12">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>

                      <div class="form-group col-12">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                      </div>

                    </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
          {{-- uPDATE PASSWORD END --}}
        </div>
      </div>
    </section>
  </div>
@endsection