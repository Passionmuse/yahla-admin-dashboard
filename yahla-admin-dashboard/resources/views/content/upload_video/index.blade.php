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

{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Video Clip /</span> All Video Clip
        </h4>
    </div>
    <div class="">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createvideoclipModal">Add Video Clip</button>
    </div>
</div>
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Artist</th>
                    <th>Video Title</th>
                    <th>Total Video</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @if(count($upload_video))
                @foreach($upload_video as $video)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $video->artist->first_name ?? '' }}
                    </td>
                    <td>{{ $video->title ?? '' }}</td>
                    <?php
                                $json = $video->video;
                                $arr = json_decode($json, true); 
                              ?>

                    <td><?php $ID=$video->artist->id ?? ''; $count = DB::table('uplaod_video_clips')->where('category_id' , $ID)->count(); ?>{{ $count ?? '' }}</td>
                    <td>
                        <div class="d-flex justify-content-start align-items-center">
                            <span data-bs-toggle="modal" data-bs-target="#editvideoclipModal{{ $video->id }}">
                            <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button></span>
                            <form action="{{ route('upload_video.destroy', $video->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </form>
                            <x-modal id="editvideoclipModal{{ $video->id }}" title="Edit Video Clip" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $video->id }}" size="md">
                                @include('content.include.video_clip.editForm')
                            </x-modal>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                 <tr>
                  <td colspan="8" class="text-center">No Video Clip found.</td>
                 </tr>
                @endif
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
<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>

<x-modal id="createvideoclipModal" title="Create Vidoe Clip" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
    @include('content.include.video_clip.createForm')
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
@endsection
@endsection
