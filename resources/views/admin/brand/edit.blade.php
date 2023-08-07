@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Update Brand</h1>
      </div>

      <div class="section-body">
            
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Update Brand</h4>
              </div>

              <div class="card-body">

                {{-- FORM START --}}

                <form action="{{ route('admin.brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data"> 
                    {{--  --}}
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Preview</label>
                        <br>
                        <img src="{{ asset($brand->logo) }}" alt="" width="100px">
                    </div>

                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $brand->name }}" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Is Featured</label>
                        <select id="inputState" class="form-control" name="is_featured">
                            <option disabled selected> - Select - </option>
                            <option {{ $brand->is_featured == 1 ? 'selected' : '' }} value="1">Yes</option>
                            <option {{ $brand->is_featured == 0 ? 'selected' : '' }} value="0">No</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select id="inputState" class="form-control" name="status">
                            <option {{ $brand->status == 1 ? 'selected' : '' }} value="1">Active</option>
                            <option {{ $brand->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>


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