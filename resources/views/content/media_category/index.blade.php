@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection
@section('content')
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Media Category /</span> All Media Category
</h4>
</div>
<div class="">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#musiccategorymodel">
        Add  Media Category
      </button>
</div>
</div>

  <!-- Category Model -->
  <div class="modal fade" id="musiccategorymodel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel3">Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <form method="POST" action="{{ route('media-category.store') }}">
                @csrf
            <div class="col mb-3">
              <label for="nameLarge" class="form-label">Name</label>
              <input type="text" id="nameLarge" class="form-control" placeholder="Enter Name" name="media_category">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
        </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>



  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Category List</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @if(count($media_category))
            @foreach($media_category as $media)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $media->name ?? '' }}</td>
              <td>
                <div class="d-flex justify-content-start align-items-center">
                    @can('media.write')
                    <span data-bs-toggle="modal" data-bs-target="#editmediacategoryModal{{ $media->id }}">
                        <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                    </span>
                    @endcan

                    <form action="{{ route('media-category.destroy', $media->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        @can('media.delete')
                        <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash"></i></button>
                        @endcan

                    </form>
                </div>

                <!-- Category Model -->
                <div class="modal fade" id="editmediacategoryModal{{ $media->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel3">Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('media-category.update',$media->id) }}">
                                @csrf
                                @method('put')
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                          <label class="form-label" for="fullname">Media Category</label>
                                          <input type="text" id="fullname" class="form-control"  name="media_category" value="{{ $media->name ?? '' }}">
                                          @error('media_category')
                                          <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </td>
          </tr>
          @endforeach
          @else
           <tr>
            <td colspan="8" class="text-center">No category found.</td>
           </tr>
          @endif
      
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  @section('page-script')
<script>
    function confirmAction(event, callback) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?'
            , text: "Are you sure you want to delete this?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Yes, delete it!'
            , customClass: {
                confirmButton: 'btn btn-danger me-3'
                , cancelButton: 'btn btn-label-secondary'
            }
            , buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }

</script>
@endsection
@endsection
