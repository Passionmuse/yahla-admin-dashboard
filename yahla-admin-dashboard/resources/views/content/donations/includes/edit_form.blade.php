<style>
    .select2-container {
        z-index: 5000;
    }
</style>
<form id="editForm{{ $donation->id }}" action="{{ route('donations.update', $donation->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $donation->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle{{ $donation->id }}">Title</label>
                    <input type="text" id="inputTitle{{ $donation->id }}" name="title" class="form-control" value="{{ old('title')?? $donation->title }}" placeholder="Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputDescription{{ $donation->id }}">Description</label>
                    <textarea id="inputDescription{{ $donation->id }}" name="description" class="form-control" placeholder="Description">{{ old('description')?? $donation->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label d-block" for="inputOrganizationId{{ $donation->id }}">Select Organization</label>
                    <select id="inputOrganizationId{{ $donation->id }}" name="organization_id" class="form-control">
                        <option value="" selected>Choose Organization</option>
                        @foreach ($organizations as $org)
                            <option value="{{ $org->id }}" {{ ($donation->organization? $donation->organization->id: null) === $org->id? 'selected': '' }}>{{ $org->name }}</option>
                        @endforeach
                    </select>
                    @error('organization_id')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="inputTags{{ $donation->id }}" class="form-label">Tags</label>
                    <input id="inputTags{{ $donation->id }}" class="form-control" name="tags" value="{{ old('tags')?? formatTagsForTagify($donation->tags) }}" />
                    @error('tags')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputStartDate{{ $donation->id }}">Start Date</label>
                    <input type="text" id="inputStartDate{{ $donation->id }}" name="start_date" class="form-control" value="{{ old('start_date')?? $donation->start_date }}">
                    @error('start_date')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputEndDate{{ $donation->id }}">End Date</label>
                    <input type="text" id="inputEndDate{{ $donation->id }}" name="end_date" class="form-control" value="{{ old('end_date')?? $donation->end_date }}">
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
  document.querySelector('#inputStartDate{{ $donation->id }}').flatpickr({
    monthSelectorType: 'static'
  });
  document.querySelector('#inputEndDate{{ $donation->id }}').flatpickr({
    monthSelectorType: 'static'
  });

  $("#inputOrganizationId{{ $donation->id }}").select2();

  const tagsEl{{ $donation->id }} = document.querySelector('#inputTags{{ $donation->id }}');
  const TagifyBasic{{ $donation->id }} = new Tagify(tagsEl{{ $donation->id }}, {
    // originalInputValueFormat: valuesArr => valuesArr.map(item => item.value)
  });
</script>
@endsection