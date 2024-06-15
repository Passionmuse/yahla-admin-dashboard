<form id="createForm" action="{{ route('settings.payment-offices.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputOfficeName">Office Name</label>
                    <input type="text" id="inputOfficeName" name="office_name" class="form-control" value="{{ old('office_name') }}" placeholder="Office Name">
                    @error('office_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputName">Name</label>
                    <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputLastName">Last Name</label>
                    <input type="text" id="inputLastName" name="last_name" class="form-control" value="{{ old('last_name') }}" placeholder="Last Name">
                    @error('last_name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                {{-- <div class="col-md-12">
                    <label class="form-label" for="inputEmail">Email</label>
                    <input type="text" id="inputEmail" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="col-md-12">
                    <label class="form-label" for="inputPhone">Phone No</label>
                    <input type="text" id="inputPhone" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Phone No">
                    @error('phone')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputCountry">Country</label>
                    <select name="country" class="form-control">
                        <option  value="{{ $country->id }}" readonly>{{ $country->name ?? '' }}</option>
                    </select>
                    @error('country')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputCity">City</label>
                    <select  name="city" class="form-control">
                        <option value="">Select city</option>
                    @foreach($cities as $city)
                       <option value="{{ $city->id }}">{{ $city->name ?? '' }}</option>
                    @endforeach
                </select>
                    @error('city')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputAddress">Address</label>
                    <input type="text" id="inputAddress" name="address" class="form-control" value="{{ old('address') }}" placeholder="Address">
                    @error('address')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Upload Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick" action="/" id="dropzone-image">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                <div class="fallback">
                                    <input type="file" name="image"  id="image" accept="image/png, image/gif, image/jpeg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            {{--
                <div class="col-md-12">
                    <label class="form-label" for="inputImage">Upload Image</label>
                    <input type="file" name="image" id="inputImage" class="form-control">
                    @error('image')
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

    dropZoneInitFunctions.push(function (){
            // previewTemplate: Updated Dropzone default previewTemplate

            const previewTemplate = `<div class="row"><di class="col-md-12 d-flex justify-content-center"><div class="dz-preview dz-file-preview w-100">
                                    <div class="dz-details">
                                      <div class="dz-thumbnail" style="width:95%">
                                        <img data-dz-thumbnail class="w-100" style="max-height:184px; object-fit:revert;">
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

            const dropzoneMulti = new Dropzone('#dropzone-image', {
                url: '{{ route('file.upload') }}',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                sending: function (file, xhr, formData) {
                    formData.append('folder', 'payment_offices');
                },
                success: function (file, response) {
                    if (file.previewElement) {
                        file.previewElement.classList.add("dz-success");
                    }
                    file.previewElement.dataset.path = response.path;
                    const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
                    hiddenInputsContainer.innerHTML += `<input type="hidden" name="image_path" value="${response.path}" data-path="${response.path}">`;


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