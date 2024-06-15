<div class="row">
    <div class="col-12">
      <div class="bs-stepper wizard-numbered{{ $event->id }} mt-2 shadow-none">
        <div class="bs-stepper-header">
          <div class="step" data-target="#about-event{{ $event->id }}">
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
          <div class="step" data-target="#location{{ $event->id }}">
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
          <div class="step" data-target="#promoter{{ $event->id }}">
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
          <div class="step" data-target="#ticket{{ $event->id }}">
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
          <form action="{{ route('events.update', $event->id) }}" method="post">
            @method('PUT')
            @csrf
            <!-- About Event -->
            <div id="about-event{{ $event->id }}" class="content">
              <div class="row g-3">
                <div class="col-sm-12">
                  <label class="form-label" for="inputTitle{{ $event->id }}">Title</label>
                  <input type="text" id="inputTitle{{ $event->id }}" name="title" value="{{ old('title')?? $event->title }}" class="form-control" placeholder="Event Title" />
                  @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="inputDescription{{ $event->id }}">Description</label>
                  <textarea id="inputDescription{{ $event->id }}" name="description" class="form-control" placeholder="Event Description" rows="6">
                    {{ old('description')?? $event->description }}
                  </textarea>
                  @error('description')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="inputCategory{{ $event->id }}">Category</label>
                  <select id="inputCategory{{ $event->id }}" name="event_category_id" class="form-control">
                    <option value="" selected disabled>Select</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $event->event_category_id === $category->id? 'selected': ''  }}>{{ $category->name }}</option>
                    @endforeach
                  </select>
                  @error('event_category_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputStartTime{{ $event->id }}">Start Time</label>
                    <input type="text" id="inputStartTime{{ $event->id }}" name="start_time" class="form-control" value="{{ $event->start_time }}">
                    @error('start_time')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="inputEndTime{{ $event->id }}">End Time</label>
                    <input type="text" id="inputEndTime{{ $event->id }}" name="end_time" class="form-control" value="{{ $event->end_time }}">
                    @error('end_time')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputTitle{{ $event->id }}">Image</label>
                  <input type="file" id="inputImage{{ $event->id }}" name="image" class="form-control" />
                  @error('image')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputTitle{{ $event->id }}">Sound</label>
                  <input type="file" id="inputImage{{ $event->id }}" name="sound" class="form-control" />
                  @error('sound')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button type="button" class="btn btn-label-secondary btn-prev{{ $event->id }}" disabled>
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button type="button" class="btn btn-primary btn-next{{ $event->id }}">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- Location -->
            <div id="location{{ $event->id }}" class="content">
              <div class="row g-3">
                <div class="col-sm-12">
                  <label class="form-label" for="inputCountry{{ $event->id }}">Country</label>
                  <input type="text" id="inputCountry{{ $event->id }}" name="country" value="{{ old('country')?? $event->country }}" class="form-control" placeholder="Event Country" />
                  @error('country')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="inputZipcode{{ $event->id }}">Zip Code</label>
                  <input type="text" id="inputZipcode{{ $event->id }}" name="zipcode" value="{{ old('zipcode')?? $event->zipcode }}" class="form-control" placeholder="Event Zip Code" />
                  @error('zipcode')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="inputAddress{{ $event->id }}">Address</label>
                  <input type="text" id="inputAddress{{ $event->id }}" name="address" value="{{ old('address')?? $event->address }}" class="form-control" placeholder="Event Address" />
                  @error('address')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button type="button" class="btn btn-primary btn-prev{{ $event->id }}">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button type="button" class="btn btn-primary btn-next{{ $event->id }}">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- Promoter -->
            <div id="promoter{{ $event->id }}" class="content">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="inputFirstName{{ $event->id }}">First Name</label>
                  <input type="text" id="inputFirstName{{ $event->id }}" name="promoter_first_name" value="{{ old('promoter_first_name')?? $event->promoter_first_name }}" class="form-control" placeholder="Promoter First Name" />
                  @error('promoter_first_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputLastName{{ $event->id }}">Last Name</label>
                  <input type="text" id="inputLastName{{ $event->id }}" name="promoter_last_name" value="{{ old('promoter_last_name')?? $event->promoter_last_name }}" class="form-control" placeholder="Promoter Last Name" />
                  @error('promoter_last_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputEmail{{ $event->id }}">Email</label>
                  <input type="text" id="inputEmail{{ $event->id }}" name="promoter_email" value="{{ old('promoter_email')?? $event->promoter_email }}" class="form-control" placeholder="Promoter Email" />
                  @error('promoter_email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputPhoneNumber{{ $event->id }}">Phone Number</label>
                  <input type="text" id="inputPhoneNumber{{ $event->id }}" name="promoter_phone_number" value="{{ old('promoter_phone_number')?? $event->promoter_phone_number }}" class="form-control" placeholder="Promoter Phone Number" />
                  @error('promoter_phone_number')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputRojavaName{{ $event->id }}">Rojava Name</label>
                  <input type="text" id="inputRojavaName{{ $event->id }}" name="promoter_rojava_name" value="{{ old('promoter_rojava_name')?? $event->promoter_rojava_name }}" class="form-control" placeholder="Promoter Rojava Name" />
                  @error('promoter_rojava_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputRojavaId{{ $event->id }}">Rojava ID</label>
                  <input type="text" id="inputRojavaId{{ $event->id }}" name="promoter_rojava_id" value="{{ old('promoter_rojava_id')?? $event->promoter_rojava_id }}" class="form-control" placeholder="Promoter Rojava ID" />
                  @error('promoter_rojava_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button type="button" class="btn btn-primary btn-prev{{ $event->id }}">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button type="button" class="btn btn-primary btn-next{{ $event->id }}">
                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Ticket -->
            <div id="ticket{{ $event->id }}" class="content">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label" for="inputTicketSale{{ $event->id }}">Ticket Sale</label>
                  <select id="inputTicketSale{{ $event->id }}" name="ticket_sale" class="form-control">
                    <option value="true" {{ $event->ticket_sale? 'selected': '' }}>Yes</option>
                    <option value="false" {{ !$event->ticket_sale? 'selected': '' }}>No</option>
                  </select>
                  @error('ticket_sale')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputOnlineSale{{ $event->id }}">Online Sale</label>
                  <select id="inputOnlineSale{{ $event->id }}" name="online_sale" class="form-control">
                    <option value="true" {{ $event->online_sale? 'selected': '' }}>Yes</option>
                    <option value="false" {{ !$event->online_sale? 'selected': '' }}>No</option>
                  </select>
                  @error('ticket_sale')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputPriceMale{{ $event->id }}">Men Price</label>
                  <input type="text" id="inputPriceMale{{ $event->id }}" name="price_male" value="{{ old('price_male')?? $event->price_male }}" class="form-control" placeholder="Men Price" />
                  @error('price_male')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputPriceMaleNotification{{ $event->id }}" style="visibility:hidden;">Notification</label>
                  <input type="text" id="inputPriceMaleNotification{{ $event->id }}" name="price_male_notification" value="{{ old('price_male_notification')?? $event->price_male_notification }}" class="form-control" placeholder="Notification" />
                  @error('price_male_notification')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputPriceFemale{{ $event->id }}">Women Price</label>
                  <input type="text" id="inputPriceFemale{{ $event->id }}" name="price_female" value="{{ old('price_female')?? $event->price_female }}" class="form-control" placeholder="Women Price" />
                  @error('price_femail')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputPriceFemailNotification{{ $event->id }}" style="visibility:hidden;">Notification</label>
                  <input type="text" id="inputPriceFemailNotification{{ $event->id }}" name="price_female_notification" value="{{ old('price_female_notification')?? $event->price_female_notification }}" class="form-control" placeholder="Notification" />
                  @error('price_female_notification')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputPriceKids{{ $event->id }}">Kids Price</label>
                  <input type="text" id="inputPriceKids{{ $event->id }}" name="price_kids" value="{{ old('price_kids')?? $event->price_kids }}" class="form-control" placeholder="Kids Price" />
                  @error('price_kids')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="inputPriceKidsNotification{{ $event->id }}" style="visibility:hidden;">Notification</label>
                  <input type="text" id="inputPriceKidsNotification{{ $event->id }}" name="price_kids_notification" value="{{ old('price_kids_notification')?? $event->price_kids_notification }}" class="form-control" placeholder="Notification" />
                  @error('price_kids_notification')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button type="button" class="btn btn-primary btn-prev{{ $event->id }}">
                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-success btn-submit{{ $event->id }}" type="submit">Submit</button>
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
  const wizardNumbered{{ $event->id }} = document.querySelector('.wizard-numbered{{ $event->id }}'),
    wizardNumberedBtnNextList{{ $event->id }} = [].slice.call(wizardNumbered{{ $event->id }}.querySelectorAll('.btn-next{{ $event->id }}')),
    wizardNumberedBtnPrevList{{ $event->id }} = [].slice.call(wizardNumbered{{ $event->id }}.querySelectorAll('.btn-prev{{ $event->id }}')),
    wizardNumberedBtnSubmit{{ $event->id }} = wizardNumbered{{ $event->id }}.querySelector('.btn-submit{{ $event->id }}');

  if (typeof wizardNumbered{{ $event->id }} !== undefined && wizardNumbered{{ $event->id }} !== null) {
    const numberedStepper{{ $event->id }} = new Stepper(wizardNumbered{{ $event->id }}, {
      linear: false
    });
    if (wizardNumberedBtnNextList{{ $event->id }}) {
      wizardNumberedBtnNextList{{ $event->id }}.forEach(wizardNumberedBtnNext => {
        wizardNumberedBtnNext.addEventListener('click', event => {
          numberedStepper{{ $event->id }}.next();
        });
      });
    }
    if (wizardNumberedBtnPrevList{{ $event->id }}) {
      wizardNumberedBtnPrevList{{ $event->id }}.forEach(wizardNumberedBtnPrev => {
        wizardNumberedBtnPrev.addEventListener('click', event => {
          numberedStepper{{ $event->id }}.previous();
        });
      });
    }
    if (wizardNumberedBtnSubmit{{ $event->id }}) {
      wizardNumberedBtnSubmit{{ $event->id }}.addEventListener('click', event => {
        //alert('Submitted..!!');
      });
    }
  }
</script>

<script>
  (function () {
    // Full Toolbar
  // --------------------------------------------------------------------
  const fullToolbar{{ $event->id }} = [
    [
      {
        font: []
      },
      {
        size: []
      }
    ],
    ['bold', 'italic', 'underline', 'strike'],
    [
      {
        color: []
      },
      {
        background: []
      }
    ],
    [
      {
        script: 'super'
      },
      {
        script: 'sub'
      }
    ],
    [
      {
        header: '1'
      },
      {
        header: '2'
      },
      'blockquote',
      'code-block'
    ],
    [
      {
        list: 'ordered'
      },
      {
        list: 'bullet'
      },
      {
        indent: '-1'
      },
      {
        indent: '+1'
      }
    ],
    [{ direction: 'rtl' }],
    ['link', 'image', 'video', 'formula'],
    ['clean']
  ];
  const fullEditor{{ $event->id }} = new Quill('#inputDescription{{ $event->id }}', {
    bounds: '#full-editor',
    placeholder: 'Type Something...',
    modules: {
      formula: true,
      toolbar: fullToolbar{{ $event->id }}
    },
    theme: 'snow'
  });

  }());
</script>

<script>
  document.querySelector('#inputStartTime{{ $event->id }}').flatpickr({
    monthSelectorType: 'static',
    enableTime: true
  });
  document.querySelector('#inputEndTime{{ $event->id }}').flatpickr({
    monthSelectorType: 'static',
    enableTime: true
  });
</script>
@endsection