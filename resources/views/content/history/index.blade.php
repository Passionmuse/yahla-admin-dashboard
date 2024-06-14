@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" /> --}}
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>


@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('content')
<script>
    const dropZoneInitFunctions = [];
</script>

<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total History</span>
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
    <div class="col-sm-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Reported History</span>
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
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">History List</h5>
        @can('history.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createhistoryModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add History</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Title</th>
            <th>Thumbnail</th>
            <th>Total </th>
            <th>Likes </th>
            <th>Dislikes </th>
            <th>Natural </th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($history as $historys)
            <tr>
                <td>{{ $historys->id }}</td>
                <td>{{ $historys->history_category->name ?? '' }}</td>
                <td>{{ $historys->title ?? '' }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                {{-- <td>{{ $historys->language ?? '' }}</td> --}}
                <td>
                    <div class="dropdown d-inline-block">
                        <!-- Edit -->
                        <span data-bs-toggle="modal" data-bs-target="#editModal{{ $historys->id }}">
                            @can('history.write')
                            <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                <i class="bx bx-edit"></i>
                            </button>
                            @endcan
                        </span>

                        <!-- Delete -->
                        <form action="{{ route('history.destroy',$historys->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            @can('history.delete')
                            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            @endcan
                        </form>
                    </div>

                    <x-modal id="editModal{{ $historys->id }}" title="Edit History" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $historys->id }}" size="md">
                        @include('content.include.history.editForm')
                    </x-modal>
                </td>
            </tr>
            @empty
          <tr>
            <td class="text-center" colspan="8"><b>No history found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

<x-modal id="createhistoryModal" title="Create History" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
    @include('content.include.history.createForm')
</x-modal>


{{-- <script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script> --}}
<script>
    (function() {
        ClassicEditor
        .create( document.querySelector( '#inputDescription' ))
        .catch( error => {
            console.error( error );
        } );

    }());

</script>


@endsection

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
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection