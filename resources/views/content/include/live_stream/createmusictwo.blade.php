<style>
    .modal-footer {
        display: none;
    }

    .bgchn {
        cursor: pointer;
    }

    .owl-buttons {
        display: none;
    }
    

    .owl-carousel:hover .owl-buttons {
        display: block;
    }

    .owl-item {
        text-align: center;
    }

    .owl-nav {
        display: none !important;
    }

    .owl-theme .owl-controls .owl-buttons div {
        background: transparent;
        color: #869791;
        font-size: 40px;
        line-height: 300px;
        margin: 0;
        padding: 0 60px;
        position: absolute;
        top: 0;
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev {
        left: 0;
        padding-left: 20px;
    }

    .owl-theme .owl-controls .owl-buttons .owl-next {
        right: 0;
        padding-right: 20px;
    }

    .owl-item {
        width: auto !important;
    }

    .carousel-indicators [data-bs-target] {
        background-color: black !important;
    }

    .owl-dots {
        display: none !important;
    }

    .modal-content {
        scrollbar-width: none;
    }

    .btn-close {
        position: fixed !important;
        right: -10px !important;
        top: 50px !important;
    }

    .modal-content {
        /*overflow:scroll !important;*/
    }

    .dropify-wrapper .dropify-message span.file-icon {
        width: 100% !important;
    }

    .modal-content {
        padding: 20px !important;
    }

    .dropify-message .file-icon p {
        font-size: 24px !important;
    }
    .color-selector {
        background-color: #eaeaea;
        border-radius: 0px 0px 5px 5px;
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .color-option {
        height: 35px;
        width: 35px;
        border-radius: 100%;
        cursor: pointer;
    }

    .selected {
        border: 2px solid #000; /* You can customize this border as you wish */
    }
    #sharevideo{
          justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    }
     #shareimage{
          justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    }
    
    .modal-content{
        padding:0px !important;
    }
    .modal-body{
           padding:0px !important;
    }
    /*.customborderradiustopleft .dropify-wrapper {*/
    /*        border-radius:15px 0px 0px 0px;*/

    /*}*/
    /*.customborderradiustopright .dropify-wrapper{*/
    /*       border-radius:0px 15px 0px 0px;*/
    /*}*/
    
/*    .dropify-wrapper{*/
/*        border-radius:15px !important;*/
/*    }*/
  
.dropify-preview{
padding:0px !important;
}
.dropify-wrapper{
    border:none !important;
}
/*.dropify-wrapper:hover{*/
/*    border-radius:15px !important;*/
/*}*/
.modal-content{
    border-radius:15px;
}
      .upload-btn {
      position: absolute;
      top: 2px;
      right: 13px;
      padding: 6px;
      z-index: 99999;
    }
    
    
    /*css add*/
    

/* input image */
/* input image */
/* input image */
.card-input-image {
  height: 300px; /* Set a fixed height */
  width: 100%; /* Make it full width */
  border-radius: 8px;
  position: relative;
  margin: 0 auto 12px auto;
  overflow: hidden; /* Prevent child elements from overflowing */
}

.card-input-image .label-upload-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  color: #629ef5;
  font-weight: 700;
  font-size: 14px;
  line-height: 21px;
  border: 2px dashed #b0cffa;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  z-index: 1; /* Ensure the label is above the image */
}

.card-input-image input {
  width: 100%;
  height: 100%;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2; /* Ensure the input is above the label */
}

.card-input-image .image-preview {
  width: 100%;
  height: 100%;
  border-radius: 8px;
  object-fit: cover;
}

.card-input-image .btn-delete {
  background: #ef4e4e;
  border-radius: 14.5455px;
  color: #ffffff;
  font-weight: 700;
  font-size: 10px;
  line-height: 10px;
  border: none;
  padding: 7.27273px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  z-index: 3; /* Ensure the delete button is above other elements */
}

/* input image active state */
.card-input-image.active .label-upload-image {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45));
  color: #ffffff;
  border: none;
}

.card-input-image.active .image-preview {
  display: initial;
}

.card-input-image.active .btn-delete {
  display: flex;
  align-items: center;
  justify-content: center;
}

.videoclass:hover #videohover{
    visibility:visible !important;
}
</style>

