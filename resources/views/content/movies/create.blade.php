@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Movie /</span> Add Movie
</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
                    <h5 class="card-title mb-sm-0 me-2">Movie</h5>
                    <div class="action-btns">
                        <a href="{{ route('upload-movies.index') }}">
                            <button class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('upload-movies.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Thumbnail</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="" name="thumbnail">
                                    @error('thumbnail')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Uplaod Movie</label>
                                    <input type="file" name="movie" class="form-control" id="image" accept="video/*" />
                                    @error('video')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Title</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="" name="title">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Category</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option>Select Category</option>
                                        @foreach($movie_category as $movie)
                                        <option value="{{ $movie->id }}">{{ $movie->category ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Description</label>
                                    <textarea class="form-control" id="address" name="description" rows="2" placeholder="Lorem" style="height:200px"></textarea>
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
