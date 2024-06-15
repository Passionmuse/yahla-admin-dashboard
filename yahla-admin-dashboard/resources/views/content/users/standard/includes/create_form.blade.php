<form id="createForm" action="{{ route('users.standard.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName">Name</label>
                    <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputEmail">Email</label>
                    <input type="text" id="inputEmail" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputPassword">Password</label>
                    <input type="text" id="inputPassword" name="password" class="form-control">
                    @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputPasswordConfirmation">Confirm Password</label>
                    <input type="text" id="inputPasswordConfirmation" name="password_confirmation" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="imageInput">Profile Image</label>
                    <input type="file" name="image" id="imageInput" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="imageInput">Status</label>
                    <select class="form-control" name="status" id="imageInput">
                        <option value="1" selected>Active</option>
                        <option value="0" {{ old('status') === '0'? 'selected': '' }}>Disabled</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>