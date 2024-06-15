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
            
            

<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Delivery /</span> <span class="text-muted fw-light">Settings /</span> Delivery Policy
        </h4>
    </div>
    <div>
                <button class="btn btn-primary" data-bs-target="#addnewtab" data-bs-toggle="modal">Add New</button>
            </div>
</div>

<div class="modal fade" id="addnewtab" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel3">Add new Delivery Policy</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="createForm" method="POST" action="https://dash.yekbun.net/policy_and_terms">
                        <input type="hidden" name="_token" value="V2lq7LnYKWUj06x45EduYQqoEtDMGhg0pawfatwM">                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Delivery Policy Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Add Tab Name Here" name="name">
                        </div>
                </form></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Save</button>
            </div>
        
        </div>
    </div>
</div>

<div class="row">
    <h6 class="text-muted">Delivery Policy and Terms</h6>
    <div class="nav-align-left mb-4">
        <div class="col-md-2">
            <ul class="nav nav-pills me-3" role="tablist">
                                    <li class="nav-item d-flex align-items-center" role="presentation">
                        <button type="button" class="nav-link active " role="tab" data-bs-toggle="tab" data-bs-target="#tab7" aria-controls="tab7" aria-selected="true"><i class="bx bx-file"></i>tyty</button>

                        <form action="https://dash.yekbun.net/policy_and_terms/7" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">                            <input type="hidden" name="_token" value="V2lq7LnYKWUj06x45EduYQqoEtDMGhg0pawfatwM">                                                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1 text-danger delete"></i></button>
                                                    </form>
                    </li>
                                                        <li class="nav-item d-flex align-items-center" role="presentation">
                        <button type="button" class="nav-link  " role="tab" data-bs-toggle="tab" data-bs-target="#tab8" aria-controls="tab8" aria-selected="false" tabindex="-1"><i class="bx bx-file"></i>tyyt</button>

                        <form action="https://dash.yekbun.net/policy_and_terms/8" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">                            <input type="hidden" name="_token" value="V2lq7LnYKWUj06x45EduYQqoEtDMGhg0pawfatwM">                                                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1 text-danger delete"></i></button>
                                                    </form>
                    </li>
                                                </ul>
        </div>
        <div class="tab-content">
                                                                                    <div class="tab-pane fade show  " id="tab8" role="tabpanel">
                            <form action="https://dash.yekbun.net/saveFileds" method="POST">
                                <input type="hidden" name="_token" value="V2lq7LnYKWUj06x45EduYQqoEtDMGhg0pawfatwM">                                <input type="hidden" name="tab" value=" tab8 ">
                                <input type="hidden" name="id" value="8">
                                <div class="mb-3">
                                    <label>Delivery Policy</label>
                                    <textarea class="form-control" name="privacy_policy" rows="6"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                        </div>
                                            <div class="tab-pane fade show active " id="tab7" role="tabpanel">
                            <form action="https://dash.yekbun.net/saveFileds" method="POST">
                                <input type="hidden" name="_token" value="V2lq7LnYKWUj06x45EduYQqoEtDMGhg0pawfatwM">                                <input type="hidden" name="tab" value=" tab7 ">
                                <input type="hidden" name="id" value="7">
                                <div class="mb-3">
                                    <label>Delivery Policy</label>
                                    <textarea class="form-control" name="privacy_policy" rows="6"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                        </div>
                            </div>
    </div>
</div>


            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
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