<div id="shahretext" class="share-content">
    <div style="padding:0px 2.75rem;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div style="margin-bottom:-24px !important;" class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div style="background-image:url('{{asset('assets/img/hand.png')}}');height: 240px; width: 119%;margin-top:-28px;margin-left:-44px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">
            <div class="carousel-item active">
                <h2 style="font-size:28px;color:whitesmoke;margin-top:20px;text-align:center;" class="">User Text Will be then <br> showed here</h2>
                <!--<img src="{{asset('assets/img/hand.png')}}" class="d-block w-100" alt="...">-->
            </div>
            <div   class="carousel-item">
                <h2 style="font-size:28px;color:whitesmoke;margin-top:20px;text-align:center;" class="">User Text Will be then <br> showed here</h2>
                <!--<img src="{{asset('assets/img/hand.png')}}" class="d-block w-100" alt="...">-->
            </div>
            <div class="carousel-item">
                <h2 style="font-size:28px;color:whitesmoke;margin-top:20px;text-align:center;" class="">User Text Will be then <br> showed here</h2>
                <!--<img src="{{asset('assets/img/hand.png')}}" class="d-block w-100" alt="...">-->
            </div>
        </div>
        <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">-->
        <!--  <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--  <span class="visually-hidden">Previous</span>-->
        <!--</button>-->
        <!--<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">-->
        <!--  <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
        <!--  <span class="visually-hidden">Next</span>-->
        <!--</button>-->
    </div>
    </div>
    
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

    <!--add-->
    <hr style="    width: 131px;
    margin: auto;margin-top:20px;">
    
     <div style="padding:0px 2.75rem;">
    <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex mt-3">
        <div class="d-flex justify-content-center align-items-center mt-3"> <i style="font-size:4px;color:gray" class="fa fa-circle p-1"></i>
            <label>Select Feed Background</label>
            <i style="font-size:4px;color:gray" class="fa fa-circle p-1"></i>
        </div>
    </div>

    <div style="padding:10px !important;background-color:#eaeaea;border-radius:0px 0px 5px 5px;" id="owl-example" class="owl-carousel ">
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>

        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
        <div><img class="clickborder" style="height:55px;width:82px;padding: 0px 12px;" src="{{asset('assets/img/party.jpg')}}" alt=""></div>
    </div>
    <hr style="    width: 131px;
    margin: auto;margin-top:20px;">
    <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex  align-items-center pt-3 mt-3"> <i style="font-size:4px;color:gray" class="fa fa-circle p-1"></i>
        <label>Select Font Color</label>
        <i style="font-size:4px;color:gray" class="fa fa-circle p-1"></i>
    </div>
    
    <!--add color select-->
   <div class="color-selector">
    <div class="color-option" style="background:black"></div>
    <div class="color-option" style="background:pink"></div>
    <div class="color-option" style="background:blue"></div>
    <div class="color-option" style="background:green"></div>
    <div class="color-option" style="background:white"></div>
    <div class="color-option" style="background:red"></div>
    <div class="color-option" style="background:skyblue"></div>
</div>
</div>

    <!-- <hr style="    width: 131px;-->
    <!--margin: auto;margin-top:20px">-->

    <!--ad-->




    <hr style="width: 131px;
  margin: auto;margin-top:20px;">
  
   <div style="padding:0px 2.75rem;">
    <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex mt-3  ">
        <input style="height: 90px;" type="text" class="form-control w-100" placeholder="Enter The description">
    </div>
    </div>


    <!--</div>-->
</div>

<!--share image-->
<div id="shahreimage" class="share-content">
    
    
    <div class="shareimage">
        <div style="margin-top:-28px;" id="image11new" class="image-contentnew  ">
            <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 350px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
            
            
            <div  style="margin-top: -36px;" class="w-100">
                <input style="border-radius:20px;" name="file1" type="file" class="dropify" data-height="250" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
            </div>
            <!--code-->
  <!--            <div class="card-input-image card_input_image">-->
  <!--  <input type="file" id="input_image" name="foto[]" class="input-image input_image_file" accept=".png, .jpg, .jpeg"/>-->
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
        </div>
        <!--image 1 end-->

        <div style="margin-top:-28px;width:105%;"  id="image22new" class="col-sm-12 image-contentnew row  justify-content-around  justify-content-center" >
            <!--2 image 1st tab-->
           <div class="row image-changecontentimage p-0" id="imagechangeone1new" >
            <div  style="padding-right:0px;"  class="col-sm-6 customborderradiustopleft" >
                <input name="file1" type="file" class="dropify" data-height="150" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                

            </div>
          
   <div  style="padding-left:0px;"  class="col-sm-6 customborderradiustopleft" >
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
          <div class="row image-changecontentimage p-0" id="imagechangeone2new" >
            
            <div class="col-sm-12">
                <input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/banner2.jpg')}}" />
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
              <div class="col-sm-12">
                 <input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/banner2.jpg')}}" />
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

