<form id="editForm{{ $region->id }}" action="{{ route('settings.provinces.update', $region->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $region->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label d-block" for="inputCountryId{{ $region->id }}"> Select Country</label>
                    <select id="inputCountryId{{ $region->id }}" name="country_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ (int) $region->country_id === (int) $country->id? 'selected': '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputName{{ $region->id }}">Province Name</label>
                    <input type="text" id="inputName{{ $region->id }}" name="name" class="form-control" value="{{ old('name')?? $region->name }}" placeholder="Province Name">
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    window.addEventListener('load', function () {
        $("#inputCountryId{{ $region->id }}").select2();
    });
</script>