@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Brand</h1>
      </div>

      <div class="section-body">
            
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Create Brnad</h4>
              </div>

              <div class="card-body">

                {{-- FORM START --}}

                <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Is Featured</label>
                        <select id="inputState" class="form-control" name="is_featured">
                            <option disabled selected> - Select - </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select id="inputState" class="form-control" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>


                </form>
                {{-- FORM END --}}
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
@endsection