<hr style="width: 131px;
  margin: auto;margin-top:20px;">
            <!--<div class="d-flex justify-content-around align-items-center">-->
            <!--     <h6 style="text-align:center;">None</h6>     -->
            <!--      <h6 style="text-align:center;">Modern</h6>     -->
            <!--  <h6 style="text-align:start;">Elegant</h6>     -->

            <!--</div> -->
 <div style="padding:0px 2.75rem;">
            <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">

               
            
               

                <div style="width:33.3%"  class="carousel-inner " >
                    <h6 style="text-align:center;">Modern</h6>
                  
                      <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks3.png')}}" data-original="{{asset('assets/img/thanks3.png')}}" data-default="{{asset('assets/img/colorimage.PNG')}}" width="80" height="80" class="carousel-inner  imagechangeclassimageone" data-imagechangeimageone="#imagechangeone1new"></object>

                </div>

                <div style="width:33.3%" class="carousel-inner  " >
                    <h6 style="text-align:center;">Elegant</h6>
                  
                     <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks2.png')}}" data-original="{{asset('assets/img/thanks2.png')}}" data-default="{{asset('assets/img/thanks2 (1).png')}}" width="80" height="80" class="carousel-inner   imagechange2 imagechangeclassimageone"  data-imagechangeimageone="#imagechangeone2new"></object>

                </div>
            </div>
        </div>
         </div>
    
            <!--3 image new-->
                 <!--3 image new-->
                   <div style="margin-top:-28px;margin-left:-1px;" style="display:contents;" id="image33new" class="col-sm-12 image-contentnew row ">
                       
                        <!--3 image 1st tab-->
                 <div  class="col-sm-12 image-changecontent2new" id="imagechangetwo1new">
                        <div style="padding:0px;width:105%;margin-left:-12px;margin-top:-9px;" class="col-sm-12 ">
                <input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/banner2.jpg')}}" />
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                </div>
            
            <div class="row">
               <div style="padding:0px;" class="col-sm-6 ">
                <input name="file1" type="file" class="dropify" data-height="90" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            <div style="padding:0px;" class="col-sm-6 ">
                <input name="file1" type="file" class="dropify" data-height="90" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            </div>
            </div>
              <!--3 image 1st tab-->
              
              
                <!--3 image 2nd tab-->
                
                    <div style="padding:0px;" class="col-sm-12 image-changecontent2new" id="imagechangetwo2new">
                        <div style="padding:0px;" class="col-sm-12 ">
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                            <div class="row">
                                <div style="padding:0px;" class="col-sm-8">
                <input name="file1" type="file" class="dropify" data-height="170" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                                </div>
                                 <div  style="padding:0px;margin-left:-12px;" class="col-sm-4">
                                    <div class="col-sm-12">
                                            <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                                    </div>
                                     <div class="col-sm-12">
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
                <!--  <div style="background-image:url('{{asset('assets/img/thanks1.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image11new">-->
                <!--  </div>-->



                <!--<h6 style="text-align:center;">Modern</h6>-->
                  <!--   <div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image22new">-->
                  <!--</div>-->



                <!--<h6 style="text-align:center;">Elegant</h6>-->
                  <!-- <div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image33new">-->
                  <!--</div>-->

                <!--</div>-->
                <hr style="width: 131px;
  margin: auto;margin-top:20px;">

              <div style="padding:0px 2.75rem;">
                <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">

                  

                 
                    <div style="width:33.3%" class="carousel-inner brchg imagepicker " data-imagetwo="#image22new">
                        <h6 style="text-align:center;">Modern</h6>
                     
                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/three3.png')}}"  data-original2="{{asset('assets/img/three3.png')}}"  data-default2="{{asset('assets/img/threedef1.png')}}" width="80" height="80" class="carousel-inner  imagechangetwo2image" data-imagechangetwoimage="#imagechangetwo1new"></object>
                    </div>


                    <div style="width:33.3%"  class="carousel-inner brchg imagepicker " data-imagetwo="#image33new">
                        <h6 style="text-align:center;">Elegant</h6>
                      
                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/three3(2).png')}}" data-original2="{{asset('assets/img/three3(2).png')}}" data-default2="{{asset('assets/img/threedef2.png')}}" width="80" height="80" class="carousel-inner imagechangetwo2image" data-imagechangetwoimage="#imagechangetwo2new"  ></object>

                    </div>
                </div>
                </div>
            </div>
        </div>
        
        
        
        
       
        <!--old-->
<!--        <div style="display:contents;" id="image44new" class="col-sm-12 image-contentnew row  ">-->
              <!--four tab 1-->
<!--              <div style="margin-top:-28px;padding:0px" class="imagecontentfour" id="imagecontentfour1new">-->
<!--            <div class="d-flex flex-wrap ">-->
<!--            <div style="padding:0px;width:50%" >-->
<!--                <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
<!--            </div>-->
<!--            <div style="padding:0px;width:50%">-->
<!--                <input name="file1" type="file" class="dropify" data-height="120" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
<!--            </div>-->
<!--            <div style="width:50%;padding:0px;margin-top:-41px;">-->
<!--                <input name="file1" type="file" class="dropify" data-height="120" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
<!--            </div>-->
<!--            <div style="width:50%;padding:0px;margin-top:0px;">-->
<!--                <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />-->
                <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
<!--            </div>-->
            
<!--            </div>-->
<!--            </div>-->
              <!--four tab 1-->
            
            <!--four tab 2-->
