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
        <form action="{{ route('settings.team.roles.store') }}" id="addRoleForm" class="row g-3" method="post">
          @csrf
          <div class="col-12 mb-4">
            <label class="form-label" for="inputRoleName">Role Name</label>
            <input type="text" id="inputRoleName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter a role name" tabindex="-1" />
          </div>
          <div class="col-12">
            <h4>Role Permissions</h4>
            <!-- Permission table -->
            <div class="table-responsive overflow-hidden">
              <table class="table table-flush-spacing">
                <tbody>
                  <tr>
                    <td class="text-nowrap fw-semibold">Administrator Access <i class="bx bx-info-circle bx-xs" data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system"></i></td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input admin-access" type="checkbox" id="administratorPermission" />
                        <label class="form-check-label" for="administratorPermission">
                          Select All
                        </label>
                      </div>
                    </td>
                  </tr>
                  @foreach($permissions->where(fn($i) => $i->parent_id === null) as $permission)
                  <tr>
                    <td class="text-nowrap fw-semibold">{{ $permission->label?? ucfirst(str_replace('_', ' ', $permission->name)) }}</td>
                    <td>
                      <div class="d-flex">
                        @foreach ($permissions->where(fn($i) => (int)$i->parent_id === (int)$permission->id) as $childPermission)
                        <div class="form-check me-3 me-lg-5">
                          <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $childPermission->name }}" id="permission{{ $childPermission->id }}" />
                          <label class="form-check-label" for="permission{{ $childPermission->id }}">
                            {{ $childPermission->label??  ucfirst(str_replace('_', ' ', str_replace($permission->name.'.', '', $childPermission->name))) }}
                          </label>
                        </div>
                        @endforeach
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- Permission table -->
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
        <!--/ Add role form -->
      </div>
    </div>
  </div>
</div>
<!--/ Add Role Modal -->