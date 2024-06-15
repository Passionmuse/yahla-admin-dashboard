@extends('layouts/layoutMaster')

@section('title', 'Cities - List')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<style>
  .select2-container {
    z-index: 5000;
  }
  .dataTables_filter{
    display: none;
  }
  .dataTables_length{
    display: none;
  }
  #DataTables_Table_3_filter{
    display: none
  }
  .dataTables_info{
    display: none;
  }
  #DataTables_Table_3_paginate{
    display: none;
  }
</style>
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
<!-- Form Validation -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection




@section('content')
<div class="d-flex justify-content-between">
  <div>
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Settings /</span> Add / Manage City
    </h4>
  </div>
</div>
<!-- Basic Bootstrap Table -->
{{-- <div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5 class="m-0">City List</h5>
    @can('location.create')
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i
        class="bx bx-plus me-0 me-sm-1"></i> Add City</button>
    @endcan
  </div>
  <div class="card-datatable table-responsive">
    <table class="datatables-basic table border-top" id="example">
      <thead>
        <tr>y
          <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;"
            aria-label=""></th>
          <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1"
            style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
          <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 316px;" aria-label="Name: activate to sort column descending" aria-sort="ascending">Country
            Name</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 304px;" aria-label="Email: activate to sort column ascending">Province Name</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 108px;" aria-label="Date: activate to sort column ascending">Zip Code</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 106px;" aria-label="Salary: activate to sort column ascending">City Name</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 144px;" aria-label="Status: activate to sort column ascending">Total People</th>
          <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 88px;" aria-label="Actions">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($cities as $city)
        <tr class="odd">
          <td class="  control" tabindex="0" style="display: none;"></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">{{ $city->country? $city->country->name: '' }}</td>
          <td>{{ $city->region? $city->region->name: '' }}</td>
          <td>{{ $city->zipcode }}</td>
          <td>{{ $city->name }}</td>
          <td>{{ $city->users->count() }}</td>
          <td>
            <div>
              @can('location.write')
              <!-- Edit -->
              <span data-bs-toggle="modal" data-bs-target="#editModal{{ $city->id }}">
                <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                  data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                  <i class="bx bx-edit"></i>
                </button>
              </span>
              @endcan

              @can('location.delete')
              <!-- Delete -->
              <form action="{{ route('settings.cities.destroy', $city->id) }}"
                onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                  data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i
                    class="bx bx-trash me-1"></i></button>
              </form>
              @endcan
            </div>

            @can('location.write')
            <x-modal id="editModal{{ $city->id }}" title="Edit City" saveBtnText="Update" saveBtnType="submit"
              saveBtnForm="editForm{{ $city->id }}" size="sm" :show="old('showEditFormModal'.$city->id)? true: false">
              @include('content.settings.cities.includes.edit_form')
            </x-modal>
            @endcan
          </td>
        </tr>
        @empty
        <tr>
          <td class="text-center" colspan="7"><b>No cities found.<b></td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div> --}}


