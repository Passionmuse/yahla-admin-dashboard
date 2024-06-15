"use strict";/*!lightbox.js | Friendkit | © Css Ninja. 2019-2020*/$((function () {
    if ($("[data-fancybox]").length) {
        var
            n = feather.icons["more-vertical"].toSvg(), s = feather.icons["thumbs-up"].toSvg(), a = feather.icons.lock.toSvg(), i = feather.icons.user.toSvg(), e = feather.icons.users.toSvg(), d = feather.icons.globe.toSvg(), t = feather.icons.heart.toSvg(), c = feather.icons.smile.toSvg(), o = feather.icons["message-circle"].toSvg(), l = `
<div class="header d-flex justify-content-between">
<div class="d-flex">
     <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="" />
    <div class="user-meta">
         <span>Dan Walker</span> <span><small>2 hours ago</small></span>
    </div>
     </div>
    <div class="dropdown is-spaced is-right dropdown-trigger toggle">
        
        <div>
            
            <div class="button"> `+ n + `</div>
            
        </div>
        
        <div class="dropdown-menu" role="menu" style="left:-268px;">
            
            <div class="dropdown-content">
                
                <div class="dropdown-item is-title has-text-left"> Who can see this ?</div>
                
                <a href="#" class="dropdown-item">
                    
                    <div class="media">
                         `+ d + `
                        <div class="media-content">
                            
                            <h3>Public</h3>
                             <small>Anyone can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ e + `
                        <div class="media-content">
                            
                            <h3>Friends</h3>
                             <small>only friends can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ i + `
                        <div class="media-content">
                            
                            <h3>Specific friends</h3>
                             <small>Don\'t show it to some friends.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <hr class="dropdown-divider" />
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ a + `
                        <div class="media-content">
                            
                            <h3>Only me</h3>
                             <small>Only me can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
            </div>
            
        </div>
        
    </div>
    
</div>


    
   
        
      
        <div class="social-count ml-auto">
            
           
            
        </div>
        
    </div>
    
    <div style="padding:10px;" class="actions">
        
        <div class="action"> `+ s + ` <span>Like</span></div>
        
        <div class="action"> `+ o + ` <span>Comment</span></div>
        
    </div>
    
</div>

<div class="comments-list has-slimscroll">
    
    <div class="media is-comment com_container">
           <div class="comment-lineone"></div>
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt="" data-user-popover="1" /></p>
            
        </figure>
        
        <div class="media-content pb-0">
            <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
                <div class="username">Dan Walker</div>
                <span>28m</span>
            </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
        </div>

        
    </div>
    <div class="text-end mx-0 px-3 w-100 my-2" style="background-color:#f5f6f7; letter-spacing:-5px;">
        <span style="background:white;padding:1px; border-radius:50%; ">😂</span>
        <span style="background:white;padding:1px; border-radius:50%;">😣</span>
        <span style="background:white;padding:1px; border-radius:50%;">😳</span>
    </div>
    
    <div class="media is-comment is-nested com_container">
          <div class="arrow-line"></div>
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="" data-user-popover="4" /></p>
            
        </figure>
        
        <div class="media-content pb-0">
            
        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
        <div class="username">David Kim</div>
        <span>26m</span>
    </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            
            
        </div>
        
    </div>
    <div class="text-end mx-0 px-3 w-100 my-2" style="background-color:#f5f6f7; letter-spacing:-5px;">
        <span style="background:white;padding:1px; border-radius:50%; ">😂</span>
        <span style="background:white;padding:1px; border-radius:50%;">😣</span>
        <span style="background:white;padding:1px; border-radius:50%;">😳</span>

    </div>
    <style>
    .com_container{
        position:relative;
    }
    .comment-line{
        position:absolute;
        height:362%;
        border-left:2px solid black;
        top:10%;
        left:5%;
        width:15%;
        border-radius:10px;
    }
    .comment-lineone{
        position:absolute;
        height:153%;
        border-left:2px solid black;
        top:10%;
        left:5%;
        width:15%;
        border-radius:10px;
    }
    .arrow-line{
         position: absolute;
    height: 40px;
    border-left: 2px solid black;
    top: -20%;
    left: 5%;
    width: 10%;
    border-bottom: 2px solid black;
    border-radius: 0px 0px 0px 10px;
    }
    .fancybox-custom-layout .fancybox-caption .comments-list .is-comment.is-nested{
        padding-left:40px !important;
        margin-left:0px !important;
    }
    </style>
    
   
   
    <div class="media is-comment com_container">
        <div class="comment-line"></div>
        <figure class="media-left ">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" alt="" data-user-popover="17" /></p>
            
        </figure>
        
        <div class="media-content pb-0">
            
        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
        <div class="username">Rolf Krupp</div>
        <span>36m</span>
    </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing elit. Proin ornare magna eros.</p>
            
           
            
        </div>
        
    </div>
    <div class="text-end mx-0 px-3 w-100 my-2" style="background-color:#f5f6f7; letter-spacing:-5px;">
        <span style="background:white;padding:1px; border-radius:50%; ">😂</span>
        <span style="background:white;padding:1px; border-radius:50%;">😣</span>
        <span style="background:white;padding:1px; border-radius:50%;">😳</span>

    </div>
    
    <div class="media is-comment is-nested com_container ">
        <div class="arrow-line"></div>
        <figure class="media-left ">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" data-user-popover="6" /></p>
            
        </figure>
        
        <div class="media-content pb-0">
            
        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
        <div class="username">Elise Walker</div>
        <span>32m</span>
    </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
           
            
        </div>
        
    </div>
    <div class="text-end mx-0 px-3 w-100 my-2" style="background-color:#f5f6f7; letter-spacing:-5px;">
        <span style="background:white;padding:1px; border-radius:50%; ">😂</span>
        <span style="background:white;padding:1px; border-radius:50%;">😣</span>
        <span style="background:white;padding:1px; border-radius:50%;">😳</span>

    </div>
    
    <div class="media is-comment is-nested com_container">
          <div class="arrow-line"></div>
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" alt="" data-user-popover="17" /></p>
            
        </figure>
        
        <div class="media-content pb-0">
            
        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
        <div class="username">Rolf Krupp</div>
        <span>24m</span>
    </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            
        </div>
        
    </div>
    <div class="text-end mx-0 px-3 w-100 my-2" style="background-color:#f5f6f7; letter-spacing:-5px;">
        <span style="background:white;padding:1px; border-radius:50%; ">😂</span>
        <span style="background:white;padding:1px; border-radius:50%;">😣</span>
        <span style="background:white;padding:1px; border-radius:50%;">😳</span>

    </div>
    
    <div class="media is-comment is-nested com_container">
          <div class="arrow-line"></div>
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" data-user-popover="6" /></p>
            
        </figure>
        
        <div class="media-content pb-0">
            
        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
        <div class="username">Elise Walker</div>
        <span>40m</span>
    </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
           
            
        </div>
        
    </div>
    <div class="text-end mx-0 px-3 w-100 my-2" style="background-color:#f5f6f7; letter-spacing:-5px;">
        <span style="background:white;padding:1px; border-radius:50%; ">😂</span>
        <span style="background:white;padding:1px; border-radius:50%;">😣</span>
        <span style="background:white;padding:1px; border-radius:50%;">😳</span>

    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" alt="" data-user-popover="14" /></p>
            
        </figure>
        
        <div class="media-content pb-0">
        <div class="d-flex justify-content-between comment-actions mb-2" style="margin-top:-7px;">
        <div class="username">Lana Henrikssen</div>
        <span>28m</span>
    </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing elit.</p>
            
            
            
        </div>
        
    </div>
    
</div>
<div class="text-end mx-0 px-3 w-100 my-2" style="background-color:#f5f6f7; letter-spacing:-5px;">
        <span style="background:white;padding:1px; border-radius:50%; ">😂</span>
        <span style="background:white;padding:1px; border-radius:50%;">😣</span>
        <span style="background:white;padding:1px; border-radius:50%;">😳</span>

    </div>

<div class="comment-controls has-lightbox-emojis">
    
    <div class="controls-inner">
         <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
        <div class="control"> <textarea class="textarea is-rounded" rows="1"></textarea> <button class="emoji-button"> `+ c + `</button></div>
        
    </div>
    
</div>

<div class="header">
     <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" />
    <div class="user-meta">
         <span>Elise Walker</span> <span><small>2 days ago</small></span>
    </div>
     <button type="button" class="button">Follow</button>
    <div class="dropdown is-spaced is-right dropdown-trigger">
        
        <div>
            
            <div class="button"> `+ n + `</div>
            
        </div>
        
        <div class="dropdown-menu" role="menu">
            
            <div class="dropdown-content">
                
                <div class="dropdown-item is-title has-text-left"> Who can see this ?</div>
                
                <a href="#" class="dropdown-item">
                    
                    <div class="media">
                         `+ d + `
                        <div class="media-content">
                            
                            <h3>Public</h3>
                             <small>Anyone can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ e + `
                        <div class="media-content">
                            
                            <h3>Friends</h3>
                             <small>only friends can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ i + `
                        <div class="media-content">
                            
                            <h3>Specific friends</h3>
                             <small>Don\'t show it to some friends.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <hr class="dropdown-divider" />
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ a + `
                        <div class="media-content">
                            
                            <h3>Only me</h3>
                             <small>Only me can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="inner-content">
    
    <div class="live-stats">
        
        <div class="social-count">
            
            <div class="likes-count"> `+ t + ` <span>3</span></div>
            
            <div class="comments-count"> `+ o + ` <span>5</span></div>
            
        </div>
        
        <div class="social-count ml-auto">
            
            <div class="views-count">
                 <span>5</span> <span class="views"><small>comments</small></span>
            </div>
            
        </div>
        
    </div>
    
    <div class="actions">
        
        <div class="action"> `+ s + ` <span>Like</span></div>
        
        <div class="action"> `+ o + ` <span>Comment</span></div>
        
    </div>
    
</div>

<div class="comments-list has-slimscroll">
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/gaelle.jpeg" alt="" data-user-popover="11" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Gaelle Morris</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>2d</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" data-user-popover="6" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Elise Walker</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>4h</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" alt="" data-user-popover="13" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Rolf Krupp</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing elit.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>4h</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" data-user-popover="6" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Elise Walker</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>4h</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="" data-user-popover="7" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Nelly Schwartz</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>4h</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="comment-controls has-lightbox-emojis">
    
    <div class="controls-inner">
         <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
        <div class="control"> <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea> <button class="emoji-button"> `+ c + `</button></div>
        
    </div>
    
</div>
 ",m='
<div class="header">
     <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" />
    <div class="user-meta">
         <span>Stella Bergmann</span> <span><small>Yesterday</small></span>
    </div>
     <button type="button" class="button">Follow</button>
    <div class="dropdown is-spaced is-right dropdown-trigger">
        
        <div>
            
            <div class="button"> `+ n + `</div>
            
        </div>
        
        <div class="dropdown-menu" role="menu">
            
            <div class="dropdown-content">
                
                <div class="dropdown-item is-title has-text-left"> Who can see this ?</div>
                
                <a href="#" class="dropdown-item">
                    
                    <div class="media">
                         `+ d + `
                        <div class="media-content">
                            
                            <h3>Public</h3>
                             <small>Anyone can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ e + `
                        <div class="media-content">
                            
                            <h3>Friends</h3>
                             <small>only friends can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ i + `
                        <div class="media-content">
                            
                            <h3>Specific friends</h3>
                             <small>Don\'t show it to some friends.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <hr class="dropdown-divider" />
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ a + `
                        <div class="media-content">
                            
                            <h3>Only me</h3>
                             <small>Only me can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="inner-content">
    
    <div class="live-stats">
        
        <div class="social-count">
            
            <div class="likes-count"> `+ t + ` <span>33</span></div>
            
            <div class="comments-count"> `+ o + ` <span>9</span></div>
            
        </div>
        
        <div class="social-count ml-auto">
            
            <div class="views-count">
                 <span>9</span> <span class="views"><small>comments</small></span>
            </div>
            
        </div>
        
    </div>
    
    <div class="actions">
        
        <div class="action"> `+ s + ` <span>Like</span></div>
        
        <div class="action"> `+ o + ` <span>Comment</span></div>
        
    </div>
    
</div>

<div class="comments-list has-slimscroll">
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Jenna Davis</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>30m</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" alt="" data-user-popover="10" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Lana Henrikssen</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>15m</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="" data-user-popover="4" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">David Kim</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>12m</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" alt="" data-user-popover="16" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Mike Lasalle</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>8m</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" data-user-popover="2" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>1m</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="" data-user-popover="3" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Daniel Wellington</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>5h</span>
                <div class="likes-count"> `+ t + ` <span>3</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" alt="" data-user-popover="8" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Bobby Brown</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>7h</span>
                <div class="likes-count"> `+ t + ` <span>3</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" data-user-popover="2" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>7h</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment is-nested">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" alt="" data-user-popover="10" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Lana Henrikssen</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>15m</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="comment-controls has-lightbox-emojis">
    
    <div class="controls-inner">
         <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
        <div class="control"> <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea> <button class="emoji-button"> `+ c + `</button></div>
        
    </div>
    
</div>
 ",r='
<div class="header">
     <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
    <div class="user-meta">
         <span>Jenna Davis</span> <span><small>3 days ago</small></span>
    </div>
     <button type="button" class="button">Follow</button>
    <div class="dropdown is-spaced is-right dropdown-trigger">
        
        <div>
            
            <div class="button"> `+ n + `</div>
            
        </div>
        
        <div class="dropdown-menu" role="menu">
            
            <div class="dropdown-content">
                
                <div class="dropdown-item is-title has-text-left"> Who can see this ?</div>
                
                <a href="#" class="dropdown-item">
                    
                    <div class="media">
                         `+ d + `
                        <div class="media-content">
                            
                            <h3>Public</h3>
                             <small>Anyone can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ e + `
                        <div class="media-content">
                            
                            <h3>Friends</h3>
                             <small>only friends can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ i + `
                        <div class="media-content">
                            
                            <h3>Specific friends</h3>
                             <small>Don\'t show it to some friends.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <hr class="dropdown-divider" />
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ a + `
                        <div class="media-content">
                            
                            <h3>Only me</h3>
                             <small>Only me can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="inner-content">
    
    <div class="live-stats">
        
        <div class="social-count">
            
            <div class="likes-count"> `+ t + ` <span>32</span></div>
            
            <div class="comments-count"> `+ o + ` <span>5</span></div>
            
        </div>
        
        <div class="social-count ml-auto">
            
            <div class="views-count">
                 <span>5</span> <span class="views"><small>comments</small></span>
            </div>
            
        </div>
        
    </div>
    
    <div class="actions">
        
        <div class="action"> `+ s + ` <span>Like</span></div>
        
        <div class="action"> `+ o + ` <span>Comment</span></div>
        
    </div>
    
</div>

<div class="comments-list has-slimscroll">
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" alt="" data-user-popover="8" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Bobby Brown</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>1h</span>
                <div class="likes-count"> `+ t + ` <span>12</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="" data-user-popover="3" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Daniel Wellington</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>15m</span>
                <div class="likes-count"> `+ t + ` <span>2</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" alt="" data-user-popover="12" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Mike Lasalle</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>1d</span>
                <div class="likes-count"> `+ t + ` <span>3</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg" alt="" data-user-popover="10" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Lana Henrikssen</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>1d</span>
                <div class="likes-count"> `+ t + ` <span>3</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="" data-user-popover="9" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Nelly Schwartz</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>2d</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="comment-controls">
    
    <div class="controls-inner">
         <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
        <div class="control"> <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea> <button class="emoji-button"> `+ c + `</button></div>
        
    </div>
    
</div>
 ",p='
<div class="header">
     <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" />
    <div class="user-meta">
         <span>Elise Walker</span> <span><small>3 months ago</small></span>
    </div>
     <button type="button" class="button">Follow</button>
    <div class="dropdown is-spaced is-right dropdown-trigger">
        
        <div>
            
            <div class="button"> `+ n + `</div>
            
        </div>
        
        <div class="dropdown-menu" role="menu">
            
            <div class="dropdown-content">
                
                <div class="dropdown-item is-title has-text-left"> Who can see this ?</div>
                
                <a href="#" class="dropdown-item">
                    
                    <div class="media">
                         `+ d + `
                        <div class="media-content">
                            
                            <h3>Public</h3>
                             <small>Anyone can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ e + `
                        <div class="media-content">
                            
                            <h3>Friends</h3>
                             <small>only friends can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ i + `
                        <div class="media-content">
                            
                            <h3>Specific friends</h3>
                             <small>Don\'t show it to some friends.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <hr class="dropdown-divider" />
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ a + `
                        <div class="media-content">
                            
                            <h3>Only me</h3>
                             <small>Only me can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="inner-content">
    
    <div class="live-stats">
        
        <div class="social-count">
            
            <div class="likes-count"> `+ t + ` <span>3</span></div>
            
            <div class="comments-count"> `+ o + ` <span>3</span></div>
            
        </div>
        
        <div class="social-count ml-auto">
            
            <div class="views-count">
                 <span>3</span> <span class="views"><small>comments</small></span>
            </div>
            
        </div>
        
    </div>
    
    <div class="actions">
        
        <div class="action"> `+ s + ` <span>Like</span></div>
        
        <div class="action"> `+ o + ` <span>Comment</span></div>
        
    </div>
    
</div>

<div class="comments-list has-slimscroll">
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" data-user-popover="2" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>12h</span>
                <div class="likes-count"> `+ t + ` <span>2</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="" data-user-popover="9" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Nelly Schwartz</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>4h</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/bobby.jpg" alt="" data-user-popover="8" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Bobby Brown</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>4h</span>
                <div class="likes-count"> `+ t + ` <span>3</span></div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="comment-controls has-lightbox-emojis">
    
    <div class="controls-inner">
         <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
        <div class="control"> <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea> <button class="emoji-button"> `+ c + `</button></div>
        
    </div>
    
</div>
 ",u='
<div class="header">
     <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
    <div class="user-meta">
         <span>Jenna Davis</span> <span><small>oct 17 2018</small></span>
    </div>
     <button type="button" class="button">Follow</button>
    <div class="dropdown is-spaced is-right dropdown-trigger">
        
        <div>
            
            <div class="button"> `+ n + `</div>
            
        </div>
        
        <div class="dropdown-menu" role="menu">
            
            <div class="dropdown-content">
                
                <div class="dropdown-item is-title has-text-left"> Who can see this ?</div>
                
                <a href="#" class="dropdown-item">
                    
                    <div class="media">
                         `+ d + `
                        <div class="media-content">
                            
                            <h3>Public</h3>
                             <small>Anyone can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ e + `
                        <div class="media-content">
                            
                            <h3>Friends</h3>
                             <small>only friends can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ i + `
                        <div class="media-content">
                            
                            <h3>Specific friends</h3>
                             <small>Don\'t show it to some friends.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <hr class="dropdown-divider" />
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ a + `
                        <div class="media-content">
                            
                            <h3>Only me</h3>
                             <small>Only me can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="inner-content">
    
    <div class="live-stats">
        
        <div class="social-count">
            
            <div class="likes-count"> `+ t + ` <span>58</span></div>
            
            <div class="comments-count"> `+ o + ` <span>9</span></div>
            
        </div>
        
        <div class="social-count ml-auto">
            
            <div class="views-count">
                 <span>927</span> <span class="views"><small>comments</small></span>
            </div>
            
        </div>
        
    </div>
    
    <div class="actions">
        
        <div class="action"> `+ s + ` <span>Like</span></div>
        
        <div class="action"> `+ o + ` <span>Comment</span></div>
        
    </div>
    
</div>

<div class="comments-list has-slimscroll">
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="" data-user-popover="7" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Milly Augustine</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>1h</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="" data-user-popover="5" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Edward Mayers</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>30m</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" data-user-popover="6" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Elise Walker</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>15m</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" data-user-popover="2" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>1h</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" data-user-popover="0" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>30m</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg" alt="" data-user-popover="5" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Edward Mayers</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>1d</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png" alt="" data-user-popover="9" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Nelly Schwartz</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>2d</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>2d</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg" alt="" data-user-popover="6" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Elise Walker</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>2d</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="comment-controls has-lightbox-emojis">
    
    <div class="controls-inner">
         <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
        <div class="control"> <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea> <button class="emoji-button"> `+ c + `</button></div>
        
    </div>
    
</div>
 ",g='
<div class="header">
     <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" />
    <div class="user-meta">
         <span>Jenna Davis</span> <span><small>oct 17 2018</small></span>
    </div>
     <button type="button" class="button">Follow</button>
    <div class="dropdown is-spaced is-right dropdown-trigger">
        
        <div>
            
            <div class="button"> `+ n + `</div>
            
        </div>
        
        <div class="dropdown-menu" role="menu">
            
            <div class="dropdown-content">
                
                <div class="dropdown-item is-title has-text-left"> Who can see this ?</div>
                
                <a href="#" class="dropdown-item">
                    
                    <div class="media">
                         `+ d + `
                        <div class="media-content">
                            
                            <h3>Public</h3>
                             <small>Anyone can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ e + `
                        <div class="media-content">
                            
                            <h3>Friends</h3>
                             <small>only friends can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ i + `
                        <div class="media-content">
                            
                            <h3>Specific friends</h3>
                             <small>Don\'t show it to some friends.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
                <hr class="dropdown-divider" />
                
                <a class="dropdown-item">
                    
                    <div class="media">
                         `+ a + `
                        <div class="media-content">
                            
                            <h3>Only me</h3>
                             <small>Only me can see this publication.</small>
                        </div>
                        
                    </div>
                    
                </a>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="inner-content">
    
    <div class="live-stats">
        
        <div class="social-count">
            
            <div class="likes-count"> `+ t + ` <span>33</span></div>
            
            <div class="comments-count"> `+ o + ` <span>8</span></div>
            
        </div>
        
        <div class="social-count ml-auto">
            
            <div class="views-count">
                 <span>8</span> <span class="views"><small>comments</small></span>
            </div>
            
        </div>
        
    </div>
    
    <div class="actions">
        
        <div class="action"> `+ s + ` <span>Like</span></div>
        
        <div class="action"> `+ o + ` <span>Comment</span></div>
        
    </div>
    
</div>

<div class="comments-list has-slimscroll">
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg" alt="" data-user-popover="2" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>17d</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Jenna Davis</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>17d</span>
                <div class="likes-count"> `+ t + ` <span>4</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="" data-user-popover="4" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">David Kim</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>17d</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg" alt="" data-user-popover="7" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Milly Augustine</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>17d</span>
                <div class="likes-count"> `+ t + ` <span>5</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg" alt="" data-user-popover="3" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Daniel Wellington</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>17d</span>
                <div class="likes-count"> `+ t + ` <span>1</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg" alt="" data-user-popover="4" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">David Kim</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>18d</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png" alt="" data-user-popover="0" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Stella Bergmann</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>18d</span>
                <div class="likes-count"> `+ t + ` <span>8</span></div>
                
            </div>
            
        </div>
        
    </div>
    
    <div class="media is-comment">
        
        <figure class="media-left">
            
            <p class="image is-32x32"> <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" alt="" data-user-popover="12" /></p>
            
        </figure>
        
        <div class="media-content">
            
            <div class="username">Mike Lasalle</div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
            
            <div class="comment-actions">
                 <a href="javascript:void(0);" class="is-inverted">Like</a> <span>18d</span>
                <div class="likes-count"> `+ t + ` <span>0</span></div>
                
            </div>
            
        </div>
        
    </div>
    
</div>

<div class="comment-controls has-lightbox-emojis">
    

    
</div>
 `; $("[data-fancybox]").each((function () {
                if ("comments" == $(this).attr("data-lightbox-type")) {
                    var
                        n = $(this).attr("data-fancybox"); console.log(n), $(this).fancybox({
                            baseClass: "fancybox-custom-layout", keyboard: !1, infobar: !1, touch: { vertical: !1 }, buttons: ["close", "thumbs"], animationEffect: "fade", transitionEffect: "fade", preventCaptionOverlap: !1, idleTime: !1, gutter: 0, caption: function (s) {
                                return "post1" == n ? l : "post2" == n ? v : "post3" == n ? m : "profile-post1" == n ? r : "profile-post2" == n ? p : "profile-post3" == n ? u : "profile-post4" == n ? g : void
                                    0
                            }, afterShow: function (n, s) { initDropdowns(), initLightboxEmojis(), "development" === env && $(".fancybox-container [data-demo-src]").each((function () { var n = $(this).attr("data-demo-src"); $(this).attr("src", n) })) }
                        })
                }
            }))
    }
}));


$(document).on('click','.toggle',function(){
    $(this).addClass('is-active');    
})
