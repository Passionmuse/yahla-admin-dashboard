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
<link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js
">
  
</script>
@endsection

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
            
            <h4 class="py-3 mb-4">
  <span class="text-muted fw-light">eCommerce /</span> Shipping
</h4>

<div class="row g-4">

  <!-- Navigation -->
 
  <!-- /Navigation -->

  <!-- Options -->
  <div class="col-12 col-lg-8 pt-4 pt-lg-0">
    <div class="tab-content p-0">
      <!-- Shipping & delivery Tab -->
      <div class="tab-pane fade show active" id="shipping_delivery" role="tabpanel">
       <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-start">
            <div class="card-title m-0">
              <h5 class="m-0">Shipping International</h5>
              <p class="text-muted mb-0">Shipping to another country.</p>
            </div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#createmusicModal">Create zone</a>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex align-items-center">
                <div class="me-3">
                 <i class="bx bx-globe bx-md"></i>
                </div>
                <div class="d-flex flex-column">
                  <h6 class="m-0">Domestic</h6>
                  <p class="mb-0">United states of America</p>
                </div>
              </div>
              <div>
                <!--<a href="javascript:void(0);" class="text-muted"><i class="bx bx-pencil me-3"></i></a>-->
                <!--<a href="javascript:void(0);" class="text-muted delete"><i class="bx bx-trash"></i></a>-->
              </div>
            </div>

            <div class="card mb-3 border shadow-none">
              <div class="table-responsive text-nowrap rounded">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Rate Name</th>
                      <th>Condition</th>
                      <th>Price</th>
                      <th class="text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Weight</td>
                      <td>5kg -10kg</td>
                      <td>
                        $9
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-3">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1 "></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td>12%</td>
                      <td>
                        $25
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-3">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td>Duty</td>
                      <td>-</td>
                      <td>-</td>
                      <td class="text-end">
                        <div class="dropdown pe-3">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!--<button class="btn btn-label-primary mb-4">Add rate</button>-->

            

            
            <!--<button class="btn btn-label-primary">Add rate</button>-->
          </div>
        </div>
        <div class="card mb-4">
          
          <div class="card-body">
            

            

            <!--<button class="btn btn-label-primary mb-4">Add rate</button>-->
<div style="padding-right:0px;" class="card-header d-flex justify-content-end align-items-end pr-0">
          
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#createmusicModal">Create zone</a>
          </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex align-items-center">
                <div class="me-2">
                 
                    <i class="fi fi-us fis rounded-circle fs-2"></i>
                </div>
                <div class="d-flex flex-column">
                  <h6 class="m-0">Shipping National</h6>
                  <p class="mb-0">Shipping in local</p>
                </div>
              </div>
              <div>
                <!--<a href="javascript:void(0);" class="text-muted"><i class="bx bx-pencil me-3"></i></a>-->
                <!--<a href="javascript:void(0);" class="text-muted delete"><i class="bx bx-trash"></i></a>-->
              </div>
            </div>

            <div class="card mb-3 border shadow-none">
              <div class="table-responsive text-nowrap rounded">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Rate Name</th>
                      <th>Condition</th>
                      <th>Price</th>
                      <th class="text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Weight</td>
                      <td>5kg -10kg</td>
                      <td>
                        $19
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-3">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td>12%</td>
                      <td>
                        $25
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-3">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td>Duty</td>
                      <td>Japan</td>
                      <td>$49</td>
                      <td class="text-end">
                        <div class="dropdown pe-3">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--<button class="btn btn-label-primary">Add rate</button>-->
          </div>
        </div>

        <!--<div class="d-flex justify-content-end gap-3">-->
        <!--  <button type="reset" class="btn btn-label-secondary">Discard</button>-->
        <!--  <a class="btn btn-primary" href="locations">Save</a>-->
        <!--</div>-->
      </div>
    </div>
    <!-- /Options-->
  </div>
</div>


          </div>

<x-modal
id="createmusicModal"
title="Shipping International"
 saveBtnText="Create"
 saveBtnType="submit"
  saveBtnForm="createForm"
  size="md">

 @include('content.include.music.onlineshipping')
</x-modal>
  @endsection
  
  
  
@section('page-script')
<script>
   $('.delete').click(function(){
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
   })
        
        
        
        
    

</script>
       @endsection