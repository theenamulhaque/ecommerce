@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Update Sub Category</h1>
      </div>

      <div class="section-body">
            
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Update Sub Category</h4>
              </div>

              <div class="card-body">
                <form action="{{ route('admin.sub-category.update', $subCategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label>Category</label>
                      <select id="inputState" class="form-control" name="category">
                          <option disabled selected value="">Choose Category</option>
                          @foreach ($categories as $category)
                          <option {{ $category->id == $subCategory->category_id  ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $subCategory->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select id="inputState" class="form-control" name="status">
                            <option {{ $subCategory->status == 1 ? 'selected' : '' }} value="1">Active</option>
                            <option {{ $subCategory->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
@endsection

