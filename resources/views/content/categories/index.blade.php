@extends('layouts/layoutMaster')

@section('title', ucfirst(($target?? '')) . ' - Categories List')

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
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ ucfirst(($target?? '')) }} /</span> Categories
</h4>
</div>
<div class="">
    
</div>
</div>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">{{ !request()->{'hide-target'}? ucfirst(str_replace("-", " ", ($target?? ''))): '' }} Categories List</h5>
        <div class="">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Category</button>
          @if (isset($hasSubcategories) && $hasSubcategories)
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSubcategoryModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Subcategory</button>
          @endif
        </div>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            @if (isset($hasSubcategories) && $hasSubcategories)
            <th>Subcategory</th>
            @endif
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            @if (isset($hasSubcategories) && $hasSubcategories)
            <td><button class="btn btn-sm bg-label-secondary text-dark" data-bs-toggle="modal" data-bs-target="#showSubcategoriesModal{{ $category->id }}">Subcategory</button></td>
            @endif
            <td>
              <div class="d-flex justify-content-start align-items-center gap-1">
                <span data-bs-toggle="modal" data-bs-target="#editModal{{ $category->id }}">
                    <button class="btn p-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                </span>

                <form action="{{ route('categories.destroy', $category->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                 <button type="submit" class="btn btn-sm btn-icon p-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                </form>
              </div>
              <x-modal
                id="editModal{{ $category->id }}"
                title="Edit Category" 
                saveBtnText="Update"
                saveBtnType="submit"
                saveBtnForm="editForm{{ $category->id }}"
                size="sm"
                :show="old('showEditFormModal'.$category->id)? true: false"
              >
                @include('content.categories.includes.edit_form')
              </x-modal>

              <x-modal
                id="showSubcategoriesModal{{ $category->id }}"
                title="Subcategories"
                :showSaveBtn="false"
              >
                @include('content.categories.includes.subcategories', ['subcategories' => $category->children])
              </x-modal>
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="{{ isset($hasSubcategories) && $hasSubcategories? 4: 3 }}"><b>No categories found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  <x-modal
    id="createModal"
    title="Add Category" 
    saveBtnText="Create"
    saveBtnType="submit"
    saveBtnForm="createForm"
    size="sm"
    :show="old('showCreateFormModal')? true: false"
  >
    @include('content.categories.includes.create_form')
  </x-modal>

  <x-modal
    id="createSubcategoryModal"
    title="Add Subcategory" 
    saveBtnText="Create"
    saveBtnType="submit"
    saveBtnForm="createSubcategoryForm"
    size="sm"
    :show="old('showCreateSubcategoryFormModal')? true: false"
  >
    @include('content.categories.includes.create_form', ['enableParentCategory' => true])
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
@yield('modals')
@endsection
@endsection
