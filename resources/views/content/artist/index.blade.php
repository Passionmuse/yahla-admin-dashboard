@extends('layouts.layoutMaster')

@section('title', 'Artist Management')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
    @php
    $serialNumber = 1;
    @endphp

    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Artist /</span> All Artists
            </h4>
        </div>

        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createartistModal">Add Artist</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusicModal">Add Songs</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createalbumModal">Add Albums</button>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createvideoModal">Add Video Clips</button>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Artist List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Artist Name</th>
                        <th>Total Songs</th>
                        <th>Total Albums</th>
                        <th>Total Video Clips</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($artists as $artist)
                    <tr>
                        <td>{{ $serialNumber++ }}</td>
                        <td>
                            @php
                            $url = url('storage/' . $artist->image);
                            $cleanUrl = str_replace('public/index.php/', '', $url);
                            @endphp
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-xs">
                                        <img class="avatar-img rounded-circle" src="{{ $cleanUrl }}" alt="">
                                        <span class="fw-bold">{{ $artist->name }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="total-songs" data-artist-id="{{ $artist->id }}" data-bs-toggle="modal" data-bs-target="#songDetailsModal">{{ $artist->music->count() }}</a>
                        </td>
                        
                        <td>{{ $artist->banner->count() }}</td>
                        <td>{{ $artist->video_clips->count() }}</td>
                        
                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#editartistModal" data-id="{{ $artist->id }}">
                                <i class="bx bx-edit"></i>
                            </button>
                            <form action="{{ route('artists.delete', $artist->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-icon deletebtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                    <i class="bx bx-trash me-1"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Song Details Modal -->
    <x-modal id="songDetailsModal" title="Song Details" size="lg">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Song</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artists as $artist)
                        @foreach($artist->music as $song)
                        <tr>
                            <td>{{ $loop->parent->index + 1 }}</td>
                            <td> 
                                
                                  <audio controls>
                                    <source src="{{ $cleanUrl }}" type="audio/mpeg">
                                     Your browser does not support the audio element.
                                 </audio>



                            </td>
                            <td>{{ $song->status }}</td>
                        </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-modal>

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

        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>

    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>

    <x-modal id="createartistModal" title="Create Artist" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
        @include('content.include.artist.createForm')
    </x-modal>

    <x-modal id="createmusicModal" title="Create Music" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
        @include('content.include.artist.createmusic')
    </x-modal>

    <x-modal id="createalbumModal" title="Create Music" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
        @include('content.include.artist.createalbum')
    </x-modal>

    <x-modal id="createvideoModal" title="Create Music" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
        @include('content.include.artist.createvideo')
    </x-modal>

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

            function drpzone_init() {
                dropZoneInitFunctions.forEach(callback => callback());
            }
        </script>
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
    @endsection
@endsection
