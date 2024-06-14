@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/core.css')}}" />



@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/modal-edit-cc.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-cc.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-address.js')}}"></script>
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
<script src="{{asset('assets/js/app-user-view-billing.js')}}"></script>

<!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>-->
<script src="https://cdn.tiny.cloud/1/hpjsz8rrrv9w9q89ahul4i659im6c7189itma1bqn5e22d4g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

videoclass
<script>
// var video = document.getElementByClass("videoclass");

//   // Add a click event listener to the video element
//   video.addEventListener("click", function() {
//     // Call your custom function here
//     myFunction();
//   });

//   // Your custom function
//   function myFunction() {
//     // Add your desired functionality here
//     alert("Custom function triggered!");
//   }


 // jQuery code
  $(document).ready(function() {
    // Add a click event listener to the play button
    $(".videoclass").on("play", function() {
      // Call your custom function here
      myFunction();
    });
  });

  // Your custom function
  function myFunction() {
    // Add your desired functionality here
   $('#requestView').modal('show');
   
  }




$(".clicktoggled").click(function(){
  $(this).closest(".dropdown-trigger").toggleClass("is-active");
});


tinymce.init({
  selector: "#mytextarea",
  plugins: "emoticons autoresize",
  toolbar: "emoticons",
  toolbar_location: "bottom",
  menubar: false,
  statusbar: false
});
</script>

<script>


   $(document).ready(function(){
  $(".modal-content").css({"overflow":"visible"})
})

$(document).ready(function(){
    $('#requestView >  .modal-dialog').addClass('modal-fullscreen');
})
</script>
@endsection

@section('content')

<style>
    #requestView .modal-footer{
        display:none;
    }
</style>
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Videos / Reported </span>Videos
</h4>
<div class="row">
 
 <div class="col-xl-12 col-lg-12 col-md-12 order-0 order-md-1">
    

