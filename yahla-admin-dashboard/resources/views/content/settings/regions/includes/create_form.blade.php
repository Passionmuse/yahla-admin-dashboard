<form id="createForm" action="{{ route('settings.provinces.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputCountryId"> Select Country</label>
                    <select id="inputCountryId" name="country_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ (int) old('country_id') === (int) $country->id? 'selected': '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputName">Province Name</label>
                    <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Province Name">
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
        $("#inputCountryId").select2();
    });
</script>