<!--             <div style="margin-top:-38px;padding:0px" class="imagecontentfour" id="imagecontentfour2">-->
<!--               <div style="padding:10px;" class="col-sm-12 ">-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
<!--                            <div class="row">-->
<!--                                <div style="padding:0px;" class="col-sm-8">-->
<!--                <input name="file1" type="file" class="dropify" data-height="175" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />-->
<!--                                </div>-->
<!--                                 <div style="padding:0px;" class="col-sm-4">-->
<!--                                    <div class="col-sm-12">-->
<!--                                            <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />-->
<!--                                    </div>-->
<!--                                     <div class="col-sm-12">-->
<!--                                              <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />-->
<!--                                     </div>-->
<!--                                      <div class="col-sm-12">-->
<!--                                              <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />-->
<!--                                     </div>-->
            
<!--                                </div>-->
<!--                            </div>-->
<!--                </div>-->
<!--                 </div>-->
              <!--four tab 2-->
            
            
            
            
            
  <!--            <hr style="width: 131px;-->
  <!--margin: auto;margin-top:20px;">-->
  
  <!--add upp-->
<!--   <div style="padding:0px 2.75rem;">-->
<!--   <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-5 ">-->

<!--        <div style="width:-webkit-fill-available;" class="">-->
<!--            <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">-->
<!--                <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">All User</button>-->
<!--                <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">Standart</button>-->
<!--                <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Premium</button>-->
<!--                <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Vip</button>-->
                <!--<button type="button" class="btn btn-label-secondary  btn btn-outline-secondary"> <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i></button>-->
<!--            </div>-->
<!--        </div>-->





<!--        <div style="margin-left:10px;" class="d-flex justify-content-center align-items-center btn btn-outline-secondary">-->
<!--            <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
  <!--add upp-->
  
<!--<hr style="width: 131px;-->
<!--  margin: auto;margin-top:20px;">-->
  
<!--             <div style="padding:0px 2.75rem;">-->
<!--              <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">-->

                    <!--<h6 style="text-align:center;">None</h6>     -->
                    <!--<div style="width:33.3%" class="carousel-inner brchg imagepicker " >-->
                    <!--    <h6 style="text-align:center;">None</h6>-->
                        <!--<div style="background-image:url('{{asset('assets/img/thanks1.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;" class="imagepicker" data-imagetwo="#image11new">-->

                        <!--</div>-->
                    <!--     <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks1.png')}}" data-original3="{{asset('assets/img/thanks1.png')}}" data-default3="{{asset('assets/img/nonedef.png')}}" width="80" height="80" class="carousel-inner imagechangefour" ></object>-->

                    <!--</div>-->
                    <!--<div style="background-image:url('{{asset('assets/img/thanks1.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image11new">-->

                    <!--</div>-->



<!--                    <div style="width:33.3%" class="carousel-inner brchg imagepicker" >-->
<!--                        <h6 style="text-align:center;">Modern</h6>-->
                       
<!--                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4.png')}}" data-original3="{{asset('assets/img/four4.png')}}" data-default3="{{asset('assets/img/-->
<!--fourdef2.png')}}" width="80" height="80" class="carousel-inner imagechangefour" data-contentfour2new="#imagecontentfour1new"></object>-->
<!--                    </div>-->


                  
<!--                    <div style="width:33.3%"  class="carousel-inner  brchg imagepicker" >-->
<!--                        <h6 style="text-align:center;">Elegant</h6>-->
                       
<!--                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4(4).png')}}" data-original3="{{asset('assets/img/four4(4).png')}}" data-default3="{{asset('assets/img/-->
<!--fourdef1.png')}}" width="80" height="80" class="carousel-inner imagechangefour"  data-contentfour2new="#imagecontentfour2"></object>-->

