<form id="editForm{{ $country->id }}" action="{{ route('settings.countries.update', $country->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $country->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName{{ $country->id }}">Country Name</label>
                    <input type="text" id="inputName{{ $country->id }}" name="name" class="form-control" value="{{ old('name')?? $country->name }}" placeholder="Country Name">
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>