@extends('layouts/layoutMaster')

@section('title', 'Posts - Create')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Posts /</span> Add Post
</h4>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;"><div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
          <h5 class="card-title mb-sm-0 me-2">Post</h5>
          <div class="action-btns">
            <a href="{{ route('posts.index') }}">
            <button class="btn btn-label-primary me-3">
              <span class="align-middle"> Back</span>
            </button>
        </a>
          </div>
        </div></div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="row g-3">
                        <div class="col-md-12">
                          <label class="form-label" for="inputTitle">Title</label>
                          <input type="text" id="inputTitle" name="title" class="form-control" value="{{ old('title') }}" placeholder="Post Title">
                          @error('title')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputContent">Content</label>
                          <div class="input-group input-group-merge">
                              <textarea class="form-control" id="inputContent" name="content" placeholder="Post Content" rows="6">{{ old('content') }}</textarea>
                              @error('content')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="imageInput">Image</label>
                          <input type="file" name="image" id="imageInput" class="form-control">
                          @error('image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="statusInput">Status</label>
                          <select class="form-control" name="status" id="statusInput">
                              <option value="1" selected>Active</option>
                              <option value="0" {{ old('status') === '0'? 'selected': '' }}>Disabled</option>
                          </select>
                          @error('status')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Create</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
