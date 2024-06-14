@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/ui-carousel.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>


    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>New Reports</span>
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
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Solved Reports</span>
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
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Awaiting Reports</span>
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
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Reports</span>
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
                <span class="text-muted fw-light">Media /</span> All Media
            </h4>
        </div>
        <div class="">
            @can('media.create')
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmediaModal">Add Media</button>
            @endcan
        </div>
    </div>


    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Media List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Category </th>
                        <th>Status </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (count($media))
                        @foreach ($media as $medias)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $medias->title ?? '' }}</td>
                                <td>
                                    {{ $medias->media_category->name ?? '' }}
                                </td>
                                 <td>
                                      @if($medias->sttus == '0')
                                      <span class="badge bg-label-secondary">UnPublish</span>
                                      @else
                                      <span class="badge bg-label-success">Publish</span>
                                      @endif
                                  </td>
                                <td>
                                  <div class="d-flex">

                                      <span data-bs-toggle="modal" data-bs-target="#editmediaModal{{ $medias->id }}">
                                          @can('media.write')
                                          <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                                          @endcan
                                      </span>
          
                                      <form action="{{ route('media.destroy', $medias->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                          @method('DELETE')
                                          @csrf
                                          @can('media.write')
                                          <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash"></i></button>
                                          @endcan
                                      </form>
                                  </div>
                                  <x-modal id="editmediaModal{{ $medias->id }}" title="Edit Media" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $medias->id }}" size="md">
                                      @include('content.include.media.editForm')
                                  </x-modal>
                              </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="8">No Media found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

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
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }
    </script>
@endsection
    
    <x-modal id="createmediaModal" title="Create Media" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createForm" size="md">
        @include('content.include.media.createForm')
    </x-modal>

    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>

@endsection
