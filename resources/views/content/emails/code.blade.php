<!DOCTYPE html>
<html>
<head>
    <title>YekBûn</title>
</head>
<body>
      <div style="width:100%; height:auto; box-sizing:border-box;text-align: center; background:#EAF0F3;" >
        <div style="display: inline-block;">
            <div class="image">
              {{-- <img src="{{$message->embed(asset('assets/img/logo.png'))}}"  style="width:auto; height:9vh;"> --}}
            </div>
            <div class="content" style="box-sizing:border-box; background:#fff; padding:60px; margin-left:10px; margin-right:10px;margin-bottom:10px;">
                <h1>Your Activation Code</h1>
                <p>Welcome "{{  $details['username'] }}"</p>
                <p style="display: inline-block; border: 1px dashed #3490EC; border-radius:13px; letter-spacing:14px;color: #3490EC;font-size: 28px;font-weight: 900;margin-bottom:0px;">{{  $details['code']  }}</p>
                <p>Code can be used one time only</p>
                <button style="background: #3490EC;border: none;padding: 10px;border-radius: 21px; color:#fff;margin-top:30px;">Follow Step on Your Device</button>
            </div>
            <div style="margin-top:20px; margin-bottom:10px;">
              <p>Copyright &copy; 2022-2023</p>
              <strong style="font-weight:800">YekBûn</strong>
            </div>
        </div>
      </div>
</body>
</html>
