@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

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
    <script>
        const dropZoneInitFunctions = [];
    </script>
    {{-- Nav TAb --}}
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Music Category /</span> All Music Category
            </h4>
        </div>
        <div class="">
            @can('music.create')
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusiccategoryModal">Add
                    Category</button>
            @endcan
        </div>
    </div>



    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Music Category List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        {{-- <th>Icon</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (count($music_category))
                        @foreach ($music_category as $music)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $music->name ?? '' }}</td>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        @can('music.write')
                                            <span data-bs-toggle="modal"
                                                data-bs-target="#editmusiccategoryModal{{ $music->id }}">
                                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                    data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i
                                                        class="bx bx-edit"></i></button></span>
                                        @endcan
                                        <form action="{{ route('music-category.destroy', $music->id) }}"
                                            onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                            class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            @can('music.delete')
                                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                    data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                            @endcan
                                        </form>
                                    </div>
                                    {{-- Edit Category Music Model --}}
                                    <x-modal id="editmusiccategoryModal{{ $music->id }}" title="Edit Music Category" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $music->id }}" size="md">
                                        @include('content.include.music_category.editForm')
                                    </x-modal>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="8"><b>No Music Category found.<b></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>
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
<x-modal id="createmusiccategoryModal" title="Create Music Category" saveBtnText="Create" saveBtnType="submit"
    saveBtnForm="createForm" size="md">
    @include('content.include.music_category.createForm')
</x-modal>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
  </script>
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
