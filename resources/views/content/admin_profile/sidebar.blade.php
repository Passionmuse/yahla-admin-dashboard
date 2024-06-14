<div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="user-avatar-section">
                <div class=" d-flex align-items-center flex-column">
                    <img class="img-fluid rounded my-4" src="{{ Auth::user() && Auth()->user()->image ? asset('storage/'.Auth::user()->image) : asset('https://www.w3schools.com/howto/img_avatar.png') }}" height="110" width="110" alt="User avatar">
                    <div class="user-info text-center">
                        <h4 class="mb-2">{{ auth()->user()->name ?? '' }}</h4>
                        <span class="badge bg-label-secondary">
                            @php
                            $arr = request()->user()->roles;
                            @endphp
                            <span>
                                @foreach($arr as $role)
                                {{ $role->name ?? '' }}
                                @endforeach
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            {{-- <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                <div class="d-flex align-items-start me-4 mt-3 gap-3">
                    <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-check bx-sm"></i></span>
                    <div>
                        <h5 class="mb-0">1.23k</h5>
                        <span>Tasks Done</span>
                    </div>
                </div>
                <div class="d-flex align-items-start mt-3 gap-3">
                    <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-customize bx-sm"></i></span>
                    <div>
                        <h5 class="mb-0">568</h5>
                        <span>Projects Done</span>
                    </div>
                </div>
            </div> --}}
            <h5 class="pb-2 border-bottom mb-4">Details</h5>
            <div class="info-container">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <span class="fw-bold me-2">Username:</span>
                        <span>{{ auth()->user()->username ?? '' }}</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-bold me-2">Email:</span>
                        <span>{{ auth()->user()->email ?? '' }}</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-bold me-2">Status:</span>
                        <span class="badge bg-label-success">Active</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-bold me-2">Role:</span>
                        <span class="badge bg-label-secondary">
                            @php
                            $arr = request()->user()->roles;
                            @endphp
                            @foreach($arr as $role)
                            {{ $role->name ?? '' }}
                            @endforeach


                        </span>
                    </li>
                 
                </ul>
                <div class="d-flex justify-content-center pt-3">
                    <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                    {{-- <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /User Card -->
    {{-- <!-- Plan Card -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start">
                <span class="badge bg-label-primary">Standard</span>
                <div class="d-flex justify-content-center">
                    <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                    <h1 class="display-5 mb-0 text-primary">99</h1>
                    <sub class="fs-6 pricing-duration mt-auto mb-3">/month</sub>
                </div>
            </div>
            <ul class="ps-3 g-2 my-4">
                <li class="mb-2">10 Users</li>
                <li class="mb-2">Up to 10 GB storage</li>
                <li>Basic Support</li>
            </ul>
            <div class="d-flex justify-content-between align-items-center mb-1">
                <span>Days</span>
                <span>65% Completed</span>
            </div>
            <div class="progress mb-1" style="height: 8px;">
                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span>4 days remaining</span>
            <div class="d-grid w-100 mt-4 pt-2">
                <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>
            </div>
        </div>
    </div>
    <!-- /Plan Card --> --}}
</div>


<!-- Modal -->
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Edit User Information</h3>
                    <p>Updating user details will receive a privacy audit.</p>
                </div>
                <form id="editUserForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ route('admin_profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img class="img-fluid rounded my-4" src="{{ Auth::user() && Auth()->user()->image ? asset('storage/'.Auth::user()->image) : asset('https://www.w3schools.com/howto/img_avatar.png') }}" height="110" width="110" alt="User avatar" >
                          <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                              <span class="d-none d-sm-block">Upload new photo</span>
                              <i class="bx bx-upload d-block d-sm-none"></i>
                              <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg" name="image">
                            </label>
                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                          </div>
                        </div>
                      </div>

                    <div class="col-12 fv-plugins-icon-container">
                        <label class="form-label" for="Name">Name</label>
                        <input type="text" id="Name" name="Name" class="form-control" placeholder="john.doe.007" value="{{ auth()->user()->name ?? '' }}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="col-12 col-md-12">
                        <label class="form-label" for="Email">Email</label>
                        <input type="text" id="Email" name="Email" class="form-control" placeholder="example@domain.com" value="{{ auth()->user()->email ?? '' }}" readonly>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->
<!-- Add New Credit Card Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Upgrade Plan</h3>
                    <p>Choose the best plan for user.</p>
                </div>
                <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
                    <div class="col-sm-9">
                        <label class="form-label" for="choosePlan">Choose Plan</label>
                        <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                            <option selected="">Choose Plan</option>
                            <option value="standard">Standard - $99/month</option>
                            <option value="exclusive">Exclusive - $249/month</option>
                            <option value="Enterprise">Enterprise - $499/month</option>
                        </select>
                    </div>
                    <div class="col-sm-3 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary">Upgrade</button>
                    </div>
                </form>
            </div>
            <hr class="mx-md-n5 mx-n3">
            <div class="modal-body">
                <h6 class="mb-0">User current plan is standard plan</h6>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex justify-content-center me-2 mt-3">
                        <sup class="h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
                        <h1 class="display-3 mb-0 text-primary">99</h1>
                        <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                    </div>
                    <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Add New Credit Card Modal -->
<!-- /Modal -->
