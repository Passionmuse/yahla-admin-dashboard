<style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
</style>

<form id="editForm{{ $bazar->id }}" method="POST" action="{{ route('bazar.update',$bazar->id) }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="hidden-inputs">
        
        @foreach($bazar->image as $path)
            <input type="hidden" name="image[]" value="{{ $path }}" data-path="{{ $path }}">
        @endforeach

    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <h5 class="mb-4">Bazar</h5>
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Category Name</label>
                    <select class="form-select" aria-label="Default select example" name="category_id" onchange="loadSubCategories(this)">
                        <option value="" selected>Select</option>
                        @foreach($bazar_category as $category)
                        <option value="{{ $category->id }}" {{ $bazar->category_id == $category->id ? 'selected' : '' }}>{{ $category->name ?? '' }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="subcategories-container">
                      <label class="form-label" for="fullname">Sub Category</label>
                      <select class="form-select" aria-label="Default select example" name="subcategory_id" {{ $bazar->category_id? '': 'disabled' }}>
                          @if (! $bazar->category_id)
                            <option selected value="">Select</option>
                          @else
                            @foreach (($bazar_category->first(fn ($value, $key) => $value->id == $bazar->category_id)
                                    ?->sub_categories?? []) as $subCat)
                                    <option value="{{ $subCat->id }}" {{ $subCat->id == $bazar->subcategory_id? 'selected': '' }}>{{ $subCat->name }}</option>
                            @endforeach
                          @endif
                      </select>
                    </div>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Title</label>
                    <input type="text" id="fullname" class="form-control" name="title" value="{{ $bazar->title ?? '' }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $bazar->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input  type="file" name="image[]"   />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="form-lable" for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $bazar->price }}">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="">Warranty</label>
                    <select name="warranty" class="form-select">
                        <option value="0"{{ $bazar->warranty ==0 ? 'selected' : '' }}>No</option>
                        <option value="1"{{ $bazar->warranty ==1 ? 'selected' : '' }}>Yes</option>

                    </select>

                </div>
                <div class="col-md-12">
                    <label class="form-lable" for="status">Status</label>
                    {{-- <option>Select Status</option> --}}
                    <select name="status" class="form-select">
                        <option value="1" {{ $bazar->status == 1 ? 'selected' : '' }}>Publish</option>
                        <option value="0" {{ $bazar->status == 0 ? 'selected' : '' }}>UnPublish</option>
                </select>
                </div> 
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

        // image
        const dropzoneMulti = new Dropzone('#dropzone-img{{ $bazar->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', 'music');
            },
            success: function(file, response) {

                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.innerHTML +=
                    `<input type="hidden" name="image[]" value="${response.path}" data-path="${response.path}">`;

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
                    url: '{{ route('bazar.delete-img', $bazar->id) }}',
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
    
            @foreach($bazar->image as $audio)
                $("document").ready(() => {
                    var path = "{{ asset('storage/'.$audio) }}";
                    let name = "{{ basename($audio) }}";
                    const parts = name.split("___");
                    imageUrlToFile(path, parts).then((file) => {
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
                                file.previewElement.dataset.path =
                                '{{ $audio }}';
                        });
                        file['upload'] = {
                            bytesSent: 0,
                            progress: 0,
                        };

                        // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file, path);
                        dropzoneMulti.emit("thumbnail", file, path);

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
        const file = new File([blob], fileName[1], {
            type: blob.type
        });

        return file;
    }
</script>
