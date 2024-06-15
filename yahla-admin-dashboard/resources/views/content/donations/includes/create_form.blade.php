<style>
    .select2-container {
        z-index: 5000;
    }
</style>
<form id="createForm" action="{{ route('donations.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Title</label>
                    <input type="text" id="inputTitle" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputDescription">Description</label>
                    <textarea id="inputDescription" name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputOrganizationId">Select Organization</label>
                    <select id="inputOrganizationId" name="organization_id" class="form-control">
                        <option value="" selected>Choose Organization</option>
                        @foreach ($organizations as $org)
                            <option value="{{ $org->id }}" {{ (int) old('organization_id') === $org->id? 'selected': '' }}>{{ $org->name }}</option>
                        @endforeach
                    </select>
                    @error('organization_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="inputTags" class="form-label">Tags</label>
                    <input id="inputTags" class="form-control" name="tags" value="{{ old('tags') }}" />
                    @error('tags')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputStartDate">Start Date</label>
                    <input type="text" id="inputStartDate" name="start_date" class="form-control" value="{{ old('start_date') }}">
                    @error('start_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputEndDate">End Date</label>
                    <input type="text" id="inputEndDate" name="end_date" class="form-control" value="{{ old('end_date') }}">
                    @error('end_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>

@section('page-script')
@parent
<script>
  document.querySelector('#inputStartDate').flatpickr({
    monthSelectorType: 'static'
  });
  document.querySelector('#inputEndDate').flatpickr({
    monthSelectorType: 'static'
  });

  $("#inputOrganizationId").select2();

  const tagsEl = document.querySelector('#inputTags');
  const TagifyBasic = new Tagify(tagsEl, {
    // originalInputValueFormat: valuesArr => valuesArr.map(item => item.value)
  });
</script>
@endsection