@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Music /</span> Edit Music
</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
                    <h5 class="card-title mb-sm-0 me-2">Music</h5>
                    <div class="action-btns">
                        <a href="{{ route('music.index') }}">
                            <button class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('music.update',$music->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h5 class="mb-4">Music</h5>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Title</label>
                                    <input type="text" id="fullname" class="form-control" name="title" value="{{ $music->name ?? '' }}">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Category Name</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($music_category as $musics)
                                        <option value="{{ $musics->id }}" {{ $music->category_id == $musics->id ? 'selected' : '' }}>{{ $musics->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Audio</label>
                                    <input type="file" name="audio" class="form-control" id="audio" accept="audio/*" />
                                    <audio controls>
                                        <source src="{{ asset('storage/'.$music->audio) }}" /></audio>
                                    @error('audio')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="mt-1 btn btn-primary">Submit</button>
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
