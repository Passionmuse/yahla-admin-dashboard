@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Category /</span> Edit Category
</h4>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;"><div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
          <h5 class="card-title mb-sm-0 me-2">Category</h5>
          <div class="action-btns">
            <a href="{{ route('vote-category.index') }}">
            <button class="btn btn-label-primary me-3">
              <span class="align-middle"> Back</span>
            </button>
        </a>
          </div>
        </div></div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <!-- 1. Delivery Address -->
              <h5 class="mb-4">Category Name</h5>
              <div class="row g-3">
                <div class="col-md-12">
                  <form method="POST" action="{{ route('vote-category.update',$vote_category->id) }}" enctype="multipart/form-data">
                    @csrf
                  @method('put')
                  <label class="form-label" for="fullname">Vote Category</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Jang" name="vote_category" value="{{ $vote_category->name ?? '' }}">
                  @error('vote_category')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <button class="mt-1 btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