<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
            
            
<!--        </div>-->
<!--old-->
<!--abhiaaya-->
 <div style="display:contents;" id="image44new" class="col-sm-12 image-contentnew row  ">
                  <!--four tab 1-->
                  <div style="margin-top:-28px;padding:0px" class="imagecontentfournew" id="imagecontentfour1new">
                <div class="d-flex flex-wrap ">
                <div style="padding:0px;width:50%" class="">
                    <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                <div style="padding:0px;width:50%" class="">
                    <input name="file1" type="file" class="dropify" data-height="120" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                <div style="width:50%;padding:0px;margin-top:-41px;" class="">
                    <input name="file1" type="file" class="dropify" data-height="120" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                <div style="width:50%;padding:0px;margin-top:0px;" class="">
                    <input name="file1" type="file" class="dropify" data-height="80" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                    <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                    <!--</div>-->
                </div>
                
                </div>
                </div>
                  <!--four tab 1-->
                
                <!--four tab 2-->
                 <div style="margin-top:-38px;padding:0px" class="imagecontentfournew" id="imagecontentfour2new">
                   <div style="padding:10px;" class="col-sm-12 ">
                    <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                                <div class="row">
                                    <div style="padding:0px;" class="col-sm-8 ">
                    <input name="file1" type="file" class="dropify" data-height="175" data-default-file="{{asset('assets/img/spiderman.jpg')}}" />
                                    </div>
                                     <div style="padding:0px;" class="col-sm-4 ">
                                        <div class="col-sm-12 ">
                                                <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                                        </div>
                                         <div class="col-sm-12 ">
                                                  <input name="file1" type="file" class="dropify" data-height="50" data-default-file="{{asset('assets/img/spidercurve.jpg')}}" />
                                         </div>
                                          <div class="col-sm-12 ">
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
                             <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4.png')}}" data-original3="{{asset('assets/img/four4.png')}}" data-default3="{{asset('assets/img/fourdef2.png')}}" width="80" height="80" class="carousel-inner imagechangefourclass" data-contentfour2new="#imagecontentfour1new"></object>
                        </div>
    
    
                        <!--<h6 style="text-align:center;">Elegant</h6>-->
                        <div style="width:33.3%"  class="carousel-inner brchg imagepicker " >
                            <h6 style="text-align:center;">Elegant</h6>
                            <!--<div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;border:2px solid #80e492;" class="carousel-inner brchg imagepicker tabbactiveclick" data-imagetwo="#image33">-->
                            <!--</div>-->
                             <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4(4).png')}}" data-original3="{{asset('assets/img/four4(4).png')}}" data-default3="{{asset('assets/img/fourdef1.png')}}" width="80" height="80" class="carousel-inner imagechangefourclass"  data-contentfour2new="#imagecontentfour2new"></object>
    
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
             <button type="button" class="btn btn-label-secondary btn btn-outline-secondary imagehaiyeh  active"  data-imagetabs="#image11new">1 Image</button>
            <button type="button" class="btn btn-label-secondary btn btn-outline-secondary imagehaiyeh "  data-imagetabs="#image22new">2 Image</button>
            <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary imagehaiyeh  " data-imagetabs="#image33new">3 Image</button>
            <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary imagehaiyeh "  data-imagetabs="#image44new">+4 Image</button>

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
  <!--share image-->
<div  id="shahrevideo" class="share-content">
    
      
<!-- Main container -->
<div style="margin-top:-38px;" id="video11" class="video-content1">

  <!-- File input and button -->
  <input type="file" hidden id="videoupl">
  

  <!-- Video player -->
  <div style="height: 310px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat; position: relative;" class="carousel-inner videoclass">
    <video controls class="videoclass videohoverclass">
      <source src="{{asset('assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
    </video>
  
   <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
  </div>

  <!-- Additional controls -->
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
</div>

        
        
           <div style="margin-top:-28px;"  id="video22" class="col-sm-12 video-content1 row  justify-content-center" >
            <!--2 image 1st tab-->
           <div style="margin-left:14px;padding:0px" class="row video-changecontent" id="videochangeone1" >
            <div style="padding: 0px 0px 0px 0px;" class="col-sm-6 " >
                <!--<input name="file1" type="file" class="dropify" data-height="350" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                  <div style="height: 150px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                      
                      
                       <input type="file" hidden id="videoupl2one">
  
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass2one videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover2one" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl2one" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
    </div>
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->

            </div>
            <div style="padding: 0px 0px 0px 0px;"  class="col-sm-6">
                  <div style="height: 150px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                        <input type="file" hidden id="videoupl2two">
  
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass2two videohoverclass">
              <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
        
        <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover2two" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl2two" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
        
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="350" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
         </div>
          <!--2 image 1st tab-->
         <!--2 image second tab-->
          <div  style="margin-left:14px;padding:0px" class="row video-changecontent" id="videochangeone2" >
            
            <div  style="padding: 0px 0px 0px 0px;" class="col-sm-12">
                  <div style="height: 315px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                      
                          <input type="file" hidden id="videoupl22one">
  
  
        <video style="position:relative;" controls="" class="videoclass22one videohoverclass">
            <source src="{{asset('assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
        </video>
          <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover2twoone" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl22one" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
        
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
              <div style="padding:0px"  class="col-sm-12">
                    <div style="height: 315px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                        
                            <input type="file" hidden id="videoupl22two">
  
        <video style="position:relative;" controls="" class="videoclass22two videohoverclass">
            <source src="{{asset('assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover2twotwo" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl22two" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
        
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
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

