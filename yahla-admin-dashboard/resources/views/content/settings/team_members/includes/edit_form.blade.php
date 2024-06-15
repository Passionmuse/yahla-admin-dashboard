<style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
</style>

<form id="editForm{{ $user->id }}" action="{{ route('settings.team.members.update', $user->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="hidden-inputs">
        <input type="hidden" name="image" value="{{ $user->image }}" data-path="{{ $user->image }}">
    </div>
    <input type="hidden" name="showEditFormModal{{ $user->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName{{ $user->id }}">Name</label>
                    <input type="text" id="inputName{{ $user->id }}" name="name" class="form-control" value="{{ old('name')?? $user->name }}">
                    @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputEmail{{ $user->id }}">Email</label>
                    <input type="text" id="inputEmail{{ $user->id }}" name="email" class="form-control" value="{{ old('email')?? $user->email }}">
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputPassword">Password <span class="text-warning text-capitalize">( Leave empty if you don't want to change password )</span></label>
                    <input type="text" id="inputPassword" name="password" class="form-control">
                    @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputPasswordConfirmation">Confirm Password <span class="text-warning text-capitalize">( Leave empty if you don't want to change password )</span></label>
                    <input type="text" id="inputPasswordConfirmation" name="password_confirmation" class="form-control">
                </div>
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img{{ $user->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="rolesInput{{ $user->id }}" class="form-label">Roles</label>
                    <input id="rolesInput{{ $user->id }}" name="roles" class="form-control" value="{{ $user->roles? rtrim($user->roles->reduce(fn($c, $i)=>$c.=$i->name.', '), ', '): '' }}" />
                    @error('roles')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="imageInput{{ $user->id }}">Status</label>
                    <select class="form-control" name="status" id="imageInput{{ $user->id }}">
                        <option value="1" {{ $user->status? 'selected': '' }}>Active</option>
                        <option value="0" {{ !$user->status? 'selected': '' }}>Disabled</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    window.addEventListener('load', function () {
        const TagifyRolesListEl = document.querySelector('#rolesInput{{ $user->id }}');

        let TagifyRolesLIst = new Tagify(TagifyRolesListEl, {
            tagTextProp: 'name', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
            closeOnSelect: false,
            enabled: 0,
            classname: 'users-list',
            searchKeys: ['name', 'email'] // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
            tag: tagTemplate,
            dropdownItem: suggestionItemTemplate
            },
            whitelist: rolesList
        });
    })
</script>

<script>
    'use strict';


    //  <div class="progress">
        // <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
        //                                                     </div>

    dropZoneInitFunctions.push(function() {
        // previewTemplate: Updated Dropzone default previewTemplate

        const previewTemplate = `<div class="row">
                                            <div class="col-md-12 col-12 d-flex justify-content-center">
                                                <div class="dz-preview dz-file-preview w-100">
                                                    <div class="dz-details">
                                                        <div class="dz-thumbnail" style="width:95%">
                                                            <img data-dz-thumbnail >
                                                            <span class="dz-nopreview">No preview</span>
                                                            <div class="dz-success-mark"></div>
                                                            <div class="dz-error-mark"></div>
                                                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                                          
                                                        </div>
                                                        <div class="dz-filename" data-dz-name></div>
                                                            <div class="dz-size" data-dz-size></div>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;

        // image
        const dropzoneMulti1 = new Dropzone('#dropzone-img{{ $user->id }}', {
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
                    `<input type="hidden" name="image" value="${response.path}" data-path="${response.path}">`;

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
                    url: '{{ route('settings.user.delete-img', $user->id) }}',
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

        @if($user->image)
        $("document").ready(() => {
            var path = "{{ asset('storage/'.$user->image) }}";
            var rpath = "{{ $user->image }}";
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
                dropzoneMulti1.on('addedfile', function(file) {
                    if (file.addPathToDataset)
                        file.previewElement.dataset.path = rpath;
                });
                file['upload'] = {
                    bytesSent: 0,
                    progress: 0,
                };

                // Update the preview template to include the music title

                dropzoneMulti1.emit("addedfile", file, path);
                dropzoneMulti1.emit("thumbnail", file, path);
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
        const file = new File([blob], fileName[1], { type: blob.type });

        return file;
    }
</script>