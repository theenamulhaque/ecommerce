@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Category</h1>
      </div>

      <div class="section-body">
            
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>All Categories</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i>  Create New</a>
                </div>
              </div>

              <div class="card-body">
                  {{ $dataTable->table() }}
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
@endsection

@push('scripts')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}

<script>
  $(document).ready(function(){

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
      $('body').on('click', '.change-status', function(){
            let isChecked = $(this).is(':checked');
            let id = $(this).data('id');

            $.ajax({
              url: '{{ route("admin.category.change-status") }}',
              method: 'PUT',
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: {
                status: isChecked,
                id: id
              },
              success: function(data){
                toastr.success(data.message);
                windows.loca
              },
              error: function(xhr, status, error){
                console.log(error);
              }
            })
      })
  })
</script>
@endpush