<div class="row">
            <div class="column column is-4">
              <div id="feed-post-1" class="card is-post">
                  <!-- Main wrap -->
                  <div class="content-wrap">
                      <!-- Post header -->
                      <div class="card-heading">
                          <!-- User meta -->
                          <div class="user-block">
                              <div class="image">
                                  <img src="{{asset('assets/img/avatars/13.png')}}" data-demo-src="{{asset('assets/img/avatars/13.png')}}" data-user-popover="1" alt="">
                              </div>
                              <div class="user-info">
                                  <span class="d-flex"><a href="#">Saif Karim</a></span>
                                  <span class="time">Wed 29 Nov 1:49 pm</span>
                              </div>
                          </div>
                       

                          <div class="dropdown is-spaced is-right is-neutral dropdown-trigger ">
                            <div>
                                <div class="button clicktoggled ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-content">
                                                <h3>Remove the Feed</h3>
                                                <select class="form-control mt-1">
                                                  <option value="">Select the Reason</option>
                                                </select>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                      <div class="media">
                                          <div class="media-content">
                                              <h3>Remove Feed - Flag User</h3>
                                              <select class="form-control mt-1">
                                                <option value="">Select the Reason</option>
                                              </select>
                                              <select class="form-control mt-1">
                                                <option value="">Select the Flag</option>
                                              </select>
                                          </div>
                                      </div>
                                  </a>
                                  <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-content">
                                          <h3>Remove Feed - Block User</h3>
                                          <select class="form-control mt-1">
                                            <option value="">Select the Reason</option>
                                          </select>
                                          <select class="form-control mt-1">
                                            <option value="">Select Downgrade User</option>
                                          </select>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                  <div class="media">
                                      <div class="media-content">
                                        <h3>Remove User Block Device</h3>
                                        <select class="form-control mt-1">
                                          <option value="">Select the Reason</option>
                                        </select>
                                      </div>
                                  </div>
                              </a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <!-- /Post header -->

                      <!-- Post body -->
                      <div class="card-body">
                          <div class="post-image" >
                              <a data-fancybox="post1" data-lightbox-type="comments">
                                <video controls="" class="videoclass">
                                  <source src="{{asset('assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
                              </video>
                              </a>
                              <!-- Action buttons -->

                          </div>
                      </div>
                      <!-- /Post body -->
                  </div>
                  <!-- /Main wrap -->

                  <!-- Post #1 Comments -->
                  <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                    <div class="comments-header">
                                          </div>
                      <!-- Comments body -->
                      <div class="comments-body has-slimscroll">
                        <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">
                    </div>
                    <!-- /Comments body -->
                  </div>
                  <!-- /Post #1 Comments -->
              </div>
          </div>

          <div class="column column is-4">
            <div id="feed-post-1" class="card is-post">
                <!-- Main wrap -->
                <div class="content-wrap">
                    <!-- Post header -->
                    <div class="card-heading">
                        <!-- User meta -->
                        <div class="user-block">
                            <div class="image">
                                <img src="{{asset('assets/img/avatars/13.png')}}" data-demo-src="{{asset('assets/img/avatars/13.png')}}" data-user-popover="1" alt="">
                            </div>
                            <div class="user-info">
                                <span class="d-flex"><a href="#">Saif Karim</a></span>
                                <span class="time">Wed 29 Nov 1:49 pm</span>
                            </div>
                        </div>
                        <!-- Right side dropdown -->
                        <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->

                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger ">
                            <div>
                                <div class="button clicktoggled ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-content">
                                                <h3>Remove the Feed</h3>
                                                <select class="form-control mt-1">
                                                  <option value="">Select the Reason</option>
                                                </select>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                      <div class="media">
                                          <div class="media-content">
                                              <h3>Remove Feed - Flag User</h3>
                                              <select class="form-control mt-1">
                                                <option value="">Select the Reason</option>
                                              </select>
                                              <select class="form-control mt-1">
                                                <option value="">Select the Flag</option>
                                              </select>
                                          </div>
                                      </div>
                                  </a>
                                  <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-content">
                                          <h3>Remove Feed - Block User</h3>
                                          <select class="form-control mt-1">
                                            <option value="">Select the Reason</option>
                                          </select>
                                          <select class="form-control mt-1">
                                            <option value="">Select Downgrade User</option>
                                          </select>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                  <div class="media">
                                      <div class="media-content">
                                        <h3>Remove User Block Device</h3>
                                        <select class="form-control mt-1">
                                          <option value="">Select the Reason</option>
                                        </select>
                                      </div>
                                  </div>
                              </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Post header -->

                    <!-- Post body -->
                    <div class="card-body">
                        <div class="post-image">
                            <a data-fancybox="post1" data-lightbox-type="comments">
                              <video controls="" class="videoclass">
                                <source src="{{asset('assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
                            </video>
                            </a>
                            <!-- Action buttons -->

                        </div>
                    </div>
                    <!-- /Post body -->
                </div>
                <!-- /Main wrap -->

                <!-- Post #1 Comments -->
                <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                  <div class="comments-header">
                                      </div>
                    <!-- Comments body -->
                    <div class="comments-body has-slimscroll">
                      <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">
                  </div>
                  <!-- /Comments body -->
                </div>
                <!-- /Post #1 Comments -->
            </div>
        </div>

        <div class="column column is-4">
          <div id="feed-post-1" class="card is-post">
              <!-- Main wrap -->
              <div class="content-wrap">
                  <!-- Post header -->
                  <div class="card-heading">
                      <!-- User meta -->
                      <div class="user-block">
                          <div class="image">
                              <img src="{{asset('assets/img/avatars/13.png')}}" data-demo-src="{{asset('assets/img/avatars/13.png')}}" data-user-popover="1" alt="">
                          </div>
                          <div class="user-info">
                              <span class="d-flex"><a href="#">Saif Karim</a></span>
                              <span class="time">Wed 29 Nov 1:49 pm</span>
                          </div>
                      </div>
                      <!-- Right side dropdown -->
                      <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->

                      <div class="dropdown is-spaced is-right is-neutral dropdown-trigger ">
                            <div>
                                <div class="button clicktoggled ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="media">
                                            <div class="media-content">
                                                <h3>Remove the Feed</h3>
                                                <select class="form-control mt-1">
                                                  <option value="">Select the Reason</option>
                                                </select>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                      <div class="media">
                                          <div class="media-content">
                                              <h3>Remove Feed - Flag User</h3>
                                              <select class="form-control mt-1">
                                                <option value="">Select the Reason</option>
                                              </select>
                                              <select class="form-control mt-1">
                                                <option value="">Select the Flag</option>
                                              </select>
                                          </div>
                                      </div>
                                  </a>
                                  <a href="javascript:void(0)" class="dropdown-item">
                                    <div class="media">
                                        <div class="media-content">
                                          <h3>Remove Feed - Block User</h3>
                                          <select class="form-control mt-1">
                                            <option value="">Select the Reason</option>
                                          </select>
                                          <select class="form-control mt-1">
                                            <option value="">Select Downgrade User</option>
                                          </select>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="dropdown-item">
                                  <div class="media">
                                      <div class="media-content">
                                        <h3>Remove User Block Device</h3>
                                        <select class="form-control mt-1">
                                          <option value="">Select the Reason</option>
                                        </select>
                                      </div>
                                  </div>
                              </a>
                                </div>
                            </div>
                        </div>
                  </div>
                  <!-- /Post header -->

                  <!-- Post body -->
                  <div class="card-body">
                      <div class="post-image"  >
                          <a data-fancybox="post1" data-lightbox-type="comments">
                            <video controls="" class="videoclass">
                              <source src="{{asset('assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
                          </video>
                          </a>
                          <!-- Action buttons -->
							
                      </div>
                  </div>
                  <!-- /Post body -->
              </div>
              <!-- /Main wrap -->

              <!-- Post #1 Comments -->
              <div class="comments-wrap is-hidden" style="top: 0rem;position: relative;">
                <div class="comments-header">
                                  </div>
                  <!-- Comments body -->
                  <div class="comments-body has-slimscroll">
                    <img src="{{asset('assets/svg/icons/Comment- area.svg')}}" style="width: 100%" alt="">
                </div>
                <!-- /Comments body -->
              </div>
              <!-- /Post #1 Comments -->
          </div>
      </div>


            </div>



        </div>
        
        
        
        
          <x-modal
id="requestView"
size="">
 @include('content.include.live_stream.longpopup')
</x-modal>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-edit-cc')
@include('_partials/_modals/modal-add-new-address')
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->

@endsection
