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
            
            <h4 class="fw-bold py-3 mb-2">Admin List</h4>

<p>A admin provided access to predefined menus and features so that depending on <br> assigned admin an administrator can have access to what user needs.</p>
<!-- Role cards -->
<div class="row g-4">
  <div class="col-xl-4 col-lg-6 col-md-6">
  <div class="card h-100">
    <div class="row h-100">
      <div class="col-sm-5">
        <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
          <img src="https://servicebieter.de/assets/img/illustrations/sitting-girl-with-laptop-light.png" class="img-fluid" alt="Image" width="120" data-app-light-img="illustrations/sitting-girl-with-laptop-light.png" data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
        </div>
      </div>
      <div class="col-sm-7">
        <div class="card-body text-sm-end text-center ps-sm-0">
          <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary mb-3 text-nowrap add-new-role">Add New Admin</button>
          <p class="mb-0">Add Admin, if it does not exist</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="">
  <!-- <a href="https://yekbun.hellodev.site/donations/organizations/create">
    <button class="btn btn-primary">Add Organization</button>
  </a> -->
</div>
</div>


<!--/ Role cards -->

<div class="card">
	<table class="table">
		<thead>
			<tr>
				<th>Admin Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>102</td>
				<td>
					<div class="d-flex justify-content-start align-items-center user-name">
                      <div class="avatar-wrapper">
                        <div class="avatar avatar-sm me-3">
							<img src="https://malper.yekbun.net/storage/images/pTKk9AjAJaJ72Jv1jTSgpT5uK5SvIbnCGScFgmKB.jpg" alt="Avatar" class="rounded-circle"></div>
                      </div>
                      <div class="d-flex flex-column">
                        <a href="{{url('standard/app/user/view/Follower')}}" class="text-body text-truncate">
                          <span class="fw-semibold">Hejar Soleman</span>
                        </a>
                        <small class="text-muted">Rooney2380@gmail.com</small>
                      </div>
                    </div>
				</td>
				<td>admin@gmail.com</td>
				<td>
					<div class="dropdown">
                      <form action="https://dash.yekbun.net/users/standard/24" onsubmit="confirmAction(event, () => event.target.submit())" class="d-inline" method="post">
                        <input type="hidden" name="_method" value="DELETE">                        <input type="hidden" name="_token" value="NR7hAgKRpoanmd3Rq2ktxga4BBfncyzcp8oLYILU">                                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove" fdprocessedid="0nr919"><i class="bx bx-trash me-1"></i></button>
                                              </form>
                      
                    </div>
				</td>
			</tr>
		</tbody>
	</table>
</div>


<!-- Add Role Modal -->
<!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-dialog-centered modal-add-new-role">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="role-title">Add New Role</h3>
          <p>Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form id="addRoleForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
          <div class="col-12 mb-4 fv-plugins-icon-container">
            <label class="form-label" for="modalRoleName">Role Name</label>
            <input type="text" id="modalRoleName" name="modalRoleName" class="form-control" placeholder="Enter a role name" tabindex="-1">
          <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <div class="col-12">
            <h4>Role Permissions</h4>
            <!-- Permission table -->
            <div class="table-responsive">
              <table class="table table-flush-spacing">
                <tbody>
                  <tr>
                    <td class="text-nowrap fw-semibold">Administrator Access <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Allows a full access to the system" data-bs-original-title="Allows a full access to the system"></i></td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="selectAll">
                        <label class="form-check-label" for="selectAll">
                          Select All
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">User Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="userManagementRead">
                          <label class="form-check-label" for="userManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="userManagementWrite">
                          <label class="form-check-label" for="userManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="userManagementCreate">
                          <label class="form-check-label" for="userManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">Content Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="contentManagementRead">
                          <label class="form-check-label" for="contentManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="contentManagementWrite">
                          <label class="form-check-label" for="contentManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="contentManagementCreate">
                          <label class="form-check-label" for="contentManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">Disputes Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dispManagementRead">
                          <label class="form-check-label" for="dispManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dispManagementWrite">
                          <label class="form-check-label" for="dispManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="dispManagementCreate">
                          <label class="form-check-label" for="dispManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">Database Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dbManagementRead">
                          <label class="form-check-label" for="dbManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="dbManagementWrite">
                          <label class="form-check-label" for="dbManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="dbManagementCreate">
                          <label class="form-check-label" for="dbManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">Financial Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="finManagementRead">
                          <label class="form-check-label" for="finManagementRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="finManagementWrite">
                          <label class="form-check-label" for="finManagementWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="finManagementCreate">
                          <label class="form-check-label" for="finManagementCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">Reporting</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="reportingRead">
                          <label class="form-check-label" for="reportingRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="reportingWrite">
                          <label class="form-check-label" for="reportingWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="reportingCreate">
                          <label class="form-check-label" for="reportingCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">API Control</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="apiRead">
                          <label class="form-check-label" for="apiRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="apiWrite">
                          <label class="form-check-label" for="apiWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="apiCreate">
                          <label class="form-check-label" for="apiCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">Repository Management</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="repoRead">
                          <label class="form-check-label" for="repoRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="repoWrite">
                          <label class="form-check-label" for="repoWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="repoCreate">
                          <label class="form-check-label" for="repoCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-nowrap fw-semibold">Payroll</td>
                    <td>
                      <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="payrollRead">
                          <label class="form-check-label" for="payrollRead">
                            Read
                          </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" id="payrollWrite">
                          <label class="form-check-label" for="payrollWrite">
                            Write
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="payrollCreate">
                          <label class="form-check-label" for="payrollCreate">
                            Create
                          </label>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- Permission table -->
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        <input type="hidden"></form>
        <!--/ Add role form -->
      </div>
    </div>
  </div>
</div>
<!--/ Add Role Modal -->
<!-- / Add Role Modal -->

            <!-- pricingModal -->
                        <!--/ pricingModal -->

          </div>
@endsection



 @section('page-script')
    


       @endsection
