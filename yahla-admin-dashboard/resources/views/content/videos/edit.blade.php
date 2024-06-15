@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Upload Video /</span> Add Video
</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
                    <h5 class="card-title mb-sm-0 me-2">Upload Vidoe</h5>
                    <div class="action-btns">
                        <a href="{{ route('upload-video.index') }}">
                            <button class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('upload-video.update',$video->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">

                                    <label class="form-label" for="fullname">Thumbnail</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="" name="thumbnail" value="{{ $video->thumbnail ?? '' }}">
                                    @error('thumbnail')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Video</label>
                                    <input type="file" name="video" class="form-control" id="video" accept="video/*" />
                                    <video src="{{ asset('storage/'.$video->video) }}" style="width:200px; height:200px" controls>
                                    </video>
                                    @error('video')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Video Title</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Lorem" name="title" value="{{ $video->title ?? '' }}">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Category</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        @foreach($video_category as $videos)
                                        <option value="{{ $videos->id }}" {{ $videos->id == $video->category_id ? 'selected' : '' }}>{{ $videos->category ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Description</label>
                                    <textarea class="form-control" placeholder="" name="description">{{ $video->description ?? '' }}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
