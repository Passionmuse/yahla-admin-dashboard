@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Voting /</span> Add Voting
</h4>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;">
                <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
                    <h5 class="card-title mb-sm-0 me-2">Voting</h5>
                    <div class="action-btns">
                        <a href="{{ route('vote.index') }}">
                            <button class="btn btn-label-primary me-3">
                                <span class="align-middle"> Back</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('vote.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Name</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="lorem" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="fullname">Image</label>
                                    <input type="file" id="fullname" class="form-control" name="image">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Category</label>
                                    <select name="category_id" class="form-select">
                                        <option selected>Select Category</option>
                                        @foreach($vote_category as $vote)
                                        <option value="{{ $vote->id }}">{{ $vote->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="fullname">Description</label>
                                    <textarea class="form-control" name="description" style="height:150px;"></textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
</div>
@endsection
