@extends('layouts/layoutMaster')

@section('title', 'Event Categories - Edit')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Event Categories /</span> Add Category
</h4>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;"><div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
          <h5 class="card-title mb-sm-0 me-2">Event Category</h5>
          <div class="action-btns">
            <a href="{{ route('events.categories.index') }}">
            <button class="btn btn-label-primary me-3">
              <span class="align-middle"> Back</span>
            </button>
        </a>
          </div>
        </div></div>
        <div class="card-body">
            <form action="{{ route('events.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="row g-3">
                        <div class="col-md-12">
                          <label class="form-label" for="inputName">Name</label>
                          <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name')?? $category->name }}" placeholder="Category Name">
                          @error('name')
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
