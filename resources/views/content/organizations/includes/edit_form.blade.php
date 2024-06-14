<form id="editForm{{ $organization->id }}" action="{{ route('donations.organizations.update', $organization->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="hidden-inputs">
        <input type="hidden" name="logo" value="{{ $organization->logo }}" data-path="{{ $organization->logo }}">
    </div>
    <input type="hidden" name="showEditFormModal{{ $organization->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName{{ $organization->id }}">Organization Name</label>
                    <input type="text" id="inputName{{ $organization->id }}" name="name" class="form-control" value="{{ old('name')?? $organization->name }}" placeholder="Organization Name">
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputBankAccount{{ $organization->id }}">Bank Account</label>
                    <input type="text" id="inputBankAccount{{ $organization->id }}" name="bank_account" class="form-control" value="{{ old('bank_account')?? $organization->bank_account }}" placeholder="Bank Account">
                    @error('bank_account')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputPaypalAccount{{ $organization->id }}">Paypal Account</label>
                    <input type="text" id="inputPaypalAccount{{ $organization->id }}" name="paypal_account" class="form-control" value="{{ old('paypal_account')?? $organization->paypal_account }}" placeholder="Paypal Account">
                    @error('paypal_account')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputAddress{{ $organization->id }}">Address</label>
                    <input type="text" id="inputAddress{{ $organization->id }}" name="address" class="form-control" value="{{ old('address')?? $organization->address }}" placeholder="Address">
                    @error('address')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Upload Logo</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-logo{{ $organization->id }}">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="logo"  id="logo" accept="image/png, image/gif, image/jpeg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{--
                <div class="col-md-12">
                    <label class="form-label" for="logoInput{{ $organization->id }}">Upload Logo</label>
                    <input type="file" name="logo" id="logoInput{{ $organization->id }}" class="form-control">
                    @error('logo')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
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

        const dropzoneMulti = new Dropzone('#dropzone-logo{{ $organization->id }}', {
            url: '{{ route('file.upload') }}',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', 'organizations');
            },
            success: function(file, response) {

                if (file.previewElement) {
                    file.previewElement.classList.add("dz-success");
                }
                file.previewElement.dataset.path = response.path;
                const hiddenInputsContainer = file.previewElement.closest('form').querySelector(
                    '.hidden-inputs');
                hiddenInputsContainer.innerHTML +=
                    `<input type="hidden" name="logo" value="${response.path}" data-path="${response.path}">`;

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
                    url: '{{ route('donations.organizations.delete-logo', $organization->id) }}',
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

        @if ($organization->logo)
        window.addEventListener('load', () => {
            var path = "{{ asset('storage/' . $organization->logo) }}";
            var rpath = "{{ $organization->logo }}";
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
                dropzoneMulti.emit("thumbnail", file, path);
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