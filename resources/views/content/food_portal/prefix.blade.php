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
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Restaurant /</span> <span class="text-muted fw-light">Settings /</span> Prefix
        </h4>
        <div class="">
            <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddTask"><span><i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New Prefix</span></span></button>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="m-0">Edit Prefix</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Prefix for</th>
                                    <th>Prefix ID</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>User Prefix</td>
                                    <td x-data="{ editPrice: false, showLoader: false, name: 'standard_price', value: 0 }">
                                        <div class="py-2 px-3 rounded" style="width:fit-content">
                                            <div x-show="!editPrice">
                                                <span x-text="value + ' €'" class="me-4">0 €</span>
                                                
                                            </div>
                                            <div x-show="editPrice" class="edit-price align-items-center gap-1" style="display: none;">
                                                <input x-model="value" type="number" class="form-control form-control-sm" min="1" step="any" value="0" style="width:fit-content;">
                                                <span @click="showLoader=true; updatePrice({name, value}, () => {showLoader=false; editPrice=false})">
                                                    <button class="btn bg-primary btn-sm p-1 text-white" x-bind:disabled="showLoader" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Save">
                                                        <i x-show="!showLoader" class="bx bx-check bx-xs"></i>
                                                        <span x-show="showLoader" class="spinner-border" role="status" aria-hidden="true" style="height: 1.5em; width: 1.5em; display: none;"></span>
                                                    </button>
                                                </span>
                                                <span @click="editPrice = !editPrice">
                                                    <button class="btn bg-secondary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Cancel"><i class="tf-icons bx bx-x bx-xs"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <span @click="editPrice = !editPrice">
                                                <button class="btn bg-primary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit Price"><i class="bx bx-pencil bx-xs"></i></button>
                                            </span>
                                            <span>
                                                <!--ssa-->                                  <button type="submit" class="btn bg-primary btn-sm p-1 text-white delete" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>                                 <!--ssa-->
                                            
                                          </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fanpage Prefix</td>
                                    <td x-data="{ editPrice: false, showLoader: false, name: 'premium_price', value: 5900 }">
                                        <div class="py-2 px-3 rounded" style="width:fit-content">
                                            <div x-show="!editPrice">
                                                <span x-text="value + ' €'" class="me-4">5900 €</span>
                                                
                                            </div>
                                            <div x-show="editPrice" class="edit-price align-items-center gap-1" style="display: none;">
                                                <input x-model="value" type="number" class="form-control form-control-sm" min="1" step="any" value="5900" style="width:fit-content;">
                                                <span @click="showLoader=true; updatePrice({name, value}, () => {showLoader=false; editPrice=false})">
                                                    <button class="btn bg-primary btn-sm p-1 text-white" x-bind:disabled="showLoader" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Save">
                                                        <i x-show="!showLoader" class="bx bx-check bx-xs"></i>
                                                        <span x-show="showLoader" class="spinner-border" role="status" aria-hidden="true" style="height: 1.5em; width: 1.5em; display: none;"></span>
                                                    </button>
                                                </span>

                                                <span @click="editPrice = !editPrice">
                                                    <button class="btn bg-secondary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Cancel"><i class="tf-icons bx bx-x bx-xs"></i></button>
                                                </span>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <span @click="editPrice = !editPrice">
                                                <button class="btn bg-primary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit Price"><i class="bx bx-pencil bx-xs"></i></button>
                                            </span>
                                            <span>
                                                <!--ssa-->                                  <button type="submit" class="btn bg-primary btn-sm p-1 text-white delete" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>                                 <!--ssa-->
                                          </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Online Shop Prefix</td>
                                    <td x-data="{ editPrice: false, showLoader: false, name: 'vip_price', value: 11900 }">
                                        <div class="py-2 px-3 rounded" style="width:fit-content">
                                            <div x-show="!editPrice">
                                                <span x-text="value + ' €'" class="me-4">11900 €</span>
                                                
                                            </div>
                                            <div x-show="editPrice" class="edit-price align-items-center gap-1" style="display: none;">
                                                <input x-model="value" type="number" class="form-control form-control-sm" min="1" step="any" value="11900" style="width:fit-content;">
                                                <span @click="showLoader=true; updatePrice({name, value}, () => {showLoader=false; editPrice=false})">
                                                    <button class="btn bg-primary btn-sm p-1 text-white" x-bind:disabled="showLoader" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Save">
                                                        <i x-show="!showLoader" class="bx bx-check bx-xs"></i>
                                                        <span x-show="showLoader" class="spinner-border" role="status" aria-hidden="true" style="height: 1.5em; width: 1.5em; display: none;"></span>
                                                    </button>
                                                </span>
                                                <span @click="editPrice = !editPrice">
                                                    <button class="btn bg-secondary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Cancel"><i class="tf-icons bx bx-x bx-xs"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <span @click="editPrice = !editPrice">
                                                <button class="btn bg-primary btn-sm p-1 text-white" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit Price"><i class="bx bx-pencil bx-xs"></i></button>
                                            </span>
                                            <span>
                                                <!--ssa-->                                  <button type="submit" class="btn bg-primary btn-sm p-1 text-white delete" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>                                 <!--ssa-->
                                          </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Offcanvas to add new user -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddTask" aria-labelledby="offcanvasAddTaskLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasAddTaskLabel" class="offcanvas-title">Add Prefix</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0">
                        <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                            <div class="mb-3">
                                <label class="form-label" for="task-title">Prefix for</label>
                                <input type="text" class="form-control" id="task-title" placeholder="Abc" name="userFullname" aria-label="John Doe">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="task-title">Prefix ID</label>
                                <input type="text" class="form-control" id="task-title" placeholder="Abc" name="userFullname" aria-label="John Doe">
                            </div>
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updatePrice(data, callback) {
            $.ajax({
                url: "https://dash.yekbun.net/settings/save",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                success: function(res) {
                    callback();
                    toastr.success("Settings successfully updated.");
                }
            });
        }

        function updateSetting(event) {
            const self = event.target;
            const name = self.dataset.name;
            const value = self.checked ? 'true' : 'false';
            $.ajax({
                url: 'https://dash.yekbun.net/settings/save',
                method: 'POST',
                data: {
                    name: name,
                    value: value
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    toastr.success("Settings successfully updated.");
                }
            });
        }
    </script>

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
