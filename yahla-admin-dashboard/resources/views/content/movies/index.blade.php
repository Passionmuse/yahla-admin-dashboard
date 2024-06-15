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
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection
@section('content')
<style>
    .swal2-icon .swal2-icon-content {
        font-size: 66px !important;
    }
    .btn-danger {
        background-color: #ff3e1d !important;
    }
</style>
<script>
  const dropZoneInitFunctions = [];
</script>
<div class="d-flex justify-content-between">
  <div>
      <h4 class="fw-bold py-3 mb-4">
          <span class="text-muted fw-light">Movie /</span> All Movie 
      </h4>
  </div>
  <div class="">
    @can('movies.create')
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmovieModal">Add Movie</button>
      @endcan
  </div>
</div>


  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">List of Movies</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Thumbnail</th>
            {{-- <th>Letters</th> --}}
            <th>Video title</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($upload_movie as $movie)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
              <img src="{{ asset('storage/'.$movie->thumbnail) }}" alt="Avatar" class="rounded" width="100" height="100">
            </td>
            {{-- <td>{{ \Illuminate\Support\Str::random(5) }}</td> --}}
            <td>{{ $movie->title ?? '' }}</td>
          
              {{-- @php
                $json = $movie->movie;
                $arr = json_decode($json, true);
              @endphp --}}
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <span data-bs-toggle="modal" data-bs-target="#editmoviesModal{{ $movie->id }}">
                  @can('movies.write')
                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                    @endcan
                </span>

                <form action="{{ route('upload-movies.destroy', $movie->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    @can('movies.delete')
                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                    @endcan
                </form>
              </div>
              <x-modal id="editmoviesModal{{$movie->id}}" title="Update Movie" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{$movie->id}}" size="md">
                @include('content.include.movies.editForm')
              </x-modal>
            </td>
          </tr>
       @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
  <div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  style="padding-right: 17px;" aria-modal="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="mb-0">Are you Sure to delete this!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="" method="post" id="delete_form">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>
<x-modal id="createmovieModal" title="Create Movie" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
  @include('content.include.movies.createForm')

</x-modal>
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
<script>
  function drpzone_init() {
      dropZoneInitFunctions.forEach(callback => callback());
  }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
