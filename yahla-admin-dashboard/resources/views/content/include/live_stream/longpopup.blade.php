<style>
    .single-chat-tab {
  /* width */
  ::-webkit-scrollbar {
    width: 10px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #E8E8E8;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #c4c5c6;
    border-radius: 8px;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #FF9797;
    border-radius: 8px;
  }
  .chat-header {
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    padding: 10px 0;
    .media {
      align-items: center;
      .user-dp {
        margin-right: 20px;
        img {
          width: 60px;
          height: 60px;
          border-radius: 50%;
        }
        span.user-online {
          width: 12px;
          height: 11px;
          background: #31B112 0% 0% no-repeat padding-box;
          border-radius: 50%;
          position: absolute;
          top: 0;
          right: 0;
        }
      }
      .media-body {
        h5 {
          font-size: 20px;
          font-family: Roboto;
          font-weight: 500;
          letter-spacing: 0;
          color: #E3025B;
          margin-bottom: 10px;
        }
      }
    }
  }
  .chat-body {
    padding: 30px 5px;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    height: 480px;
    overflow: auto;

    .message-content {
      max-width: 328px;
      width: 100%;
      margin-bottom: 15px;
      &.sender {
          text-align: right;
          align-self: flex-end;
        .msg-block {
          background-color: #c4c5c6;
          text-align: left;
        }
      }
      &.receiver {
        label {
          text-align: left;
        }
        .msg-block {
          background-color:white ;
          text-align: left;
        }
      }
      label {
        font-size: 14px;
        font-family: 'Fira Sans', sans-serif;
        font-weight: 400;
        letter-spacing: 0;
        color: #B5B5B5;
        margin-bottom: 5px;
      }
      .msg-block {
        padding: 15px 8px;
        border-radius: 5px;
        p{
          color: #fff;
          font-size: 15px;
          font-family: 'Fira Sans', sans-serif;
          font-weight: 400;
        }
      }
    }
  }
  .chat-footer {
    padding: 10px 0;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    input {
      border: none;
    }
    .btn {
      background: #FF9797;
      color: #fff;
      border-radius: 5px;
      i {
        font-size: 30px;
      }
    }
  }
}
.single-chat-tab
.chat-body {
    background:#f5f6f7;
}
.single-chat-tab
.chat-body
.message-content
.msg-block
p {
    color: #999;
    font-size: 15px;
    font-family: 'Fira Sans', sans-serif;
    font-weight: 400;
}
.single-chat-tab
.chat-body
.message-content
&.sender
.msg-block {
    background-color: #ffffff;
    text-align: left;
}
.single-chat-tab
.chat-body
.message-content
&.sender
.msg-block p{
  color: #999;
    font-size: 15px;
    font-family: 'Fira Sans', sans-serif;
    font-weight: 400;
    
}
.follow{
    line-height: 0;
    margin-left: auto;
    padding: 14px 18px;

}
.modal-header{
    margin-right:20px;
}
</style>

