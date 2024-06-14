<style>
    /* .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    } */
</style>
<form id="editForm{{ $videos->id }}" class="edit-form" method="POST" action="{{ route('video-clips.update',$videos->id) }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="hidden-inputs">
        
        @foreach($videos->video as $path)
            <input type="hidden" name="video_paths[]" value="{{ $path }}" data-path="{{ $path }}">
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <h5 class="mb-4">Video Clips</h5>
            <div class="row g-3">
                {{-- <div class="col-md-12">
                    <label class="form-label" for="fullname">Title</label>
                    <input type="text" id="audio{{ $musics->id }}" class="form-control"  name="title" value="{{ $musics->name ?? '' }}" readonly>
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Category Name</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected value=""></option>
                        @foreach($music_category as $music)
                        <option value="{{ $music->id }}" {{ $videos->category_id == $music->id ? 'selected' : '' }}>{{ $music->name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
   
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected value=""></option>
                        @foreach($artists as $artist)
                        <option value="{{ $artist->id }}" {{ $artist->id == $videos->artist_id ? 'selected' : '' }}>{{ $artist->first_name .''.$artist->last_name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
      
                {{-- <div class="col-md-12">
                    <label class="form-label" for="fullname">Audio</label>
                    <input type="file" name="audio[]" class="form-control" id="audioFile{{ $musics->id }}" accept="audio/*" multiple />
                    <?php
                      $getaudio = $value ?? null; 
                    ?>
                    @error('audio')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Video Upload</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-video{{ $videos->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input  type="file" name="video[]" accept="audio/*" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option value="0" {{ $videos->status == 0 ? 'selected' : '' }}>UnPublish</option>
                        <option value="1" {{ $videos->status == 1 ? 'selected' : '' }}>Publish</option>
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
    'use strict';
    

    // <div class="dz-filename" data-dz-name></div>
    //                                                     <div class="dz-size" data-dz-size></div>
    //                                                     <!-- Add a new div to display the music title -->
    //                                                     <div class="dz-title" data-dz-title></div>

    dropZoneInitFunctions.push(function () {
            // previewTemplate: Updated Dropzone default previewTemplate
    
            const previewTemplate = `<div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center">
                                                <div class="dz-preview dz-file-preview w-100">
                                                    <div class="dz-details">
                                                        <div class="dz-thumbnail" style="width:95%">
                                                            <img data-dz-thumbnail>
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
                                                </div>
                                            </div>
                                        </div>`;

            // Multiple Dropzone
            const dropzoneMulti = new Dropzone('#dropzone-video{{ $videos->id }}', {
                url: '{{ route('file.upload') }}',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                sending: function (file, xhr, formData) {
                    formData.append('folder', 'video_clips');
                },
                success: function (file, response) {
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="video_paths[]" value="${response.path}" data-path="${response.path}">`;
                },
                removedfile: function (file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();
    
                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }
    
                    $.ajax({
                        url: '{{ route("video-clips.delete-audio", $videos->id) }}',
                        method: 'delete',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {path: file.previewElement.dataset.path},
                        success: function () {}
                    });
                    
                    return this._updateMaxFilesReachedClass();
                }
            });
    
            @foreach ($videos->video as $video)
                $("document").ready(()=>{
                    var path = "{{ asset('storage/'.$video) }}";
                    let name = "{{ basename($video) }}";
                    const parts = name.split("___");
                    console.log(path);
                    imageUrlToFile(path,parts).then((file) => {
                        file['status'] = "success";
                        file['previewElement'] = "div.dz-preview.dz-image-preview";
                        file['previewTemplate'] = "div.dz-preview.dz-image-preview";
                        file['_removeLink'] = "a.dz-remove";
                        // file['webkitRelativePath'] = "";
                        file['width'] = 500;
                        file['height'] = 500;
                        file['accepted'] = true;
                        file['dataURL'] = path;
                        file['processing'] = true;
                        file['addPathToDataset'] = true;
                        dropzoneMulti.on('addedfile', function (file) {
                            if (file.addPathToDataset)
                                file.previewElement.dataset.path = '{{ $video }}';
                        });
                        file['upload'] = {
                            bytesSent: 0 ,
                            progress: 0 ,
                        };
     
                    // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file , path);
                        // dropzoneMulti.emit("thumbnail", file , path);
                        // myDropzone.emit("complete", itemInfo);
                        // myDropzone.options.maxFiles = myDropzone.options.maxFiles - 1;
                        dropzoneMulti.files.push(file);
                    });
                });
            @endforeach

        })
    </script>

<script>
    async function imageUrlToFile(imageUrl, fileName) {
        // Fetch the image
        const response = await fetch(imageUrl);
        const blob = await response.blob();

        // Create a File object
        const file = new File([blob], fileName[1], { type: blob.type });

        return file;
    }
</script>



{{-- 

<script>
    document.getElementById("audioFile{{ $musics->id }}").addEventListener("change", function() {
        if(this.files.length == 1){
            let file = this.files[0];
            let title = file.name;
            document.getElementById('audio{{ $musics->id }}').value = 'audio';
            document.getElementById('audio{{ $musics->id }}').value = title;
        }else{
            let file = this.files[0];
            let title = file.name;
            document.getElementById('audio{{ $musics->id }}').value = 'audio';
            document.getElementById('audio{{ $musics->id }}').value = title;
        }
    
    
    });
    </script> --}}

