<form id=createForm method="POST" action="{{ route('music.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
              @if ($type == 'music')

              <div class="col-md-12">
                <label class="form-label" for="fullname">Select Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                  <option selected value="">Select</option>
                  @foreach($music_category as $music)
                  <option value="{{ $music->id }}">{{ $music->name ?? '' }}</option>
                  @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              @endif

                @if($type != 'music')
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Select Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected value="">Select</option>
                        @foreach($artists as $artists)
                        <option value="{{ $artists->id }}">{{ $artists->first_name .' '.$artists->last_name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('artist_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @endif
               <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">Audio Upload</h5>
                    <div class="card-body">
                        <div class="dropzone needsclick" action="/" id="dropzone-audio">
                            <div class="dz-message needsclick">
                                Drop files here or click to upload
                            </div>
                            <div class="fallback">
                                <input type="file" name="audio[]"  accept="audio/*" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <label class="form-label" for="fullname">Status</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected value="1">Select</option>
                    <option value="0">UnPublish</option>
                    <option value="1">Publish</option>

                </select>
                @error('status')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input type ="hidden" value="{{ $type ?? 'music' }}" name="type" />
        </div>
    </div>
    </div>
</form>

<script>
    'use strict';

    dropZoneInitFunctions.push(function (){
            // previewTemplate: Updated Dropzone default previewTemplate

            const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
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
                                    </div></div></di>`;

            // Multiple Dropzone

            const dropzoneMulti = new Dropzone('#dropzone-audio', {
                url: '{{ route('file.upload') }}',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
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
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="audio_paths[]" value="${response.path}" data-path="${response.path}">`;
                },
                removedfile: function (file) {
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.querySelector(`input[data-path="${file.previewElement.dataset.path}"]`).remove();

                    if (file.previewElement != null && file.previewElement.parentNode != null) {
                        file.previewElement.parentNode.removeChild(file.previewElement);
                    }

                    $.ajax({
                        url: '{{ route("file.delete") }}',
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
        });
</script>


{{--
<script>
    document.getElementById("audioFile").addEventListener("change", function() {
if(this.files.length == 1){
let file = this.files[0];
let title = file.name;
document.querySelector('input[name="title"]').value = title;
}else{
let file = this.files[0];
let title = file.name;
document.querySelector('input[name="title"]').value = title;
}
});
</script> --}}
