<style>
  .modal-content{
  overflow-y: scroll;
  scrollbar-width: thin;
    scrollbar-color: transparent transparent;
    /* For Firefox */
    scrollbar-width: thin;
    scrollbar-color: transparent transparent;
    /* For Webkit (Chrome, Safari, Edge) */
    &::-webkit-scrollbar {
        width: 0px;
    }
    &::-webkit-scrollbar-thumb {
        background-color: transparent;
    }
}
</style>
<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3 class="address-title">Add New Address</h3>
          <p class="address-subtitle">Add new address for express delivery</p>
        </div>
        <div class="col-12">
          <div id="wizard-create-deal-form" class="row">
            <div class="col-md mb-md-0 mb-3">
              <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="customRadioOffice">
                  <span class="custom-option-body mt-4">
                    <img src="{{asset('assets/svg/icons/Plan a stream.svg')}}" width="35" alt="">
                    <span class="custom-option-title"> Plan a Stream </span>
                    {{-- <small> Delivery time (9am – 5pm) </small> --}}
                  </span>
                  <input name="customRadioIcon" class="form-check-input goliveOptions" type="radio" value="" id="customRadioOffice"/>
                </label>
              </div>
            </div>
            <div class="col-md mb-md-0 mb-3">
              <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="customRadioHome">
                  <span class="custom-option-body mt-4">
                    <img src="{{asset('assets/svg/icons/Go Live.svg')}}" width="35" alt="">
                    <span class="custom-option-title">Go Live</span>
                    {{-- <small> Delivery time (9am – 9pm) </small> --}}
                  </span>
                  <input name="customRadioIcon" class="form-check-input goliveOptions" type="radio" value="" id="customRadioHome" checked/>
                </label>
              </div>
            </div>
          </div>
        </div>
        <form id="PlanStream" class="row g-3 d-none" onsubmit="return false">

          <div class="col-12">
            <label class="form-label" for="modalAddressFirstName">Title</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress1">Start Date</label>
            <input type="date" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control"/>
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Start Time</label>
            <input type="time" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control"/>
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Select User type</label>
            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="All">All</option>
              <option value="Standard">Standard</option>
              <option value="Premium">Premium</option>
              <option value="Vip">Vip</option>
            </select>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
        <form id="Golive" class="row g-3" action="{{url('app/join-now')}}">

          <div class="col-12">
            <label class="form-label" for="modalAddressFirstName">Title</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" />
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">Select User type</label>
            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">Select</option>
              <option value="All">All</option>
              <option value="Standard">Standard</option>
              <option value="Premium">Premium</option>
              <option value="Vip">Vip</option>
            </select>
          </div>
          <div class="row mt-4">
            <div class="col-md mb-md-0 mb-2">
              <div class="form-check custom-option custom-option-basic">
                <label class="form-check-label custom-option-content" for="customRadioTemp1">
                  <input name="customRadioTemp1" class="form-check-input" type="radio" value="" id="customRadioTemp1">
                  <span class="custom-option-header">
                    <span class="h6 mb-0">Comments</span>
                  </span>
                  <span class="custom-option-body">
                    <small>Get 1 project with 1 teams members.</small>
                  </span>
                </label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-check custom-option custom-option-basic">
                <label class="form-check-label custom-option-content" for="customRadioTemp2">
                  <input name="customRadioTemp2" class="form-check-input" type="radio" value="" id="customRadioTemp2">
                  <span class="custom-option-header">
                    <span class="h6 mb-0">Voice Comments</span>
                  </span>
                  <span class="custom-option-body">
                    <small>Get 5 projects with 5 team members.</small>
                  </span>
                </label>
              </div>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md mb-md-0 mb-2">
              <div class="form-check custom-option custom-option-basic">
                <label class="form-check-label custom-option-content" for="customRadioTemp3">
                  <input name="customRadioTemp3" class="form-check-input" type="radio" value="" id="customRadioTemp3">
                  <span class="custom-option-header">
                    <span class="h6 mb-0">Share</span>
                  </span>
                  <span class="custom-option-body">
                    <small>Get 1 project with 1 teams members.</small>
                  </span>
                </label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-check custom-option custom-option-basic">
                <label class="form-check-label custom-option-content" for="customRadioTemp4">
                  <input name="customRadioTemp4" class="form-check-input" type="radio" value="" id="customRadioTemp4">
                  <span class="custom-option-header">
                    <span class="h6 mb-0">Emotion</span>
                  </span>
                  <span class="custom-option-body">
                    <small>Get 5 projects with 5 team members.</small>
                  </span>
                </label>
              </div>
            </div>
          </div>

          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Go Live Now</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Address Modal -->

@section('page-script')
<script>
  $('.goliveOptions').click(function(){
    if ($('#customRadioOffice').prop('checked')) {
    $('#PlanStream').toggleClass('d-none d-block');
    $('#Golive').toggleClass('d-block d-none');
    } else {
        $('#Golive').toggleClass('d-none d-block');
        $('#PlanStream').toggleClass('d-block d-none');
    }

  })
</script>

@endsection
