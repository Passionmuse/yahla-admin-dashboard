@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')




@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

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
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Fan Page Type List</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createfanpageModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Type</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Emoji</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name ?? '' }}</td>
                    <td>
                        <img src="{{ asset('storage/'.$type->icon) }}" width="100" height="100" class="rounded" style="object-fit: cover">
                    </td>
                    <td>
                        <div class="dropdown d-inline-block">
                            <!-- Edit -->
                            <span data-bs-toggle="modal" data-bs-target="#editfanpageModal{{ $type->id }}">
                                <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit" aria-describedby="tooltip557134">
                                    <i class="bx bx-edit"></i>
                                </button>
                            </span>
                            <!-- Delete -->
                            <form action="{{ route('fan-page-type.destroy',$type->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </form>
                        </div>
                        {{-- Edit Model Form --}}
                        <x-modal id="editfanpageModal{{ $type->id }}" title="Edit Background" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $type->id }}" size="md">
                            @include('content.include.FanPageType.editForm')
                        </x-modal>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="8"><b>No FanPage Type  found.<b></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->


<x-modal
 id="createfanpageModal" 
 title="Create FanPage Type" 
 saveBtnText="Create" 
 saveBtnType="submit"
  saveBtnForm="createForm"
   size="md">

    @include('content.include.FanPageType.createForm')
</x-modal>


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