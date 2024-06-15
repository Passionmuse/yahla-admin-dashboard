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
<script>
  const dropZoneInitFunctions = [];
</script>
{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Ringtones </span>
        </h4>
    </div>
    <div class="">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createringtoneModal">Add Ringtone</button>
    </div>
</div>
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">List of Ringtone</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Rington</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @if(count($ringtones))
                @foreach($ringtones as $ringtone)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                   <td><audio width="100" controls>
                    <source src="{{asset('storage/'.$ringtone->ringtone_path)}}" >
                    </audio></td>
                   <td>
                    <div class="d-flex justify-content-start align-items-center">
                        <span data-bs-toggle="modal" data-bs-target="#editringtoneModal{{ $ringtone->id }}">
                        <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button></span>
                        
                        <form action="{{ route('ringtone.destroy', $ringtone->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                        </form>
                        <x-modal id="editringtoneModal{{ $ringtone->id }}" title="Edit Smiley" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $ringtone->id }}" size="md">
                            @include('content.include.ringtone.editForm')
                        </x-modal>
                    </div>
                </td>
                </tr>
                @endforeach
                @else
                 <tr>
                  <td colspan="8" class="text-center">No Ringtone found.</td>
                 </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>


<x-modal id="createringtoneModal" title="Create Ringtone" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
    @include('content.include.ringtone.createForm')
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
