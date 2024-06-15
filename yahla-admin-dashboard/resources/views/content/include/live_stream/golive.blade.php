<style>
    .btn-close{
    /*        right: 20px;*/
    /*margin-top: 3px;*/
    }
   #requestpopupnew .modal-dialog .modal-content .modal-footer{
       display:none;
   }
    
</style>

<!--       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="-->
<!--    right: 25px;-->
<!--    margin-top: 17PX;-->
<!--"></button>-->
 <div style="padding:0px 2.75rem;">
        <div class="text-center mb-4  tab-contented"  id="PlanStream1">
          <h3 class="address-title">Create Meeting</h3>
          <p class="address-subtitle">Plan a new Meeting</p>
        </div>
          <div style="display:none;" class="text-center mb-4   tab-contented"  id="Golive1">
          <h3 class="address-title">Go Live</h3>
          <p class="address-subtitle">Meet with your Team</p>
        </div>
        <div class="col-12">
          <div id="wizard-create-deal-form" class="row">
            <div class="col-md mb-md-0 mb-3">
              <div class="form-check custom-option custom-option-icon classonetr" data-king="#PlanStream"  data-king1="#PlanStream1">
                <label class="form-check-label custom-option-content" for="customRadioOffice">
                  <span class="custom-option-body mt-4">
                    <img src="{{asset('assets/svg/icons/Plan a stream.svg')}}" width="35" alt="">
                    <span class="custom-option-title"> Plan a Stream </span>
                    
                  </span>
                  <input name="customRadioIcon" class="form-check-input goliveOptions" type="radio" value="" checked="">
                </label>
              </div>
            </div>
            <div class="col-md mb-md-0 mb-3">
              <div class="form-check custom-option custom-option-icon classonetr" data-king="#Golive"  data-king1="#Golive1">
                <label class="form-check-label custom-option-content" for="customRadioHome">
                  <span class="custom-option-body mt-4">
                    <img src="{{asset('assets/svg/icons/Go Live.svg')}}" width="35" alt="">
                    <span class="custom-option-title">Go Live</span>
                    
                  </span>
                  <input name="customRadioIcon" class="form-check-input goliveOptions" type="radio" value="" id="customRadioHome" >
                </label>
              </div>
            </div>
          </div>
        </div>
        <form id="PlanStream" class="row g-3 tab-contented" onsubmit="return false">

          <div class="col-12">
            <label class="form-label" for="modalAddressFirstName">Title</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress1">Start Date</label>
            <input type="date" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">Start Time</label>
            <input type="time" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control">
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
          <div  style="padding-bottom:20px;" class="col-12 text-center">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
        <form style="display:none;" id="Golive" class="row g-3 tab-contented" >

          <div class="col-12">
            <label class="form-label" for="modalAddressFirstName">Title</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control">
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

          <div style="padding-bottom:20px;" class="col-12 text-center">
              <a href="{{url('app/join-now')}}" class="btn btn-primary me-sm-3 me-1">Go Live Now</a>
            <!--<button type="submit" class="btn btn-primary me-sm-3 me-1">Go Live Now</button>-->
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
          </div>
        </form>
        
    </div>