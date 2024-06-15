@extends('layouts/layoutMaster')

@section('title', 'Organizations - Create')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Organizations /</span> Add Organization
</h4>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div id="sticky-wrapper" class="sticky-wrapper" style="height: 86.9375px;"><div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row" style="">
          <h5 class="card-title mb-sm-0 me-2">Organization</h5>
          <div class="action-btns">
            <a href="{{ route('donations.organizations.index') }}">
            <button class="btn btn-label-primary me-3">
              <span class="align-middle"> Back</span>
            </button>
        </a>
          </div>
        </div></div>
        <div class="card-body">
            <form action="{{ route('donations.organizations.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="row g-3">
                        <div class="col-md-12">
                          <label class="form-label" for="inputName">Name</label>
                          <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Organization Name">
                          @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputBankAccount">Bank Account</label>
                          <input type="text" id="inputBankAccount" name="bank_account" class="form-control" value="{{ old('bank_account') }}" placeholder="Bank Account">
                          @error('bank_account')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputPaypalAccount">Paypal Account</label>
                          <input type="text" id="inputPaypalAccount" name="paypal_account" class="form-control" value="{{ old('paypal_account') }}" placeholder="Paypal Account">
                          @error('paypal_account')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="inputAddress">Address</label>
                          <input type="text" id="inputAddress" name="address" class="form-control" value="{{ old('address') }}" placeholder="Address">
                          @error('address')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <label class="form-label" for="logoInput">Logo</label>
                          <input type="file" name="logo" id="logoInput" class="form-control">
                          @error('logo')
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
