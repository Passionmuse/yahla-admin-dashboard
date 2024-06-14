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
<?php
$type='musics';
?>
<script>
  const dropZoneInitFunctions = [];
</script>

<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>{{ $type == 'music' ? 'Total Music' : 'Total Songs' }}</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,459</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="col-sm-6 col-xl-3">-->
  <!--  <div class="card">-->
  <!--    <div class="card-body">-->
  <!--      <div class="d-flex align-items-start justify-content-between">-->
  <!--        <div class="content-left">-->
  <!--          <span>Total Artist</span>-->
  <!--          <div class="d-flex align-items-end mt-2">-->
  <!--            <h4 class="mb-0 me-2">4,567</h4>-->
  <!--            <small class="text-success">(+18%)</small>-->
  <!--          </div>-->
  <!--          <small>Last week analytics </small>-->
  <!--        </div>-->
  <!--        <span class="badge bg-label-danger rounded p-2">-->
  <!--          <i class="bx bx-user-plus bx-sm"></i>-->
  <!--        </span>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Album</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">19,860</h4>
              <small class="text-danger">(-14%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Size</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">237</h4>
              <small class="text-success">(+42%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-warning rounded p-2">
            <i class="bx bx-user-voice bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ $type == 'music' ? 'Music' : 'Albums' }}/</span>{{ $type == 'music' ? 'All Music' : 'Album Name' }}
</h4>
</div>
<div class="">
  @can('music.create')
  
    <select style="display:inline-block;width:223px;padding:8px" class="form-control">
        <option value="" selected disabled>Select Album</option>
        </select>
    <button class="btn btn-primary popup" data-bs-toggle="modal" data-bs-target="#createmusicModal">{{ $type == 'music' ? 'Add Music' : 'Remove Album' }}</button>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusicModal">{{ $type == 'music' ? 'Add Music' : 'Edit Album' }}</button>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusicModal">{{ $type == 'music' ? 'Add Music' : 'Add Song' }}</button>
  @endcan
</div>
</div>

   <!-- Basic Bootstrap Table -->
<div class="card">
        <h5 class="card-header">Album Name/Tracks List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table border-top">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Track Title</th>
                        <th>Track</th>
                        <th>Total Listen</th>
                        <th>Upload date</th>
                        <th>Total Size</th>
                        <th>Total Time</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd">
                        <td>1</td>
                        <td>Name of Song</td>
                        <td><audio src="https://dash.yekbun.net/file_example_MP3_1MG.mp3" controls="" width="20"></audio></td>
                        <td>1.125</td>
                        <td>12 May 2023</td>
                        <td>8 MB</td>
                        <td>3:30 min</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center">
                                <!--<button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>-->
                                <!--</button>-->
                                <button type="button" class="btn btn-sm btn-icon popup" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
  <!--/ Basic Bootstrap Table -->


<script>
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>


<div class="modal fade" id="sub-categories" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-datatable table-responsive">

        <table class="table border-top">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Track Title</th>
                  <th>Track</th>
                  <th>Total Listen</th>
                  <th>Upload date</th>
                  <th>Total Size</th>
                  <th>Total Time</th>
                  <th>Option</th>
              </tr>
          </thead>
          <tbody>
              <tr class="odd">
                  <td>1</td>
                  <td>Name of Song</td>
                  <td>The Player</td>
                  <td>1.125</td>
                  <td>12 May 2023</td>
                  <td>8 MB</td>
                  <td>3:30 min</td>
                  <td>
                  <div class="d-flex justify-content-start align-items-center">
                  @can('music.write')
                  <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                  @endcan
                  </button>
                  @can('music.delete')
                  <button type="button" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  @endcan
                  </div>
                  </td>
              </tr>
          </tbody>
      </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ SubCategories Modal -->

@section('page-script')
<script>
  function confirmAction(event, callback) {
    event.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "Are you sure you want to delete this?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      customClass: {
        confirmButton: 'btn btn-danger me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
  }
</script>
<script>
   $(document).ready(function() {
      $(document).on('click','.popup',function(){
          Swal.fire({
      title: 'Are you sure?',
      text: "Are you sure you want to delete this?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      customClass: {
        confirmButton: 'btn btn-danger me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
      });
    });
</script>
<script>
  function drpzone_init() {
      dropZoneInitFunctions.forEach(callback => callback());
  }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