<div class="col-sm-12">
    <div class="row">
    <div class="col-sm-9">
         <div style="background-color:black;" class="post-image" data-bs-toggle="modal" data-bs-target="#requestView">
                              <a data-fancybox="post1" data-lightbox-type="comments">
                                <video style="width:100%;height:800px;" controls="" class="">
                                  <source src="https://dash.yekbun.net/assets/img/pexels-pressmaster-3195394-3840x2160-25fps_2.mp4">
                              </video>
                              </a>
                              <!-- Action buttons -->

                          </div>
    </div>
    
       <div class="col-sm-3">
           
         <div class="single-chat-tab">
            <div class="chat-header">
              <div class="media">
                 <img style="height:35px;border-radius:40px;" src="https://dash.yekbun.net/assets/img/avatars/13.png" data-demo-src="https://dash.yekbun.net/assets/img/avatars/13.png" data-user-popover="1" alt="">
                <div class="user-dp position-relative">
                  <span style="margin-top:0px;margin-left:4px;" class="user-online"></span>
                </div>
                <div class="media-body w-100 d-flex justify-content-between">
                    <div>
                  <h5 style="color: #6c6f73;margin:0;" >Saif Karim</h5>
                  <span>2 hours ago</span>
                   </div>
                   <div>
                 <!--<button type="button" class="button follow">Follow</button>-->
                 <i style="font-size:20px;padding-left:5px;padding-top:5px;" class="fa">&#xf142;</i>
               </div>
                </div>
          
          
       
              </div>
                 <!--two-->
              <!--<div style="margin-bottom:30px;" class="social d-flex justify-content-between">-->
              <!--        <div class="one">-->
                        
              <!--              <i style="background:white;" class="fa fa-heart"></i>-->
                            
              <!--            <label>12</label>-->
                         
              <!--                <i style="background:white;" class=" far fa-comment"></i>-->
              <!--                 <label>8</label>-->
              <!--        </div>-->
              <!--          <div class="two">-->
                         
              <!--            <label>8</label>-->
              <!--            <span>comments</span>-->
                         
              <!--        </div>-->
              <!--    </div>-->
            <!--two-->
            </div>
            
              <!--ss-->
            <!--<div style="margin-bottom:30px;" class="social">-->
            <!--          <div style="float:left;" class="one">-->
            <!--              <i class="fa fa-thumbs-up"></i>-->
            <!--              <a style="color:#ccc;" href="#">Like</a>-->
                         
            <!--          </div>-->
            <!--            <div style="float:right;" class="two">-->
            <!--              <i style="background:white;" class="far fa-comment"></i>-->
            <!--              <a style="color:#ccc;" href="#">comment</a>-->
            <!--          </div>-->
            <!--      </div>-->
            
            <!--ss-->
            <div style="height:688px;" class="chat-body">
              <div class="message-content receiver">
                <label for="">11:33 PM, Yesterday</label>
                <div style="background:white;" class="msg-block">
                  <p>
                    bibendum egestas augue.Duis sit amet ante feugiat enim viverra sagittis.
                  </p>
                  <div style="margin-bottom:30px;" class="social">
                      <div style="float:left;" class="one">
                          <a style="color:#ccc;" href="#">Like</a>
                          <label>28 m</label>
                      </div>
                        <div style="float:right;" class="two">
                          <i style="background:white;" class="fa fa-heart"></i>
                          <label>2</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="message-content sender">
                <label for="">11:33 PM, Yesterday</label>
                <div style="background:white;" class="msg-block">
                  <p>
                    bibendum egestas augue.Duis sit amet ante feugiat enim viverra sagittis.
                  </p>
                    <div style="margin-bottom:30px;" class="social">
                      <div style="float:left;" class="one">
                          <a style="color:#ccc;" href="#">Like</a>
                          <label>28 m</label>
                      </div>
                        <div style="float:right;" class="two">
                          <i style="background:white;" class="fa fa-heart"></i>
                          <label>2</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="message-content sender">
                <label for="">11:33 PM, Yesterday</label>
                <div style="background:white;" class="msg-block">
                  <p>
                    bibendum egestas augue.Duis sit amet ante feugiat enim viverra sagittis.
                  </p>
                    <div style="margin-bottom:30px;" class="social">
                      <div style="float:left;" class="one">
                          <a style="color:#ccc;" href="#">Like</a>
                          <label>28 m</label>
                      </div>
                        <div style="float:right;" class="two">
                          <i style="background:white;" class="fa fa-heart"></i>
                          <label>2</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="message-content sender">
                <label for="">11:33 PM, Yesterday</label>
                <div style="background:white;" class="msg-block">
                  <p>
                    bibendum egestas augue.Duis sit amet ante feugiat enim viverra sagittis.
                  </p>
                    <div style="margin-bottom:30px;" class="social">
                      <div style="float:left;" class="one">
                          <a style="color:#ccc;" href="#">Like</a>
                          <label>28 m</label>
                      </div>
                        <div style="float:right;" class="two">
                          <i style="background:white;" class="fa fa-heart"></i>
                          <label>2</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="message-content receiver">
                <label for="">11:33 PM, Yesterday</label>
                <div style="background:white;" class="msg-block">
                  <p>
                    bibendum egestas augue.Duis sit amet ante feugiat enim viverra sagittis.
                  </p>
                    <div style="margin-bottom:30px;" class="social">
                      <div style="float:left;" class="one">
                          <a style="color:#ccc;" href="#">Like</a>
                          <label>28 m</label>
                      </div>
                        <div style="float:right;" class="two">
                          <i style="background:white;" class="fa fa-heart"></i>
                          <label>2</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="message-content sender">
                <label for="">11:33 PM, Yesterday</label>
                <div style="background:white;" class="msg-block">
                  <p>
                    bibendum egestas augue.Duis sit amet ante feugiat enim viverra sagittis.
                  </p>
                    <div style="margin-bottom:30px;" class="social">
                      <div style="float:left;" class="one">
                          <a style="color:#ccc;" href="#">Like</a>
                          <label>28 m</label>
                      </div>
                        <div style="float:right;" class="two">
                          <i style="background:white;" class="fa fa-heart"></i>
                          <label>2</label>
                      </div>
                  </div>
                </div>
              </div>
            </div>
    <!--        <div class="chat-footer">-->
    <!--          <div class="input-group md-form form-sm form-2 pl-0">-->
                <!--<input class="form-control my-0 py-1 red-border" type="text" placeholder="Write a message...">-->
    <!--            <div class="input-group-append  w-100">-->
                  <!--<button class="btn input-group-text red lighten-3" id="basic-text1">-->
                  <!--  <i class="material-icons">send</i>-->
                  <!--</button>-->
    <!--             <form style="width:100%" method="post">-->
    <!--  <label id="mytextarea"></label>-->
    <!--</form>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
          </div>
    </div>
    </div>
</div>
</div>
@section('page-script')
<script>

tinymce.init({
  selector: "#mytextarea",
  plugins: "emoticons autoresize",
  toolbar: "emoticons",
  toolbar_location: "bottom",
  menubar: false,
  statusbar: false
});
</script>
@endsection