<hr style="width: 131px;
  margin: auto;margin-top:20px;">
            <!--<div class="d-flex justify-content-around align-items-center">-->
            <!--     <h6 style="text-align:center;">None</h6>     -->
            <!--      <h6 style="text-align:center;">Modern</h6>     -->
            <!--  <h6 style="text-align:start;">Elegant</h6>     -->

            <!--</div> -->
 <div style="padding:0px 2.75rem;">
            <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">

                <div style="width:33.3%"  class="carousel-inner " >
                    <h6 style="text-align:center;">Modern</h6>
                    <!--<div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;border:2px solid #80e492;" class="carousel-inner brchg imagepicker tabbactiveclick" data-imagetwo="#image22new">-->
                    <!--</div>-->
                      <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks3.png')}}" data-original="{{asset('assets/img/thanks3.png')}}" data-default="{{asset('assets/img/colorimage.PNG')}}" width="80" height="80" class="carousel-inner  videochangeclass" data-videochange="#videochangeone1"></object>

                </div>


                <!--<h6 style="text-align:center;">Elegant</h6>-->
                <div style="width:33.3%" class="carousel-inner  " >
                    <h6 style="text-align:center;">Elegant</h6>
                    <!--<div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;" class="carousel-inner brchg imagepicker" data-imagetwo="#image33new">-->
                    <!--</div>-->
                     <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks2.png')}}" data-original="{{asset('assets/img/thanks2.png')}}" data-default="{{asset('assets/img/thanks2 (1).png')}}" width="80" height="80" class="carousel-inner   videochangeclass"  data-videochange="#videochangeone2"></object>

                </div>
            </div>
            </div>
        </div>
        <!--video 2-->
               <div style="display:contents;" id="video33" class="col-sm-12 video-content1 row  ">
                       
                        <!--3 image 1st tab-->
                        <div style="padding:0px;" class="video-container">
                 <div style="margin-top:-40px;padding:0px;" class="col-sm-12 video-changecontent2" id="videochangetwo1">
                        <div  class="col-sm-12 ">
                             <div style="height: 315px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                                 
                                    <input type="file" hidden id="videoupl31one">
 
                                 
        <video style="position:relative;" controls="" class="videoclass31one videohoverclass">
            <source src="{{asset('/assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover3onetwo" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl31one" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                </div>
            
            <div class="row">
               <div style="padding:0px;" class="col-sm-6 ">
                <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                 <div style=" width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                        <input type="file" hidden id="videoupl31two">
  
        <video style="position:relative;" controls="" class="videoclass31two videohoverclass">
            <source src="{{asset('/assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
        </video>
        
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;height:95%;" id="videohover3oneone" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl31two" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
        
    </div>
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            <div style="padding:0px;" class="col-sm-6 ">
                
                 <div style="width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                           <input type="file" hidden id="videoupl31three">
 
        <video style="position:relative;" controls="" class="videoclass videoclass31three videohoverclass" >
            <source src="{{asset('/assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">
        </video>
          <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;height:95%;" id="videohover3onethree" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl31three" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            </div>
            </div>
            </div>
              <!--3 image 1st tab-->
              
              
                <!--3 image 2nd tab-->
                
                    <div style="padding:0px;margin-top:-40px" class="col-sm-12 video-changecontent2" id="videochangetwo2">
                        <div style="padding:0px;" class="col-sm-12 ">
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                            <div class="row">
                                <div style="padding: 0px 0px 0px 0px;" class="col-sm-8">
                                     <div style="height: 200px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                                            <input type="file" hidden id="videoupl32one">
 
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass32one videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
          <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover3twoone" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl32one" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="200" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                                </div>
                                 <div style="padding: 0px;" class="col-sm-4">
                                    <div class="col-sm-12">
                                         <div style="height: 100px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                                              <input type="file" hidden id="videoupl32two">

         <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass32two videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover3twotwo" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl32two" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                                            <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                                    </div>
                                     <div class="col-sm-12">
                                          <div style="height: 100px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                                               <input type="file" hidden id="videoupl32three">
  
        <video style="height:-webkit-fill-available;width:-webkit-fill-available" controls="" class="videoclass videoclass32three videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover3twothree" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl32three" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                                              <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                                     </div>
            
                                </div>
                            </div>
                </div>
          
            </div>
                     <!--3 image 2nd tab-->
                      <div style="padding:0px 2.75rem;">
               <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-3">

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
                <!--  <div style="background-image:url('{{asset('assets/img/thanks1.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image11new">-->
                <!--  </div>-->



                <!--<h6 style="text-align:center;">Modern</h6>-->
                <!--     <div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image22new">-->
                <!--  </div>-->



                <!--<h6 style="text-align:center;">Elegant</h6>-->
                <!--   <div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner brchg imagepicker" data-imagetwo="#image33new">-->
                <!--  </div>-->

                <!--</div>-->
                <hr style="width: 131px;
  margin: auto;margin-top:20px;">

                <!--<div class="d-flex justify-content-around align-items-center">-->
                <!--     <h6 style="text-align:center;">None</h6>     -->
                <!--      <h6 style="text-align:center;">Modern</h6>     -->
                <!--  <h6 style="text-align:start;">Elegant</h6>     -->

                <!--</div> -->
 <div style="padding:0px 2.75rem;">
                <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">

                    <div style="width:33.3%" class="carousel-inner brchg imagepicker " data-imagetwo="#image22new">
                        <h6 style="text-align:center;">Modern</h6>
                        <!--<div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;" class="carousel-inner brchg imagepicker" data-imagetwo="#image22new">-->
                        <!--</div>-->
                         <!--<object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks3.png')}}" width="80" height="80" class="carousel-inner brchg imagepicker imagechange" data-imagetwo="#image22new"></object>-->
                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/three3.png')}}"  data-original2="{{asset('assets/img/three3.png')}}"  data-default2="{{asset('assets/img/threedef1.png')}}" width="80" height="80" class="carousel-inner  videochangetwo2" data-videochangetwo="#videochangetwo1"></object>
                    </div>


                    <!--<h6 style="text-align:center;">Elegant</h6>-->
                    <div style="width:33.3%"  class="carousel-inner brchg imagepicker " data-imagetwo="#image33new">
                        <h6 style="text-align:center;">Elegant</h6>
                        <!--<div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;border:2px solid #80e492;" class="carousel-inner brchg imagepicker tabbactiveclick" data-imagetwo="#image33new">-->
                        <!--</div>-->
                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/three3(2).png')}}" data-original2="{{asset('assets/img/three3(2).png')}}" data-default2="{{asset('assets/img/threedef2.png')}}" width="80" height="80" class="carousel-inner videochangetwo2" data-videochangetwo="#videochangetwo2"  ></object>

                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--video 3-->
        
        <!--video 4-->
        
          <div style="margin-top:-28px;" id="video44" class="col-sm-12 video-content1 row  ">
              <!--four tab 1-->
              <div style="margin-left:13px;padding:0px" class="videocontentfour" id="videocontentfour1">
            <div class="d-flex flex-wrap ">
            <div style="padding:0px;width:50%" >
                  <div style="height: 90px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                      
                        <input type="file" hidden id="videoupl41one">
 
                      
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass41one videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
          <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover4oneone" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl41one" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            <div style="padding:0px;width:50%">
                  <div style="height: 150px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                        <input type="file" hidden id="videoupl41two">
 
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass41two videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
          <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover4onetwo" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl41two" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="150" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            <div style="width:50%;padding:0px;margin-top:-60px;">
                  <div style="height: 150px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                       <input type="file" hidden id="videoupl41three">
  
       <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass41three videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
            <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover4onethree" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl41three" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="150" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            <div style="width:50%;padding:0px;">
                  <div style="height: 90px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                       <input type="file" hidden id="videoupl41four">
  
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass41four videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
            <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover4onefour" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl41four" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                <!--<div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                <!--</div>-->
            </div>
            
            </div>
            </div>
              <!--four tab 1-->
            
            <!--four tab 2-->
             <div class="videocontentfour" id="videocontentfour2">
               <div style="padding:0px;margin-left:14px;" class="col-sm-12 ">
                <!-- <div  style="background-image:url('{{asset('assets/img/jamunda.png')}}');height: 250px; width: 100%; background-size: 100% 100%;background-repeat: no-repeat;" class="carousel-inner">-->
                            <div class="row">
                                <div style="padding: 0px 0px 0px 0px;"  class="col-sm-8">
                                      <div style="height: 300px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">
                                          <input type="file" hidden id="videoupl42one">
 
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass42one videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover42one" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl42one" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                <!--<input name="file1" type="file" class="dropify" data-height="300" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                                </div>
                                 <div style="padding: 0px 0px 0px 0px;"  class="col-sm-4">
                                    <div style="padding: 0px 0px 0px 0px;"  class="col-sm-12">
                                          <div style="height: 100px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat" class="carousel-inner">
                                                <input type="file" hidden id="videoupl42two">
 
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass42two videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover42two" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl42two" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                                            <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                                    </div>
                                     <div style="padding: 0px 0px 0px 0px;"  class="col-sm-12">
                                           <div style="height: 100px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat" class="carousel-inner">
                                                  <input type="file" hidden id="videoupl42three">
  
        <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass42three videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover42three" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl42three" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                                              <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
                                     </div>
                                      <div style="padding: 0px 0px 0px 0px;"  class="col-sm-12">
                                            <div style="height: 100px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat" class="carousel-inner">
                                                   <input type="file" hidden id="videoupl42four">
 
       <video style="height:-webkit-fill-available;width:-webkit-fill-available;position:relative;" controls="" class="videoclass videoclass42four videohoverclass">
            <source src="{{asset('assets/img/straight.mp4')}}">
        </video>
           <!--c-->
         <div style="background: #0000006e;color: white;position:absolute;top:0;display: flex;align-items: center;justify-content: center;height:100%;width:100%;text-align:center;visibility:hidden;" id="videohover42four" class="videohover">
       <a style="top:5px;padding:8px;" href="javascript:void(0)" class="btn btn-primary text-nowrap upload-btn">
    <label for="videoupl42four" class="">Remove
      <!--<i class="fa fa-upload"></i>-->
    </label>
  </a>
        <p>Drag and drop or click to replace</p>
    </div>
        
        <!--c-->
    </div>
                                              <!--<input name="file1" type="file" class="dropify" data-height="100" data-default-file="{{asset('assets/img/hand.png')}}" />-->
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
   <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-3 ">

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
  <!--add upp-->
  
