<div class="row">
    <div class="col-12">
      <div class="bs-stepper wizard-numbered mt-2 shadow-none">
        <div class="bs-stepper-header">
            <div class="step" data-target="#about-event">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">1</span>
                    <span class="bs-stepper-label mt-1">
                        <span class="bs-stepper-title">About Event</span>
                        <span class="bs-stepper-subtitle">Add Event Info</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="step" data-target="#location">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-circle">2</span>
                    <span class="bs-stepper-label mt-1">
                        <span class="bs-stepper-title">Location</span>
                        <span class="bs-stepper-subtitle">Add Location info</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="step" data-target="#promoter">
                <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">3</span>
                <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Promoter</span>
                    <span class="bs-stepper-subtitle">Add Promoter Info</span>
                </span>
                </button>
            </div>
            <div class="line">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="step" data-target="#ticket">
                <button type="button" class="step-trigger">
                <span class="bs-stepper-circle">4</span>
                <span class="bs-stepper-label mt-1">
                    <span class="bs-stepper-title">Ticket</span>
                    <span class="bs-stepper-subtitle">Add Ticket Info</span>
                </span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <form id="createForm" action="{{ route('events.store') }}" method="post">
                @csrf
                <input type="hidden" name="showCreateFormModal" value="1">
                <!-- About Event -->
                <div id="about-event" class="content">
                <div class="row g-3">
                    <div class="col-sm-12">
                    <label class="form-label" for="inputTitle">Title</label>
                    <input type="text" id="inputTitle" name="title" value="{{ old('title') }}" class="form-control" placeholder="Event Title" />
                    @error('title')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-12">
                    <label class="form-label" for="inputDescription">Description</label>
                    <textarea id="inputDescription" name="description" class="form-control" placeholder="Event Description" rows="6">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-12">
                    <label class="form-label" for="inputCategory">Category</label>
                    <select id="inputCategory" name="event_category_id" class="form-control">
                        <option value="" selected disabled>Select</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ (int) old('event_category_id') === $category->id? 'selected': ''  }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('event_category_id')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="inputStartTime">Start Time</label>
                        <input type="text" id="inputStartTime" name="start_time" class="form-control" value="{{ old('start_time') }}">
                        @error('start_time')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="inputEndTime">End Time</label>
                        <input type="text" id="inputEndTime" name="end_time" class="form-control" value="{{ old('end_time') }}">
                        @error('end_time')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                    <label class="form-label" for="inputTitle">Image</label>
                    <input type="file" id="inputImage" name="image" value="{{ old('image') }}" class="form-control" />
                    @error('image')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-6">
                    <label class="form-label" for="inputTitle">Sound</label>
                    <input type="file" id="inputImage" name="sound" value="{{ old('sound') }}" class="form-control" />
                    @error('sound')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                    <button type="button" class="btn btn-label-secondary btn-prev" disabled>
                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                    </div>
                </div>
                </div>
                <!-- Location -->
                <div id="location" class="content">
                <div class="row g-3">
                    <div class="col-sm-12">
                    <label class="form-label" for="inputCountry">Country</label>
                    <input type="text" id="inputCountry" name="country" value="{{ old('country') }}" class="form-control" placeholder="Event Country" />
                    @error('country')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-12">
                    <label class="form-label" for="inputZipcode">Zip Code</label>
                    <input type="text" id="inputZipcode" name="zipcode" value="{{ old('zipcode') }}" class="form-control" placeholder="Event Zip Code" />
                    @error('zipcode')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-12">
                    <label class="form-label" for="inputAddress">Address</label>
                    <input type="text" id="inputAddress" name="address" value="{{ old('address') }}" class="form-control" placeholder="Event Address" />
                    @error('address')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                    <button type="button" class="btn btn-primary btn-prev">
                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                    </div>
                </div>
                </div>
                <!-- Promoter -->
                <div id="promoter" class="content">
                <div class="row g-3">
                    <div class="col-sm-6">
                    <label class="form-label" for="inputFirstName">First Name</label>
                    <input type="text" id="inputFirstName" name="promoter_first_name" value="{{ old('promoter_first_name') }}" class="form-control" placeholder="Promoter First Name" />
                    @error('promoter_first_name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-6">
                    <label class="form-label" for="inputLastName">Last Name</label>
                    <input type="text" id="inputLastName" name="promoter_last_name" value="{{ old('promoter_last_name') }}" class="form-control" placeholder="Promoter Last Name" />
                    @error('promoter_last_name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-6">
                    <label class="form-label" for="inputEmail">Email</label>
                    <input type="text" id="inputEmail" name="promoter_email" value="{{ old('promoter_email') }}" class="form-control" placeholder="Promoter Email" />
                    @error('promoter_email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-6">
                    <label class="form-label" for="inputPhoneNumber">Phone Number</label>
                    <input type="text" id="inputPhoneNumber" name="promoter_phone_number" value="{{ old('promoter_phone_number') }}" class="form-control" placeholder="Promoter Phone Number" />
                    @error('promoter_phone_number')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-6">
                    <label class="form-label" for="inputRojavaName">Rojava Name</label>
                    <input type="text" id="inputRojavaName" name="promoter_rojava_name" value="{{ old('promoter_rojava_name') }}" class="form-control" placeholder="Promoter Rojava Name" />
                    @error('promoter_rojava_name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-sm-6">
                    <label class="form-label" for="inputRojavaId">Rojava ID</label>
                    <input type="text" id="inputRojavaId" name="promoter_rojava_id" value="{{ old('promoter_rojava_id') }}" class="form-control" placeholder="Promoter Rojava ID" />
                    @error('promoter_rojava_id')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                    <button type="button" class="btn btn-primary btn-prev">
                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                    </div>
                </div>
                </div>

                <!-- Ticket -->
                <div id="ticket" class="content">
                    <div class="row g-3">
                        <div class="col-sm-6">
                        <label class="form-label" for="inputTicketSale">Ticket Sale</label>
                        <select id="inputTicketSale" name="ticket_sale" class="form-control">
                            <option value="true" {{ old('ticket_sale') === 'true'? 'selected': '' }}>Yes</option>
                            <option value="false" {{ old('ticket_sale') === 'false'? 'selected': '' }}>No</option>
                        </select>
                        @error('ticket_sale')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                        <label class="form-label" for="inputOnlineSale">Online Sale</label>
                        <select id="inputOnlineSale" name="online_sale" class="form-control">
                            <option value="true" {{ old('online_sale') === 'true'? 'selected': '' }}>Yes</option>
                            <option value="false" {{ old('online_sale') === 'false'? 'selected': '' }}>No</option>
                        </select>
                        @error('ticket_sale')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                        <label class="form-label" for="inputPriceMale">Men Price</label>
                        <input type="text" id="inputPriceMale" name="price_male" value="{{ old('price_male') }}" class="form-control" placeholder="Men Price" />
                        @error('price_male')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                        <label class="form-label" for="inputPriceMaleNotification" style="visibility:hidden;">Notification</label>
                        <input type="text" id="inputPriceMaleNotification" name="price_male_notification" value="{{ old('price_male_notification') }}" class="form-control" placeholder="Notification" />
                        @error('price_male_notification')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                        <label class="form-label" for="inputPriceFemale">Women Price</label>
                        <input type="text" id="inputPriceFemale" name="price_femail" value="{{ old('price_femail') }}" class="form-control" placeholder="Women Price" />
                        @error('price_femail')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                        <label class="form-label" for="inputPriceFemailNotification" style="visibility:hidden;">Notification</label>
                        <input type="text" id="inputPriceFemailNotification" name="price_female_notification" value="{{ old('price_female_notification') }}" class="form-control" placeholder="Notification" />
                        @error('price_female_notification')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                        <label class="form-label" for="inputPriceKids">Kids Price</label>
                        <input type="text" id="inputPriceKids" name="price_kids" value="{{ old('price_kids') }}" class="form-control" placeholder="Kids Price" />
                        @error('price_kids')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-sm-6">
                        <label class="form-label" for="inputPriceKidsNotification" style="visibility:hidden;">Notification</label>
                        <input type="text" id="inputPriceKidsNotification" name="price_kids_notification" value="{{ old('price_kids_notification') }}" class="form-control" placeholder="Notification" />
                        @error('price_kids_notification')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                        <button type="button" class="btn btn-primary btn-prev">
                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-success btn-submit" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@section('page-script')
@parent
<script>
  document.querySelector('#inputStartTime').flatpickr({
    monthSelectorType: 'static',
    enableTime: true
  });
  document.querySelector('#inputEndTime').flatpickr({
    monthSelectorType: 'static',
    enableTime: true
  });
</script>
@endsection