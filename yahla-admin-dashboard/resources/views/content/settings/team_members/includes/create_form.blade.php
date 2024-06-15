<form id="createForm" action="{{ route('settings.team.members.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName">Name</label>
                    <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputEmail">Email</label>
                    <input type="text" id="inputEmail" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputPassword">Password</label>
                    <input type="text" id="inputPassword" name="password" class="form-control">
                    @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputPasswordConfirmation">Confirm Password</label>
                    <input type="text" id="inputPasswordConfirmation" name="password_confirmation" class="form-control">
                </div>
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-img">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="image"  id="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-12">
                    <label for="rolesInput" class="form-label">Roles</label>
                    <input id="rolesInput" name="roles" class="form-control" />
                    @error('roles')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="imageInput">Status</label>
                    <select class="form-control" name="status" id="imageInput">
                        <option value="1" selected>Active</option>
                        <option value="0" {{ old('status') === '0'? 'selected': '' }}>Disabled</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    window.addEventListener('load', function () {
        const TagifyRolesListEl = document.querySelector('#rolesInput');

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

    dropZoneInitFunctions.push(function (){
            // previewTemplate: Updated Dropzone default previewTemplate

            const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                                    <div class="dz-details">
                                      <div class="dz-thumbnail" style="width:95%">
                                        <img data-dz-thumbnail >
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

            // for image
            const dropzoneMulti1 = new Dropzone('#dropzone-img', {
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
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="image" value="${response.path}" data-path="${response.path}">`;


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