<form id="editForm{{$ringtone->id}}" method="POST" action="{{ route('ringtone.update',$ringtone->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs">
        <input type="hidden" name="ringtone" value="{{ $ringtone->ringtone_path }}" data-path="{{ $ringtone->ringtone_path }}">
    </div>
    @method('put')
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">

                 
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Title</label>
                    <input type="text" id="smiley" class="form-control" name="title" value="{{ $ringtone->title ?? '' }}"  />
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Ringtone</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-audio{{ $ringtone->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="ringtone"  id="ringtone" accept="image/png, image/gif, image/jpeg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('ringtone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> 
            
            {{--
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Ringtone</label>
                    <input type="file" id="smiley" class="form-control" name="ringtone" accept="" />
                    @error('ringtone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            --}}
            </div>
        </div>
    </div>
</form>

<script>
    'use strict';

    dropZoneInitFunctions.push(function() {
        // previewTemplate: Updated Dropzone default previewTemplate

        const previewTemplate = `<div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center">
                                                <div class="dz-preview dz-file-preview w-100">
                                                    <div class="dz-details">
                                                        <div class="dz-thumbnail" style="width:95%">
                                                            <img data-dz-thumbnail class="w-100" >
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

        const dropzoneMulti = new Dropzone('#dropzone-audio{{ $ringtone->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', 'ringtones');
            },
            success: function(file, response) {

                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.innerHTML +=
                    `<input type="hidden" name="ringtone" value="${response.path}" data-path="${response.path}">`;

            },
            removedfile: function(file) {
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.querySelector(
                    `input[data-path="${file.previewElement.dataset.path}"]`).remove();

                if (file.previewElement != null && file.previewElement.parentNode != null) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }

                $.ajax({
                    url: '{{ route('ringtone.delete-ringtone', $ringtone->id) }}',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

        @if ($ringtone->ringtone_path)
        window.addEventListener('load', () => {
            var path = "{{ asset('storage/' . $ringtone->ringtone_path) }}";
            var rpath = "{{ $ringtone->ringtone_path }}";
            const parts = rpath.split("___");

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
                dropzoneMulti.on('addedfile', function(file) {
                    if (file.addPathToDataset)
                        file.previewElement.dataset.path = rpath;
                });
                file['upload'] = {
                    bytesSent: 0,
                    progress: 0,
                };

                // Update the preview template to include the music title

                dropzoneMulti.emit("addedfile", file, path);
                //dropzoneMulti.emit("thumbnail", file, path);
                // dropzoneMulti1.files.push(file);
            });
        });
        @endif
    })
</script>

<script>
    async function imageUrlToFile(imageUrl, fileName) {
        // Fetch the image
        const response = await fetch(imageUrl);
        const blob = await response.blob();

        // Create a File object
        const file = new File([blob], fileName[1], {
            type: blob.type
        });

        return file;
    }
</script>