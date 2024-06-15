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
    Wishes and Thanks Reasons
</h4>
</div>
<div class="">
  <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddTask"><span><i
                class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New
                Reason</span></span></button>
</div>
</div>

   <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Reasons List</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Reasons Title</th>
            <th>Reasons</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <td>1</td>
          <td>ABc</td>
          <td>Xyz</td>
          <td>
            <button type="button" class="btn"><i class="bx bx-edit"></i></button>
            <button type="button" class="btn"><i class="bx bx-trash"></i></button>
          </td>
        </tbody>
      </table>

    </div>
  </div>
  <!--/ Basic Bootstrap Table -->


<script>
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>

<!-- SubCategories Modal -->
<div class="modal fade" id="sub-categories" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-datatable table-responsive">

        <table class="table border-top">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Track Title</th>
                  <th>Track</th>
                  <th>Total Listen</th>
                  <th>Upload date</th>
                  <th>Total Size</th>
                  <th>Total Time</th>
                  <th>Option</th>
              </tr>
          </thead>
          <tbody>
              <tr class="odd">
                  <td>1</td>
                  <td>Name of Song</td>
                  <td>The Player</td>
                  <td>1.125</td>
                  <td>12 May 2023</td>
                  <td>8 MB</td>
                  <td>3:30 min</td>
                  <td>
                  <div class="d-flex justify-content-start align-items-center">
                  @can('music.write')
                  <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                  @endcan
                  </button>
                  @can('music.delete')
                  <button type="button" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  @endcan
                  </div>
                  </td>
              </tr>
          </tbody>
      </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddTask"
                    aria-labelledby="offcanvasAddTaskLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasAddTaskLabel" class="offcanvas-title">Add Reason</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0">
                        <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                            <div class="mb-3">
                                <label class="form-label" for="task-title">Reason Title</label>
                                <input type="text" class="form-control" id="task-title" placeholder="Abc"
                                    name="userFullname" aria-label="John Doe" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="task-title">Reason</label>
                                <input type="text" class="form-control" id="task-title" placeholder="Abc"
                                    name="userFullname" aria-label="John Doe" />
                            </div>
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                            <button type="reset" class="btn btn-label-secondary"
                                data-bs-dismiss="offcanvas">Cancel</button>
                        </form>
                    </div>
                </div>
<!--/ SubCategories Modal -->

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
@endsection
