<form id="editForm{{ $video->id }}" method="POST" action="{{ route('upload_video.update',$video->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Video Title</label>
                    <input type="text" id="audio{{$video->id }}" class="form-control" placeholder="Lorem" name="title" value="{{ $video->title ?? '' }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Select Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected value="">Select</option>
                        @foreach($artist as $artists)
                        <option value="{{ $artists->id }}" {{ $artists->id == $video->category_id ? 'selected' : '' }}>{{ $artists->first_name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Video</label>
                    <input type="file" name="video[]" class="form-control" id="audioFile{{ $video->id }}" accept="video/*" multiple />
                    @foreach($arr as $key => $value)
                    <?php
                      $getvideo = $value ?? null; 
                    ?>
                        <video controls width="200" class="mt-1">
                        <source src="{{ asset('storage/'.$getvideo) }}"/>
                        </video><br>
                    @endforeach
                    @error('video')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control"  />
                    <img src="{{ asset('storage/'.$video->thumbnail) }}" width="150" height="150" class="mt-1"> 
                    @error('video')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              
            </div>
        </div>
    </div>

</form>


<script>
    document.getElementById("audioFile{{ $video->id }}").addEventListener("change", function() {
        if(this.files.length == 1){
            let file = this.files[0];
            let title = file.name;
            document.getElementById('audio{{ $video->id }}').value = 'audio';
            document.getElementById('audio{{ $video->id }}').value = title;
        }else{
            let file = this.files[0];
            let title = file.name;
            document.getElementById('audio{{ $video->id }}').value = 'audio';
            document.getElementById('audio{{ $video->id }}').value = title;
        
        }
    
    
    });
    </script>