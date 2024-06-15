@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/ui-carousel.css')}}" />

@endsection
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
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
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total Category</span>
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
                        <span>Total Items</span>
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
                        <span>Total Sales</span>
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
                        <span>Total Size</span>
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



{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Bazar /</span> All Bazar
        </h4>
    </div>
    <div class="">
        @can('bazar.create')
        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#createbazarModal">Add Bazar</button>
        @endcan
    </div>
</div>



<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Item ID</th>
                    <th>Image</th>
                    <th>User Name</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if(count($bazars))
                @foreach($bazars as $bazar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>@php
                        $rand = (rand(1,9));
                    @endphp {{ $rand ?? '' }}</td>
                    <td>
                        {{-- @php 
                        $json = $bazar->image;
                        $arr  =json_decode($json , true);
                        @endphp --}}
                      <img src="{{ asset('storage/'.($bazar->image[0]?? '')) }}" alt="Avatar" class="rounded" width="100" height="100">
                    </td>
                    <td>{{ $bazar->user?->name ?? '' }}</td>
                    <td>{{ $bazar->bazar_category->name ?? '' }}</td>
                    <td>{{ $bazar->subcategory?->name }}</td>
                    <td>
                        <div class="d-flex">
                            <span data-bs-toggle="modal" data-bs-target="#viewbazarModal{{ $bazar->id }}">
                                @can('bazar.write')
                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="View"><i class='bx bx-show'></i></button>
                                @endcan
                            </span>

                            <span data-bs-toggle="modal" data-bs-target="#editbazarModal{{ $bazar->id }}">
                                @can('bazar.write')
                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                                @endcan
                            </span>

                            <form action="{{ route('bazar.destroy', $bazar->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                @can('bazar.write')
                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash"></i></button>
                                @endcan
                            </form>
                        </div>
                        <x-modal id="editbazarModal{{ $bazar->id }}" title="Edit Bazar" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $bazar->id }}" size="md">
                            @include('content.include.bazar.editForm')
                        </x-modal>
                        {{-- view modal --}}
                        <x-modal id="viewbazarModal{{ $bazar->id }}" title="View Items" saveBtnText="Edit" saveBtnType="button" saveBtnForm="viewForm{{ $bazar->id }}" size="md">
                          <x-slot:footer>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editbazarModal{{ $bazar->id }}">Edit</button>
                                <form action="{{ route('bazar.destroy', $bazar->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Remove Item</button>
                                </form>
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                          </x-slot:footer>
                            @include('content.include.bazar.viewForm')
                        </x-modal>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="8">No Bazar found.</td>
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
<x-modal id="createbazarModal" title="Create Bazar" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
    @include('content.include.bazar.createForm')
</x-modal>

@endsection


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

<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>

<script>    
    'use strict';
    (function () {
        let swiperWithArrows = document.querySelectorAll('.swiper-with-arrows');
            // With arrows
            swiperWithArrows.forEach(element => {
                new Swiper(element, {
                slidesPerView: 'auto',
                navigation: {
                    prevEl: '.swiper-button-prev',
                    nextEl: '.swiper-button-next'
                }
                });
                
            });
    }())
</script>

<script>
    const subcategories = {
        @foreach ($bazar_category as  $category)
            {{ $category->id }}:JSON.parse('{!! json_encode($category->sub_categories) !!}'),
        @endforeach
    }

    function loadSubCategories(self) {
        const catValue = self.value;
        const subCatSelect = self.closest('form').querySelector('.subcategories-container select');
        subCatSelect.innerHTML = '';
        if (! catValue) {
            let option = document.createElement('option');
            option.text = 'Select';
            option.value = '';
            subCatSelect.add(option);
            subCatSelect.disabled = true;
            return;
        }

        let subcats = subcategories[catValue];
        subcats.forEach(sub => {
            let option = document.createElement('option');
            option.text = sub.name;
            option.value = sub.id;
            subCatSelect.add(option);
        });
        subCatSelect.disabled = false;
    }
</script>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
  </script>
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>

@endsection
