@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">News /</span> Edit News
</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
                    <h5 class="card-title mb-sm-0 me-2">News</h5>
                    <div class="action-btns">
                        <a href="{{ route('news.index') }}">
                            <button class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('news.update',$news->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <!-- 1. Delivery Address -->
                            <h5 class="mb-4">Category Name</h5>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Title</label>
                                    <input type="text" id="fullname" class="form-control" name="title" value="{{ $news->title ?? '' }}">
                                    @error('news_category')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Category Name</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($news_category as $new)
                                        <option value="{{ $new->id }}" {{ $news->category_id == $new->id ? 'selected' : '' }}>{{ $new->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('news_category')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    <img src="{{ asset('storage/'.$news->image) }}" height="105px">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="address">Description</label>
                                    <textarea class="form-control" id="address" name="description" rows="2" style="height:200px">{{ $news->description ?? ''}}</textarea>
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
