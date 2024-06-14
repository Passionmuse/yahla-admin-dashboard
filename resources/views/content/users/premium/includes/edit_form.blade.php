<form id="editForm{{ $user->id }}" action="{{ route('users.premium.update', $user->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $user->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName{{ $user->id }}">Name</label>
                    <input type="text" id="inputName{{ $user->id }}" name="name" class="form-control" value="{{ old('name')?? $user->name }}">
                    @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputEmail{{ $user->id }}">Email</label>
                    <input type="text" id="inputEmail{{ $user->id }}" name="email" class="form-control" value="{{ old('email')?? $user->email }}">
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="imageInput{{ $user->id }}">Profile Image</label>
                    <input type="file" name="image" id="imageInput{{ $user->id }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="imageInput{{ $user->id }}">Status</label>
                    <select class="form-control" name="status" id="imageInput{{ $user->id }}">
                        <option value="1" {{ $user->status? 'selected': '' }}>Active</option>
                        <option value="0" {{ !$user->status? 'selected': '' }}>Disabled</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>