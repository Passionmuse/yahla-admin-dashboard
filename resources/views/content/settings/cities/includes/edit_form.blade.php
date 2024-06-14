<form id="editForm{{ $city->id }}" action="{{ route('settings.cities.update', $city->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $city->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label d-block" for="inputCountryId{{ $city->id }}"> Select Country</label>
                    <select id="inputCountryId{{ $city->id }}" name="country_id" class="form-control" onchange="loadRegions(event)">
                        <option value="">Choose</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ (int) $city->country_id === (int) $country->id? 'selected': '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label d-block" for="inputRegionId{{ $city->id }}">Select Province</label>
                    <select id="inputRegionId{{ $city->id }}" name="region_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach($regions as $region)
                        <option value="{{ $region->id }}" {{ (int) $city->region_id === (int) $region->id? 'selected': '' }}>{{ $region->name }}</option>
                        @endforeach
                    </select>
                    @error('region_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputZipcode{{ $city->id }}">Zipcode</label>
                    <input type="text" id="inputZipcode{{ $city->id }}" name="zipcode" class="form-control" value="{{ old('zipcode')?? $city->zipcode }}" placeholder="Zipcode">
                    @error('zipcode')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputName{{ $city->id }}">City Name</label>
                    <input type="text" id="inputName{{ $city->id }}" name="name" class="form-control" value="{{ old('name')?? $city->name }}" placeholder="City Name">
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
        $("#inputCountryId{{ $city->id }}").select2();
        $("#inputRegionId{{ $city->id }}").select2();
    });
</script>