<hr style="width: 131px;
  margin: auto;margin-top:20px;">
  
             <div style="padding:0px 2.75rem;">
              <div style="margin-left:5px;margin-top:20px;" class="row pick-content d-flex justify-content-around">

                   
                    <div style="width:33.3%" class="carousel-inner brchg imagepicker " >
                        <h6 style="text-align:center;">Modern</h6>
                        <!--<div style="background-image:url('{{asset('assets/img/thanks3.png')}}');height: 80px; width: 80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;" class="carousel-inner brchg imagepicker" data-imagetwo="#image22new">-->
                        <!--</div>-->
                         <!--<object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/thanks3.png')}}" width="80" height="80" class="carousel-inner brchg imagepicker imagechange" data-imagetwo="#image22new"></object>-->
                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4.png')}}" data-original3="{{asset('assets/img/four4.png')}}" data-default3="{{asset('assets/img/
fourdef2.png')}}" width="80" height="80" class="carousel-inner videochangefour" data-contentfour2="#videocontentfour1"></object>
                    </div>


                    <!--<h6 style="text-align:center;">Elegant</h6>-->
                    <div style="width:33.3%"  class="carousel-inner brchg imagepicker " >
                        <h6 style="text-align:center;">Elegant</h6>
                        <!--<div style="background-image:url('{{asset('assets/img/dashes.png')}}');height: 80px; width:  80px; background-size: 100% 100%;background-repeat: no-repeat;margin:auto;border:2px solid #80e492;" class="carousel-inner brchg imagepicker tabbactiveclick" data-imagetwo="#image33new">-->
                        <!--</div>-->
                         <object style="height:80px;width:80px;margin:auto;display:flex;" data="{{asset('assets/img/four4(4).png')}}" data-original3="{{asset('assets/img/four4(4).png')}}" data-default3="{{asset('assets/img/
