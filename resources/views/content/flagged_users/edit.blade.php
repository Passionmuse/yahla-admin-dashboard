@extends('layouts/layoutMaster')

@section('title', 'Posts - Edit')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Posts /</span> Edit Post
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
            <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="row g-3">
                        <div class="col-md-12">
                        <label class="form-label" for="inputTitle">Title</label>
                        <input type="text" id="inputTitle" name="title" class="form-control" value="{{ old('title')?? $post->title }}" placeholder="Post Title">
                        </div>
                        <div class="col-md-12">
                        <label class="form-label" for="inputContent">Content</label>
                        <div class="input-group input-group-merge">
                            <textarea class="form-control" id="inputContent" name="content" placeholder="Post Content" rows="6">{{ old('content')?? $post->content }}</textarea>
                            <span class="input-group-text" id="email3"></span>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <label class="form-label" for="imageInput">Image</label>
                        <input type="file" name="image" id="imageInput" class="form-control">
                        </div>
                        <div class="col-md-6">
                        <label class="form-label" for="imageInput">Status</label>
                        <select class="form-control" name="status" id="imageInput">
                            <option value="1" {{ $post->status? 'selected': '' }}>Active</option>
                            <option value="0" {{ !$post->status? 'selected': '' }}>Disabled</option>
                        </select>
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