<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5 class="m-0">City List</h5>
    @can('location.create')
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i
        class="bx bx-plus me-0 me-sm-1"></i> Add City</button>
    @endcan
  </div>
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
      <table class="dt-multilingual table border-top dataTable no-footer dtr-column" id="DataTables_Table_3"
        aria-describedby="DataTables_Table_3_info" style="width: 1392px;">
        <thead>
          <tr>
            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;"
              aria-label=""></th>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
              style="width: 178px;" aria-label="Name: aktivieren, um Spalte absteigend zu sortieren"
              aria-sort="ascending">Country Name</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
              style="width: 262px;" aria-label="Position: aktivieren, um Spalte aufsteigend zu sortieren">Province Name</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
              style="width: 264px;" aria-label="Email: aktivieren, um Spalte aufsteigend zu sortieren">Zip Code</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
              style="width: 91px;" aria-label="Date: aktivieren, um Spalte aufsteigend zu sortieren">City Name</th>
            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
              style="width: 89px;" aria-label="Salary: aktivieren, um Spalte aufsteigend zu sortieren">Total People</th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 74px;" aria-label="Actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($cities as $city)
          <tr class="odd">
            <td class="control" tabindex="0" style="display: none;"></td>
            <td class="sorting_1">{{ $city->country? $city->country->name: '' }}</td>
            <td>{{ $city->region? $city->region->name: '' }}</td>
            <td>{{ $city->zipcode }}</td>
            <td>{{ $city->name }}</td>
            <td>{{ $city->users->count() }}</td>
            <td>
              <div>
                @can('location.write')
                <!-- Edit -->
                <span data-bs-toggle="modal" data-bs-target="#editModal{{ $city->id }}">
                  <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                    data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                    <i class="bx bx-edit"></i>
                  </button>
                </span>
                @endcan
  
                @can('location.delete')
                <!-- Delete -->
                <form action="{{ route('settings.cities.destroy', $city->id) }}"
                  onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4"
                    data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i
                      class="bx bx-trash me-1"></i></button>
                </form>
                @endcan
              </div>
  
              @can('location.write')
              <x-modal id="editModal{{ $city->id }}" title="Edit City" saveBtnText="Update" saveBtnType="submit"
                saveBtnForm="editForm{{ $city->id }}" size="sm" :show="old('showEditFormModal'.$city->id)? true: false">
                @include('content.settings.cities.includes.edit_form')
              </x-modal>
              @endcan
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="7"><b>No cities found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">1 bis 7 von 100
            Einträgen</div>
        </div>
        {{-- <div class="col-sm-12 col-md-6">
          <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate">
            <ul class="pagination">
              <li class="paginate_button page-item previous disabled" id="DataTables_Table_3_previous"><a
                  aria-controls="DataTables_Table_3" aria-disabled="true" aria-role="link" data-dt-idx="previous"
                  tabindex="0" class="page-link">Zurück</a></li>
              <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_3"
                  aria-role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" aria-role="link"
                  data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" aria-role="link"
                  data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" aria-role="link"
                  data-dt-idx="3" tabindex="0" class="page-link">4</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" aria-role="link"
                  data-dt-idx="4" tabindex="0" class="page-link">5</a></li>
              <li class="paginate_button page-item disabled" id="DataTables_Table_3_ellipsis"><a
                  aria-controls="DataTables_Table_3" aria-disabled="true" aria-role="link" data-dt-idx="ellipsis"
                  tabindex="0" class="page-link">…</a></li>
              <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_3" aria-role="link"
                  data-dt-idx="14" tabindex="0" class="page-link">15</a></li>
              <li class="paginate_button page-item next" id="DataTables_Table_3_next"><a href="#"
                  aria-controls="DataTables_Table_3" aria-role="link" data-dt-idx="next" tabindex="0"
                  class="page-link">Nächste</a></li>
            </ul>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</div>



<!--/ Basic Bootstrap Table -->

@can('location.create')
<x-modal id="createModal" title="Add City" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md"
  :show="old('showCreateFormModal')? true: false">
  @include('content.settings.cities.includes.create_form')
</x-modal>
@endcan
@endsection

@section('page-script')
@parent
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
  const regions = {
    @foreach ($countries as $country)
    {{ $country->id }}: [
      @foreach ($country->regions as $region)
      {
        id: {{ $region->id }},
        name: '{{ $region->name }}'
      },
      @endforeach
    ],
    @endforeach
  };
</script>

<script>
  function loadRegions(event) {
    const countryId = event.target.value;
    const regionSelectInput = event.target.closest('form').querySelector('[name=region_id]');
    regionSelectInput.innerHTML = '';

    const option = document.createElement('option');
    option.value = "";
    option.text = "Choose";
    regionSelectInput.add(option);

    regions[countryId].forEach(region => {
      const option = document.createElement('option');
      option.value = region.id;
      option.text = region.name;
      regionSelectInput.add(option);
    });
  }
</script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
      $('#DataTables_Table_3').DataTable({
        'paging' : false,
      });
  });
</script>

@endsection