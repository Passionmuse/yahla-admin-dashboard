@extends('layouts/layoutMaster')

@section('title', 'News - Add / Manage')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<style>
  .ql-snow {
    overflow: hidden;
  }
</style>
@endsection

@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Bank Transfer List</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createbankModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Bank</button>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Bank Name</th>
            <th>Owner Name </th>
            <th>Account No</th>
            <th>IBAN No</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($banks as $bank)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $bank->bank_name ?? '' }}</td>
          <td>{{ $bank->account_holder_name ?? '' }}</td>
          <td>{{ $bank->account_no ?? '' }}</td>
          <td>{{ $bank->iban_no ?? '' }}</td>
          <td>
              <div class="dropdown d-inline-block">
                <!-- Edit -->
                <span data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#editbankModal{{ $bank->id }}">
                  <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                    <i class="bx bx-edit"></i>
                  </button>
                </span>

                <!-- Delete -->
                <form action="{{ route('settings.bank-transfer.destroy',$bank->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                </form>
           
              </div>
              <x-modal id="editbankModal{{ $bank->id }}" 
                  title="Edit Bank "
                  saveBtnText="Update" 
                  saveBtnType="submit"
                saveBtnForm="editForm{{ $bank->id }}" 
                    size="md">
                @include('content.bank-transfer.editForm')
              </x-modal>
            </td>
        </tr>
        @empty
        <tr>
            <td class="text-center" colspan="8"><b>No Bank  found.<b></td>
        </tr>
        @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
  <x-modal id="createbankModal" title="Create Bank" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
    @include('content.include.bank-transfer.createForm')
</x-modal>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
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
@endsection