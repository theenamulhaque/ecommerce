@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Update Child Category</h1>
      </div>

      <div class="section-body">
            
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Update Child Category</h4>
              </div>

              <div class="card-body">
                <form action="{{ route('admin.child-category.update', $childCategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label>Category</label>
                      <select id="inputState" class="form-control main-category" name="category">
                          <option disabled selected value="">Choose Category</option>
                          @foreach ($categories as $category)
                          <option {{ $category->id == $childCategory->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Sub Category</label>
                      <select id="inputState" class="form-control sub-category" name="sub_category">
                          <option disabled selected value="">Choose Sub Category</option>
                          @foreach ($subCategories as $subCategory)
                            <option {{ $subCategory->id == $childCategory->sub_category_id ? 'selected' : '' }} value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $childCategory->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select id="inputState" class="form-control" name="status">
                            <option {{ $childCategory->status == 1 ? 'selected' : '' }} value="1">Active</option>
                            <option {{ $childCategory->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
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

@push('scripts')
    <script>
      $(document).ready(function(){
        $('body').on('change', '.main-category', function(e){
            let id = $(this).val();
            $.ajax({
              method: 'GET',
              url: "{{ route('admin.get-subcategories') }}",
              data: {
                id: id
              },
              success: function(data){
                // console.log(data);
                $('.sub-category').html('<option value="">Select</option>');
                $.each(data, function(key, value){
                    $('.sub-category').append(`<option value="${value.id}">${value.name}</option>`);
                });
              },
              error: function(xhr, status, error){
                console.log(error);
              }
            })
        })
      })
    </script>
@endpush