fourdef1.png')}}" width="80" height="80" class="carousel-inner videochangefour"  data-contentfour2="#videocontentfour2"></object>

                    </div>
                </div>
            
            </div>
            
            
        </div>
          <!--video 4-->
        
        

    <!--<div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-2 ">-->

    <!--    <div style="width:-webkit-fill-available;" class="">-->
    <!--        <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">-->
    <!--            <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">All User</button>-->
    <!--            <button type="button" class="btn btn-label-secondary btn btn-outline-secondary">Standart</button>-->
    <!--            <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Premium</button>-->
    <!--            <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary">Vip</button>-->
                <!--<button type="button" class="btn btn-label-secondary  btn btn-outline-secondary"> <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i></button>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div style="margin-left:10px;" class="d-flex justify-content-center align-items-center btn btn-outline-secondary">-->
    <!--        <i class="fa fa-send-o" style="font-size:20px;color:#59d068"></i>-->
    <!--    </div>-->
    <!--</div>-->

    <hr style="width: 131px;
  margin: auto;margin-top:20px;">
   <div style="padding:0px 2.75rem;">
    <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex mt-3  ">
        <input style="height: 90px;" type="text" class="form-control w-100" placeholder="Enter The description">
    </div>
   
  <!--  <hr style="width: 131px;-->
  <!--margin: auto;margin-top:20px;">-->
    <!--<div style="height: 250px; width: 100%; background-size: 100% 100%; background-repeat: no-repeat;" class="carousel-inner">-->
    <!--    <video controls="" class="videoclass">-->
    <!--        <source src="{{asset('/assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4')}}">-->
    <!--    </video>-->
    <!--</div>-->
    <!--add code-->
  <hr style="width: 131px;
  margin: auto;margin-top:20px;">
   <div >
   <div style="width:-webkit-fill-available;" class="mt-3 clickhere ">
        <div style="width:-webkit-fill-available;" class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-label-secondary btn btn-outline-secondary videoa videopicker active" data-videoone="#video1" data-videotwo="#video11">1 Video</button>
            <button type="button" class="btn btn-label-secondary btn btn-outline-secondary videoa videopicker" data-videoone="#video2" data-videotwo="#video22">2 Video</button>
            <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary videoa videopicker " data-videoone="#video3" data-videotwo="#video33">3 Video</button>
            <button type="button" class="btn btn-label-secondary  btn btn-outline-secondary videoa videopicker" data-videoone="#video4" data-videotwo="#video44">+4 Video</button>

        </div>
    </div>
    </div>
 </div>
<!--add code-->

</div>






<hr style="width: 131px;
  margin: auto;margin-top:20px">


 <div style="padding:0px 2.75rem;">

<div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
    <div style="width:100%;padding:10px;" class="btn-group ary" role="group" aria-label="First group">
        <button type="button" class="btn btn-outline-secondary geo ary active" data-sharetext="#shahretext">Share Text</button>
        <button type="button" class="btn btn-outline-secondary geo shareimage ary" data-sharetext="#shahreimage">Share Image</button>
        <button type="button" class="btn btn-outline-secondary geo ary" data-sharetext="#shahrevideo">Share Video</button>

    </div>


</div>
</div>