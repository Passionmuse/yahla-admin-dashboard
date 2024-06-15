
         
                <style>
                    .btn-close{
                        position: fixed;
        right: 32px;
                    }
      .dz-message {
        font-size: 20px !important;
    }
    .dropzone .dz-message {
        margin: 1em 0 !important;
    }
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
    .imagefullmargin .dropify-wrapper{
            min-width: 124%;
    margin-left: -83px;
    height:260px;
    }
    .imagefullmargin2one .dropify-wrapper{
           min-width: 120%;
    margin-left: -66px;
    }
     .imagefullmargin2two .dropify-wrapper{
          height: 160px;
    min-width: 395px;
    }
   .modal-header{
       /*padding:0px !important;*/
   }
     .imagefullmargintwotwo .dropify-wrapper{
         margin-left: -68px;
    min-width: 800px;
    }
    .imagefullmarginthreeone  .dropify-wrapper{
           margin-left: -54px;
    }
    .imagefullmarginthreetwo  .dropify-wrapper{
            height: 90px;
    min-width: 345px;
    margin-left: -37px;
    }
    .imagefullmargin4one .dropify-wrapper{
       height: 90px;
    margin-left: -60px;
    min-width: 392px;
    }
    .imagefullmargin4two .dropify-wrapper{
    min-width: 395px;
    }
      .imagefullmargin4three .dropify-wrapper{
        height: 185px;
    min-width: 507px;
    margin-left: -61px;
      }
       .imagefullmargin4four .dropify-wrapper{
          height: 60px;
    min-width: 343px;
       }
    </style>
     <div style="padding:0px 2.75rem;">
    <div class="bs-stepper wizard-vertical shadow-none vertical mt-2">
        <div class="bs-stepper-header d-none" style="min-width: auto;">
            <div class="step d-none active" data-target="#en">
                <button type="button" class="step-trigger" aria-selected="true">
                <span class="bs-stepper-circle">EN</span>
                </button>
            </div>
            
        </div>
        <div class="bs-stepper-content">
            <form id="createForm" method="POST" action="https://dash.yekbun.net/news" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="RjGFtE8lErgUbIk8VuK2UlAMYdCfkJyq24KbUNmz">    <div class="hidden-inputs"></div>
    
                <!-- EN -->
                <div id="en" class="content active dstepper-block">
                    <div class="row g-3">
                        
    
                        
    
    <!--codee-->
    <div id="" class="">
        
        
        <div class="shareimage">
            <div style="margin-top:-65px;" id="image11" class="image-content1  ">
              
                
                <div  style="margin-top: -37px;" class="w-100 imagefullmargin">
                    <input style="border-radius:20px;" name="file1" type="file" class="dropify" data-height="250" data-default-file="{{asset('assets/img/spiderfull.png')}}" />
                </div>
            
    
                
                <!--code-->
                 <div style="padding:0px 2.75rem;">
                
                <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-5 ">
    
            <div style="width:-webkit-fill-available;" class="">
                <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">All User</button>
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">Standart</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Premium</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Vip</button>
                    <!--<button type="button" class="btn btn-label-secondary  btn btn-outline-secondary"> <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i></button>-->
                </div>
            </div>
    
    
    
    
            <div style="margin-left:10px;" class="d-flex justify-content-center align-items-center btn btn-outline-secondary">
                <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i>
            </div>
        </div>
             </div>   
             
             
            <div style="padding:0px 2.75rem;"  class="col-md-12">
                          
                            <input type="text" id="fullname" class="form-control mt-3" placeholder="News Title" name="title ">
                                                </div>
    
            </div>
            <!--image 1 end-->
    
            <div style="margin-top:-56px;width:105%;"  id="image22" class="col-sm-12 image-content1 row  justify-content-around  justify-content-center" >
                <!--2 image 1st tab-->
               <div class="row image-changecontent p-0" id="imagechangeone1" >
                <div  style="padding-right:0px;margin-top:-4px;"  class="col-sm-6 customborderradiustopleft imagefullmargin2one" >
                    <input name="file1" type="file" class="dropify" data-height="150" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    
    
                </div>
                <!--card-->
      <!--          <div  style="padding-right:0px;"  class="col-sm-6 customborderradiustopleft" >-->
      <!--          <div class="card-input-image card_input_image">-->
      <!--  <input type="file" id="input_image" name="foto[]" class="input-image input_image_file" accept=".png, .jpg, .jpeg" />-->
      <!--  <label for="input_image" class="label-upload-image">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 24 24">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7Z" />-->
      <!--    </svg>-->
      <!--    Upload File-->
      <!--  </label>-->
      <!--  <button type="button" class="btn-delete" onclick="delete_value('input_image', 'card_input_image')">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 256 256">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M208.5 191.5a12 12 0 0 1 0 17a12.1 12.1 0 0 1-17 0L128 145l-63.5 63.5a12.1 12.1 0 0 1-17 0a12 12 0 0 1 0-17L111 128L47.5 64.5a12 12 0 0 1 17-17L128 111l63.5-63.5a12 12 0 0 1 17 17L145 128Z" />-->
      <!--    </svg>-->
      <!--    Delete-->
      <!--  </button>-->
      <!--  <img src="{{asset('assets/img/batman.jpg')}}" id="img_preview" class="image-preview" alt="" />-->
      <!--</div>-->
      <!--</div>-->
      
      <!--dropift two-->
       <div  style="padding-left:0px;margin-top:-4px;"  class="col-sm-6 customborderradiustopleft imagefullmargin2two" >
                    <input name="file1" type="file" class="dropify" data-height="150" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    
    
                </div>
      <!--dropify two-->
                <!--card two-->
      <!--          <div  style="padding-left:0px;"  class="col-sm-6 customborderradiustopright">-->
      <!--               <div class="card-input-image card_input_image">-->
      <!--  <input type="file" id="input_image" name="foto[]" class="input-image input_image_file" accept=".png, .jpg, .jpeg" />-->
      <!--  <label for="input_image" class="label-upload-image">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 24 24">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7Z" />-->
      <!--    </svg>-->
      <!--    Upload File-->
      <!--  </label>-->
      <!--  <button type="button" class="btn-delete" onclick="delete_value('input_image', 'card_input_image')">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 256 256">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M208.5 191.5a12 12 0 0 1 0 17a12.1 12.1 0 0 1-17 0L128 145l-63.5 63.5a12.1 12.1 0 0 1-17 0a12 12 0 0 1 0-17L111 128L47.5 64.5a12 12 0 0 1 17-17L128 111l63.5-63.5a12 12 0 0 1 17 17L145 128Z" />-->
      <!--    </svg>-->
      <!--    Delete-->
      <!--  </button>-->
      <!--  <img src="{{asset('assets/img/batman.jpg')}}" id="img_preview" class="image-preview" alt="" />-->
      <!--</div>-->
                    <!--<input name="file1" type="file" class="dropify" data-height="150" data-default-file="{{asset('assets/img/banner.jpg')}}" />-->
                    <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
      <!--          </div>-->
             </div>
              <!--2 image 1st tab-->
             <!--2 image second tab-->
              <div class="row image-changecontent p-0" id="imagechangeone2" >
                
                <div style="margin-top:-4px;" class="col-sm-12 imagefullmargintwotwo">
                    <input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/spiderfull (2).png')}}" />
                    <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
      <!--                <div class="card-input-image card_input_image">-->
      <!--  <input type="file" id="input_image" name="foto[]" class="input-image input_image_file" accept=".png, .jpg, .jpeg" />-->
      <!--  <label for="input_image" class="label-upload-image">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 24 24">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7Z" />-->
      <!--    </svg>-->
      <!--    Upload File-->
      <!--  </label>-->
      <!--  <button type="button" class="btn-delete" onclick="delete_value('input_image', 'card_input_image')">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 256 256">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M208.5 191.5a12 12 0 0 1 0 17a12.1 12.1 0 0 1-17 0L128 145l-63.5 63.5a12.1 12.1 0 0 1-17 0a12 12 0 0 1 0-17L111 128L47.5 64.5a12 12 0 0 1 17-17L128 111l63.5-63.5a12 12 0 0 1 17 17L145 128Z" />-->
      <!--    </svg>-->
      <!--    Delete-->
      <!--  </button>-->
      <!--  <img src="{{asset('assets/img/batman.jpg')}}" id="img_preview" class="image-preview" alt="" />-->
      <!--</div>-->
                </div>
                  <div style="margin-top:-4px;" class="col-sm-12 imagefullmargintwotwo">
                     <input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/spiderfull (2).png')}}" />
      <!--                  <div class="card-input-image card_input_image">-->
      <!--  <input type="file" id="input_image" name="foto[]" class="input-image input_image_file" accept=".png, .jpg, .jpeg" />-->
      <!--  <label for="input_image" class="label-upload-image">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 24 24">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M12 20c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m1 5h-2v4H7v2h4v4h2v-4h4v-2h-4V7Z" />-->
      <!--    </svg>-->
      <!--    Upload File-->
      <!--  </label>-->
      <!--  <button type="button" class="btn-delete" onclick="delete_value('input_image', 'card_input_image')">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"-->
      <!--      viewBox="0 0 256 256">-->
      <!--      <path fill="currentColor"-->
      <!--        d="M208.5 191.5a12 12 0 0 1 0 17a12.1 12.1 0 0 1-17 0L128 145l-63.5 63.5a12.1 12.1 0 0 1-17 0a12 12 0 0 1 0-17L111 128L47.5 64.5a12 12 0 0 1 17-17L128 111l63.5-63.5a12 12 0 0 1 17 17L145 128Z" />-->
      <!--    </svg>-->
      <!--    Delete-->
      <!--  </button>-->
      <!--  <img src="{{asset('assets/img/batman.jpg')}}" id="img_preview" class="image-preview" alt="" />-->
      <!--</div>-->
                    <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/banner2.jpg')}}" />-->
                    <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
             </div>
             
             <!--2 image second tab-->
             
               
      <!--line here-->
      
      <!--      <hr style="width: 131px;-->
      <!--margin: auto;margin-top:20px;">-->
       <div style="padding:0px 2.75rem;">
       <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-5 ">
    
            <div style="width:-webkit-fill-available;" class="">
                <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">All User</button>
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">Standart</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Premium</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Vip</button>
                    <!--<button type="button" class="btn btn-label-secondary  btn btn-outline-secondary"> <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i></button>-->
                </div>
            </div>
    
    
    
    
            <div style="margin-left:10px;" class="d-flex justify-content-center align-items-center btn btn-outline-secondary">
                <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i>
            </div>
        </div>
      </div>
      
       <div style="padding:0px 2.75rem;" class="col-md-12">
                          
                            <input type="text" id="fullname" class="form-control mt-3" placeholder="News Title" name="title ">
                                                </div>
    
    <hr style="width: 131px;
      margin: auto;margin-top:20px;">
                <!--<div class="d-flex justify-content-around align-items-center">-->
                <!--     <h6 style="text-align:center;">None</h6>     -->
                <!--      <h6 style="text-align:center;">Modern</h6>     -->
                <!--  <h6 style="text-align:start;">Elegant</h6>     -->
    
                <!--</div> -->
     <div style="padding:0px 2.75rem;">
                <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around ">
    
                   
                
                   
    
                    <!--<h6 style="text-align:center;">Modern</h6>-->
                    <div style="width:33.3%"  class="carousel-inner " >
                        <h6 style="text-align:center;">Modern</h6>
                        <!--<div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;border:2px solid #80e492;" class="carousel-inner brchg imagepicker tabbactiveclick" data-imagetwo="#image22">-->
                        <!--</div>-->
                          <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks3.png')}}" data-original="{{asset('assets/img/thanks3.png')}}" data-default="{{asset('assets/img/colorimage.PNG')}}" width="80" height="80" class="carousel-inner  imagechangeclass" data-imagechange="#imagechangeone1"></object>
    
                    </div>
    
    
                    <!--<h6 style="text-align:center;">Elegant</h6>-->
                    <div style="width:33.3%" class="carousel-inner  " >
                        <h6 style="text-align:center;">Elegant</h6>
                      
                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks2.png')}}" data-original="{{asset('assets/img/thanks2.png')}}" data-default="{{asset('assets/img/thanks2 (1).png')}}" width="80" height="80" class="carousel-inner   imagechange2 imagechangeclass"  data-imagechange="#imagechangeone2"></object>
    
                    </div>
                </div>
            </div>
             </div>
        
                <!--3 image new-->
                     <!--3 image new-->
                       <div style="margin-top:-60px;margin-left:-1px;" style="display:contents;" id="image33" class="col-sm-12 image-content1 row ">
                           
                            <!--3 image 1st tab-->
                     <div  class="col-sm-12 image-changecontent2" id="imagechangetwo1">
                            <div style="padding:0px;width:105%;margin-left:-12px;margin-top:-9px;" class="col-sm-12 imagefullmargintwotwo">
                    <input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/spiderfull (2).png')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    </div>
                
                <div class="row">
                   <div style="padding:0px;" class="col-sm-6 imagefullmargin2one">
                    <input name="file1" type="file" class="dropify" data-height="90" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                <div style="padding:0px;" class="col-sm-6 imagefullmargin2two">
                    <input name="file1" type="file" class="dropify" data-height="90" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                </div>
                </div>
                  <!--3 image 1st tab-->
                  
                  
                    <!--3 image 2nd tab-->
                    
                        <div style="padding:0px;" class="col-sm-12 image-changecontent2" id="imagechangetwo2">
                            <div style="padding:0px;" class="col-sm-12 ">
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                                <div class="row">
                                    <div style="padding:0px;" class="col-sm-8 imagefullmarginthreeone">
                    <input name="file1" type="file" class="dropify" data-height="170" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                                    </div>
                                     <div  style="padding:0px;margin-left:-12px;" class="col-sm-4">
                                        <div class="col-sm-12 imagefullmarginthreetwo">
                                                <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                                        </div>
                                         <div class="col-sm-12 imagefullmarginthreetwo">
                                                  <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                                         </div>
                
                                    </div>
                                </div>
                    </div>
              
                </div>
                         <!--3 image 2nd tab-->
                          <div style="padding:0px 2.75rem;">
                   <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-5 ">
    
            <div style="width:-webkit-fill-available;" class="">
                <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">All User</button>
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">Standart</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Premium</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Vip</button>
                    <!--<button type="button" class="btn btn-label-secondary  btn btn-outline-secondary"> <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i></button>-->
                </div>
            </div>
    
    
    
    
    
            <div style="margin-left:10px;" class="d-flex justify-content-center align-items-center btn btn-outline-secondary">
                <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i>
            </div>
        </div>
         </div>
         
         
           <div style="padding:0px 2.75rem;" class="col-md-12">
                          
                            <input type="text" id="fullname" class="form-control mt-3" placeholder="News Title" name="title ">
                                                </div>
              
                <div>
                    <!--<hr style="width: 131px;-->
                    <!--  margin: auto;margin-top:20px;">-->
    
                    <!--        <div class="d-flex justify-content-around align-items-center">-->
                    <!--             <h6 style="text-align:center;">None</h6>     -->
                    <!--              <h6 style="text-align:center;">Modern</h6>     -->
                    <!--          <h6 style="text-align:start;">Elegant</h6>     -->
    
                    <!--        </div> -->
    
                    <!--        <div style="margin-left:5px" class="row pick-content d-flex justify-content-around">-->
    
                    <!--<h6 style="text-align:center;">None</h6>     -->
                    <!--  <div style="background-image:url('{{asset('assets/img/thanks1.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image11">-->
                    <!--  </div>-->
    
    
    
                    <!--<h6 style="text-align:center;">Modern</h6>-->
                    <!--     <div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image22">-->
                    <!--  </div>-->
    
    
    
                    <!--<h6 style="text-align:center;">Elegant</h6>-->
                    <!--   <div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image33">-->
                    <!--  </div>-->
    
                    <!--</div>-->
                    <hr style="width: 131px;
      margin: auto;margin-top:20px;">
    
                  <div style="padding:0px 2.75rem;">
                    <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">
    
                      
    
                        <!--<h6 style="text-align:center;">Modern</h6>-->
                        <div style="width:33.3%" class="carousel-inner brchg imagepicker " data-imagetwo="#image22">
                            <h6 style="text-align:center;">Modern</h6>
                         
                             <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/three3.png')}}"  data-original2="{{asset('assets/img/three3.png')}}"  data-default2="{{asset('assets/img/threedef1.png')}}" width="80" height="80" class="carousel-inner  imagechangetwo2" data-imagechangetwo="#imagechangetwo1"></object>
                        </div>
    
    
                        <!--<h6 style="text-align:center;">Elegant</h6>-->
                        <div style="width:33.3%"  class="carousel-inner brchg imagepicker " data-imagetwo="#image33">
                            <h6 style="text-align:center;">Elegant</h6>
                            <!--<div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;border:2px solid #80e492;" class="carousel-inner brchg imagepicker tabbactiveclick" data-imagetwo="#image33">-->
                            <!--</div>-->
                             <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/three3(2).png')}}" data-original2="{{asset('assets/img/three3(2).png')}}" data-default2="{{asset('assets/img/threedef2.png')}}" width="80" height="80" class="carousel-inner imagechangetwo2" data-imagechangetwo="#imagechangetwo2"  ></object>
    
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
            
            
            
           
            
            <div style="display:contents;" id="image44" class="col-sm-12 image-content1 row  ">
                  <!--four tab 1-->
                  <div style="margin-top:-60px;padding:0px" class="imagecontentfour" id="imagecontentfour1">
                <div class="d-flex flex-wrap ">
                <div style="padding:0px;width:50%" class="imagefullmargin4one">
                    <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                <div style="padding:0px;width:50%" class="imagefullmargin4two">
                    <input name="file1" type="file" class="dropify" data-height="120" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                <div style="width:50%;padding:0px;margin-top:-41px;" class="imagefullmargin4one">
                    <input name="file1" type="file" class="dropify" data-height="120" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                <div style="width:50%;padding:0px;margin-top:0px;" class="imagefullmargin4two">
                    <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                
                </div>
                </div>
                  <!--four tab 1-->
                
                <!--four tab 2-->
                 <div style="margin-top:-70px;padding:0px" class="imagecontentfour" id="imagecontentfour2">
                   <div style="padding:10px;" class="col-sm-12 imagefullmargin4three">
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                                <div class="row">
                                    <div style="padding:0px;" class="col-sm-8 imagefullmargin4four">
                    <input name="file1" type="file" class="dropify" data-height="175" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                                    </div>
                                     <div style="padding:0px;" class="col-sm-4 ">
                                        <div class="col-sm-12 imagefullmargin4four">
                                                <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                                        </div>
                                         <div class="col-sm-12 imagefullmargin4four">
                                                  <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                                         </div>
                                          <div class="col-sm-12 imagefullmargin4four">
                                                  <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                                         </div>
                
                                    </div>
                                </div>
                    </div>
                     </div>
                  <!--four tab 2-->
                
                
                
                
                
      <!--            <hr style="width: 131px;-->
      <!--margin: auto;margin-top:20px;">-->
      
      <!--add upp-->
       <div style="padding:0px 2.75rem;">
       <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-5 ">
    
            <div style="width:-webkit-fill-available;" class="">
                <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">All User</button>
                    <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">Standart</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Premium</button>
                    <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Vip</button>
                    <!--<button type="button" class="btn btn-label-secondary  btn btn-outline-secondary"> <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i></button>-->
                </div>
            </div>
    
    
    
    
    
            <div style="margin-left:10px;" class="d-flex justify-content-center align-items-center btn btn-outline-secondary">
                <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i>
            </div>
        </div>
        </div>
        
        
          <div style="padding:0px 2.75rem;" class="col-md-12">
                          
                            <input type="text" id="fullname" class="form-control mt-3" placeholder="News Title" name="title ">
                                                </div>
      <!--add upp-->
      
    <hr style="width: 131px;
      margin: auto;margin-top:20px;">
      
                 <div style="padding:0px 2.75rem;">
                  <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">
    
                        <!--<h6 style="text-align:center;">None</h6>     -->
                        <!--<div style="width:33.3%" class="carousel-inner brchg imagepicker " >-->
                        <!--    <h6 style="text-align:center;">None</h6>-->
                            <!--<div style="background-image:url('{{asset('assets/img/thanks1.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;" class="imagepicker" data-imagetwo="#image11">-->
    
                            <!--</div>-->
                        <!--     <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks1.png')}}" data-original3="{{asset('assets/img/thanks1.png')}}" data-default3="{{asset('assets/img/nonedef.png')}}" width="80" height="80" class="carousel-inner imagechangefour" ></object>-->
    
                        <!--</div>-->
                        <!--<div style="background-image:url('{{asset('assets/img/thanks1.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image11">-->
    
                        <!--</div>-->
    
    
    
                        <!--<h6 style="text-align:center;">Modern</h6>-->
                        <div style="width:33.3%" class="carousel-inner brchg imagepicker " >
                            <h6 style="text-align:center;">Modern</h6>
                            <!--<div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;" class="carousel-inner brchg imagepicker" data-imagetwo="#image22">-->
                            <!--</div>-->
                             <!--<object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks3.png')}}" width="80" height="80" class="carousel-inner brchg imagepicker imagechange" data-imagetwo="#image22"></object>-->
                             <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4.png')}}" data-original3="{{asset('assets/img/four4.png')}}" data-default3="{{asset('assets/img/fourdef2.png')}}" width="80" height="80" class="carousel-inner imagechangefour" data-contentfour2="#imagecontentfour1"></object>
                        </div>
    
    
                        <!--<h6 style="text-align:center;">Elegant</h6>-->
                        <div style="width:33.3%"  class="carousel-inner brchg imagepicker " >
                            <h6 style="text-align:center;">Elegant</h6>
                            <!--<div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;border:2px solid #80e492;" class="carousel-inner brchg imagepicker tabbactiveclick" data-imagetwo="#image33">-->
                            <!--</div>-->
                             <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4(4).png')}}" data-original3="{{asset('assets/img/four4(4).png')}}" data-default3="{{asset('assets/img/fourdef1.png')}}" width="80" height="80" class="carousel-inner imagechangefour"  data-contentfour2="#imagecontentfour2"></object>
    
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    
    
    
    
    
      
     <div style="padding:0px 2.75rem;">
        <hr style="width: 131px;
      margin: auto;margin-top:20px;">
        <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex mt-3  ">
            <input style="height: 90px;" type="text" class="form-control w-100" placeholder="Enter The description">
        </div>
    
    
        <hr style="    width: 131px;
      margin: auto;margin-top:20px">
    
        <div style="width:-webkit-fill-available;" class="mt-3 clickhere  ">
            <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-label-secondary btn btn-outline-secondary imagea imagepicker active" data-imageone="#image1" data-imagetwo="#image11">1 Image</button>
                <button type="button" class="btn btn-label-secondary btn btn-outline-secondary imagea imagepicker" data-imageone="#image2" data-imagetwo="#image22">2 Image</button>
                <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary imagea imagepicker " data-imageone="#image3" data-imagetwo="#image33">3 Image</button>
                <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary imagea imagepicker" data-imageone="#image4" data-imagetwo="#image44">+4 Image</button>
    
            </div>
        </div>
    </div>
        <!--<hr style="    width: 131px;-->
        <!--margin: auto;margin-top:20px">-->
    
    
        <!--      <div style="background-image:url('{{asset('assets/img/hand.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
        <!--  <div class="carousel-item active">-->
        <!--<h2 style="font-size:28px;color:whitesmoke;margin-top:20px;text-align:center;" class="">User Text Will be then <br> showed here</h2> -->
        <!--  </div>-->
        <!--</div>-->
    </div>
    <!--code end-->
                    
                        
                        <!--<div class="col-md-12">-->
                        <!--    <label class="form-label" for="fullname">News Title</label>-->
                        <!--    <input type="text" id="fullname" class="form-control" placeholder="News Title" name="title">-->
                        <!--                        </div>-->
    
                        <!--<div class="col-12">-->
                        <!--    <label class="form-label" for="inputDescription">News Description</label>-->
                        <!--    <textarea class="form-control" name="description" rows="6" placeholder="Type..."></textarea>-->
                        <!--                        </div>-->
    
                        
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
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="" id="">
                          </div>
                        </div>
    
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="" id="">
                          </div>
                        </div>
    
                        <div class="col-md-12">
                            <label class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="1" selected="">Select status</option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>
                                                </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-label-primary">
                                Submit
                             </button>
                        </div>
                        
                    </div>
                </div>
    
    
                <!-- KR -->
                
    
                <!-- TR -->
                
    
                <!-- IR -->
                
            </form>
        </div>
    </div>
    </div>
    <script>
        window.addEventListener('load', () => {
            // Wizard
            const wizardVertical = document.querySelector('.wizard-vertical'),
            wizardVerticalBtnNextList = [].slice.call(wizardVertical.querySelectorAll('.btn-next')),
            wizardVerticalBtnPrevList = [].slice.call(wizardVertical.querySelectorAll('.btn-prev')),
            wizardVerticalBtnSubmit = wizardVertical.querySelector('.btn-submit');
    
            if (typeof wizardVertical !== undefined && wizardVertical !== null) {
                const verticalStepper = new Stepper(wizardVertical, {
                linear: false
                });
                if (wizardVerticalBtnNextList) {
                wizardVerticalBtnNextList.forEach(wizardVerticalBtnNext => {
                    wizardVerticalBtnNext.addEventListener('click', event => {
                    verticalStepper.next();
                    });
                });
                }
                if (wizardVerticalBtnPrevList) {
                wizardVerticalBtnPrevList.forEach(wizardVerticalBtnPrev => {
                    wizardVerticalBtnPrev.addEventListener('click', event => {
                    verticalStepper.previous();
                    });
                });
                }
    
                if (wizardVerticalBtnSubmit) {
                wizardVerticalBtnSubmit.addEventListener('click', event => {
                    wizardVerticalBtnSubmit.closest('form').submit();
                });
                }
            }
    
    
        })
    </script>
    
    
    <script>
        'use strict';
    
        dropZoneInitFunctions.push(function (){
                // previewTemplate: Updated Dropzone default previewTemplate
    
                const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                                        <div class="dz-details">
                                          <div class="dz-thumbnail" style="width:95%">
                                            <img data-dz-thumbnail class="w-100" style="max-height:184px; object-fit:revert;">
                                            <span class="dz-nopreview">No preview</span>
                                            <div class="dz-success-mark"></div>
                                            <div class="dz-error-mark"></div>
                                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                                            </div>
                                          </div>
                                          <div class="dz-filename" data-dz-name></div>
                                          <div class="dz-size" data-dz-size></div>
                                        </div>
                                        </div></div></di>`;
    
                // for image
                const dropzoneMulti1 = new Dropzone('#dropzone-img', {
                    url: 'https://dash.yekbun.net/file/upload',
                    previewTemplate: previewTemplate,
                    parallelUploads: 1,
                    maxFilesize: 100,
                    addRemoveLinks: true,
                    headers: {
                        'X-CSRF-TOKEN': 'RjGFtE8lErgUbIk8VuK2UlAMYdCfkJyq24KbUNmz'
                    },
                    sending: function (file, xhr, formData) {
                        formData.append('folder', 'music');
                    },
                    success: function (file, response) {
                        if (file.previewElement) {
                            file.previewElement.classList.add("dz-success");
                        }
                        file.previewElement.dataset.path = response.path;
                        const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                        hiddenInputsContainer.innerHTML += `<input type="hidden" name="image[]" value="${response.path}" data-path="${response.path}">`;
    
    
                    },
                    removedfile: function (file) {
                        const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                        hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();
    
                        if (file.previewElement != null && file.previewElement.parentNode != null) {
                            file.previewElement.parentNode.removeChild(file.previewElement);
                        }
    
                        $.ajax({
                            url: 'https://dash.yekbun.net/file/delete',
                            method: 'delete',
                            headers: {
                                'X-CSRF-TOKEN': 'RjGFtE8lErgUbIk8VuK2UlAMYdCfkJyq24KbUNmz'
                            },
                            data: {path: file.previewElement.dataset.path},
                            success: function () {}
                        });
    
                        return this._updateMaxFilesReachedClass();
                    }
                });
            });
    </script>
                