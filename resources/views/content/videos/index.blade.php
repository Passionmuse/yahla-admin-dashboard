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
@section('content')
<script>
    const dropZoneInitFunctions = [];
  </script>
@php
if ($app === 'main')
    $cardsCount = 4;
else
    $cardsCount = 3;
@endphp

<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-{{ 12 / $cardsCount }}">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total Videos</span>
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
    <div class="col-sm-6 col-xl-{{ 12 / $cardsCount }}">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Uploaded Videos</span>
                        <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">4,567</h4>
                            <small class="text-success">(+18%)</small>
                        </div>
                        <small>Last week analytics </small>
                    </div>
                    <span class="badge bg-label-danger rounded p-2">
                        <i class="bx bx-user-plus bx-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    @if ($app === 'main')
    <div class="col-sm-6 col-xl-{{ 12 / $cardsCount }}">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total Movies</span>
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
    @endif
    <div class="col-sm-6 col-xl-{{ 12 / $cardsCount }}">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Video Size Total</span>
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

<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Video /</span> All Video
        </h4>
    </div>
    <div class="">
        @can('videos.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createvideoModal">Add Video</button>
        @endcan
    </div>
</div>
{{-- <div class=" d-flex justify-content-end">
    <div id="DataTables_Table_0_filter" class="">
    <input type="search" class="form-control col-md-3" placeholder="Search" aria-controls="DataTables_Table_0">
</div>
</div> --}}

{{-- <div class="row">
    <div class="col-md-3">
        <div class="d-none d-md-block">
            <div class="card mt-3">
                <div class="card-body p-0 border-none">
                    <div class="list-group" role="tablist">
                        <a class="list-group-item list-group-item-action" href="?show=all&app={{ $app }}">
                            <i class='bx bxs-shopping-bags'></i> All Uploaded Video<br>
                            <small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All user video here</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="?show=fanpage&app={{ $app }}">
                            <i class='bx bxs-shopping-bags'></i> All Live Stream<br>
                            <small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Fan Feed here</small>
                        </a>
                        <a class="list-group-item list-group-item-action" href="?show=reported&app={{ $app }}">
                            <i class='bx bxs-shopping-bags'></i> Reported Videos<br>
                            <small class="text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Report</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            @if(count($upload_video))
            @foreach($upload_video as $video)
            <div class="col-md-6 mt-2">


                <div class="card mb-3">
                    <video controls class="">
                        <source src="{{ asset('storage/'.($video->video[0]?? '')) }}" />
                    </video>
                    <div class="card-body">
                        <div class="image d-flex align-items-center gap-2" style="position: relative;">
                            <img src="{{ asset('assets/img/avatars/20.png') }}" width="50" height="50" style="border-radius: 50%">
                            <div>
                                <p class="m-0">{{ $video->title ?? '' }}</p>
                                <p class="m-0">{{ $video->created_at->format('d M Y') }} at {{ $video->created_at->format('h:i A') }}</p>
                            </div>
                            <div class="dropup d-none d-sm-block" style="position: absolute; right:20px;">
                                <button class="btn p-0" type="button" id="sharedList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sharedList" style="">
                                    <form action="{{ route('upload-video.destroy', $video->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            Remove Feed<br>
                                            <small class="text-muted">Feed removed only</small>
                                        </button>
                                    </form>

                                    <form action="{{ $video->user_id ? route('upload-video.destroyAndFlagUser', ['id' => $video->id, 'user_id' => $video->user_id]): '' }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="{{ $video->user_id? 'submit': 'button' }}" class="dropdown-item">
                                            Remove - Flag User<br>
                                            <small class="text-muted">Remove Feed - Flag User</small>
                                        </button>
                                    </form>

                                    <form action="{{ $video->user_id ? route('upload-video.destroyAndBlockUser', ['id' => $video->id, 'user_id' => $video->user_id]): '' }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="{{ $video->user_id? 'submit': 'button' }}" class="dropdown-item">
                                            Remove Block<br>
                                            <small class="text-muted">Remove Feed - Block User</small>
                                        </button>
                                    </form>

                                    <form action="{{ $video->user_id? route('upload-video.destroyAndRemoveUser', $video->user_id): '' }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="{{ $video->user_id? 'submit': 'button' }}" class="dropdown-item">
                                            Remove User<br>
                                            <small class="text-muted">Remove Account - IMEI</small>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>





            </div>
            @endforeach
            @else
            <strong class="text-center"> {{ isset($msg) ? $msg : '' }} </strong>
            @endif

        </div>

    </div>
</div> --}}



<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Total Clips</th>
                    <th>Total Size</th>
                    <th>Total Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($upload_video as $video)
                <tr>
                    <td>{{ $loop->iteration }}</td>
<td><img src="{{ asset('storage/'.$video->thumbnail) }}" width="100" height="100"></td>
<td>{{ $video->title ?? '' }}</td>
<td>{{ $video->videocategory->category ?? '' }}</td>
<td> @php
    $json = $video->video;
    $arr = json_decode($json, true);
    @endphp<video controls width="150">
        <source src="{{ asset('storage/'.$arr[0]) }}" type="video/mp4">
    </video> </td>
<td>
    <div class="dropdown d-inline-block">
      <button class="btn"
                  data-bs-toggle="modal" data-bs-target="#sub-categories" data-bs-offset="0,4"
                  data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-show"></i></button>
        <button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-light">Action
        </button>
        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu" style="min-width: 9rem;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#editvideoModal{{ $video->id }}">Edit</button>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link" type="button" onclick="delete_service(this);" data-id="{{ route('upload-video.destroy',$video->id) }}">
                        <i class="nav-link-icon pe-7s-wallet"> </i><span>Delete</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <x-modal id="editvideoModal{{ $video->id }}" title="Edit Video" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $video->id }}" size="xl">
        @include('content.include.videos.editForm')
    </x-modal>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
<!--/ Basic Bootstrap Table -->
<div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px;" aria-modal="true">
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


<!-- SubCategories Modal -->
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
                  <th>Clip Title</th>
                  <th>View Clip</th>
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
                  <td>Name of Clip</td>
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
<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>
<x-modal id="createvideoModal" title="Create Video" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
    @include('content.include.videos.createFile')
</x-modal>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
  </script>
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
