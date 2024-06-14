@extends('layouts/layoutMaster')

@section('title', 'Donations - Edit')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Donations /</span> Edit Donation
</h4>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;"><div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
          <h5 class="card-title mb-sm-0 me-2">Donation</h5>
          <div class="action-btns">
            <a href="{{ route('donations.index') }}">
            <button class="btn btn-label-primary me-3">
              <span class="align-middle"> Back</span>
            </button>
        </a>
          </div>
        </div></div>
        <div class="card-body">
            <form action="{{ route('donations.update', $donation->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="row g-3">
                        <div class="col-md-12">
                          <label class="form-label" for="inputTitle">Title</label>
                          <input type="text" id="inputTitle" name="title" class="form-control" value="{{ old('title')?? $donation->title }}" placeholder="Title">
                          @error('title')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputDescription">Description</label>
                          <textarea id="inputDescription" name="description" class="form-control">{{ old('description')?? $donation->description }}</textarea>
                          @error('description')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputOrganizationId">Organization</label>
                          <select id="inputOrganizationId" name="organization_id" class="form-control">
                            <option value="" selected>Select</option>
                            @foreach ($organizations as $org)
                              <option value="{{ $org->id }}" {{ $donation->id === $org->id? 'selected': '' }}>{{ $org->name }}</option>
                            @endforeach
                          </select>
                          @error('organization_id')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="inputStartDate">Start Date</label>
                          <input type="text" id="inputStartDate" name="start_date" class="form-control" value="{{ old('start_date')?? $donation->start_date }}">
                          @error('start_date')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="inputEndDate">End Date</label>
                          <input type="text" id="inputEndDate" name="end_date" class="form-control" value="{{ old('end_date')?? $donation->end_date }}">
                          @error('end_date')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                          <label for="inputTags" class="form-label">Tags</label>
                          <input id="inputTags" class="form-control" name="tags" value="{{ old('tags')?? formatTagsForTagify($donation->tags) }}" />
                          @error('tags')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="statusInput">Status</label>
                          <select class="form-control" name="status" id="statusInput">
                            <option value="1" {{ $donation->status? 'selected': '' }}>Active</option>
                            <option value="0" {{ !$donation->status? 'selected': '' }}>Disabled</option>
                          </select>
                          @error('status')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Update</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page-script')
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

@php
function formatTagsForTagify($tags)
{
  return json_encode(array_map(function ($item) {
    return ['value' => $item];
  }, $tags));
}
@endphp