<form id="createForm" method="POST" action="{{ route('upload_video.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Video Title</label>
                    <input type="text" id="video" class="form-control" placeholder="Title Will Add Automatically" name="title" readonly value="" />
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Choose Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected>Select</option>
                        @foreach($artist as $artists)
                        <option value="{{ $artists->id }}">{{ $artists->first_name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Video</label>
                    <input type="file" name="video[]" class="form-control" id="audioFile" accept="video/*" multiple />
                    @error('video')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Choose Thumbnail</label>
                    <input type="file" id="fullname" class="form-control" name="thumbnail">
                    @error('thumbnail')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected value="">Select</option>
                        <option value="0">UnPublish</option>
                        <option value="1">Publish</option>

                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById("audioFile").addEventListener("change", function() {
        if(this.files.length == 1){
            let file = this.files[0];
            let title = file.name;
            console.log(title);
            // document.querySelector('input[name="title"]').value = title;
            this.closest('form').querySelector('input[name="title"]').value=title;
        }else{
            let file = this.files[0];
            let title = file.name;
            // document.querySelector('input[name="title"]').value = title;
            this.closest('form').querySelector('input[name="title"]').value=title;

        }
    
    
    });
    </script>