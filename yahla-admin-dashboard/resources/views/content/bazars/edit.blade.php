@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Bazar /</span> Edit Bazar
</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
                    <h5 class="card-title mb-sm-0 me-2">Bazar</h5>
                    <div class="action-btns">
                        <a href="{{ route('bazar.index') }}">
                            <button class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('bazar.update',$bazar->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h5 class="mb-4">Bazar</h5>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Title</label>
                                    <input type="text" id="fullname" class="form-control" name="title" value="{{ $bazar->title ?? '' }}">
                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">User Name</label>
                                    <input type="text" name="user_name" class="form-control" id="image" value="{{ $bazar->user_name  ?? '' }}" />
                                    @error('language')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Category Name</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option selected>Select</option>
                                        @foreach($bazar_category as $category)
                                        <option value="{{ $category->id }}" {{ $bazar->category_id == $category->id ? 'selected' : '' }}>{{ $category->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    <img src="{{ asset('storage/'. $bazar->image) }}" height="150">
                                    @error('image')
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
