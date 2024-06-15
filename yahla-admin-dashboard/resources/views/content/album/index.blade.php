@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection
@section('content')
<script>
  const dropZoneInitFunctions = [];
</script>
{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Album /</span> All Album
        </h4>
    </div>
    <div class="">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createalbumModal">Add Album</button>
    </div>
</div>


<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Album List</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Artist</th>
                    <th>Album Title </th>
                    <th>Total Album </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                                              <tr>
                    <td>1</td>
                    <td>
                        Şivan Perwer
                    </td>
                    <td>RABEE08.MP3</td>
                    <td> 2</td>
                                        <td>
                        <div class="d-flex justify-content-start align-items-center">
                          <a class="btn" href="{{ url('albums') }}"><i class="bx bx-show"></i></a>
                          <span data-bs-toggle="modal" data-bs-target="#editalbumModal3">
                            <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button></span>
                            <form action="https://dash.yekbun.net/album/3" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                <input type="hidden" name="_method" value="DELETE">                                <input type="hidden" name="_token" value="vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo">                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </form>
                            <div class="modal fade modal-659be65767b5f" id="editalbumModal3" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Edit Album</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
</style>

<form id="editForm3" method="POST" action="https://dash.yekbun.net/album/3" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo">    <input type="hidden" name="_method" value="put">    <div class="hidden-inputs">

                                    <input type="hidden" name="album[]" value="music/64fdbcd8dfe8d___RABEE01.MP3" data-path="music/64fdbcd8dfe8d___RABEE01.MP3">
                            <input type="hidden" name="album[]" value="music/64fdbcda5460c___RABEE02.MP3" data-path="music/64fdbcda5460c___RABEE02.MP3">
                            <input type="hidden" name="album[]" value="music/64fdbcdbb4c6f___RABEE03.MP3" data-path="music/64fdbcdbb4c6f___RABEE03.MP3">
                            <input type="hidden" name="album[]" value="music/64fdbcdd34cc3___RABEE04.MP3" data-path="music/64fdbcdd34cc3___RABEE04.MP3">
                            <input type="hidden" name="album[]" value="music/64fdbcdf3446d___RABEE06.MP3" data-path="music/64fdbcdf3446d___RABEE06.MP3">
                            <input type="hidden" name="album[]" value="music/64fdbce066b00___RABEE08.MP3" data-path="music/64fdbce066b00___RABEE08.MP3">
                            <input type="hidden" name="image" value="" data-path="">
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Album Title</label>
                    <input type="text" id="audio3" class="form-control" placeholder="Title will add automatically" name="title" value="RABEE08.MP3" readonly="">
                                    </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected="" value="">Select</option>
                                                    <option value="5" selected="">
                                Şivan</option>
                                                    <option value="6">
                                Çiwan</option>
                                                    <option value="7">
                                Ahmet</option>
                                            </select>
                                    </div>

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dz-clickable dz-started" action="/" id="dropzone-img3">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                
                            <div class="row dz-image-preview" data-path="">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="" class="w-100" alt="undefined" src="https://dash.yekbun.net/storage">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                            <div class="progress">                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress=""></div>                                                            </div>                                                        </div>                                                        <div class="dz-filename" data-dz-name="">undefined</div>                                                            <div class="dz-size" data-dz-size=""><strong>0.8</strong> KB</div>                                                    </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Album</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dz-clickable dz-started" action="/" id="dropzone-audio3">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                
                            <div class="row" data-path="music/64fdbcdbb4c6f___RABEE03.MP3">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="" class="w-100">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                            <div class="progress">                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress=""></div>                                                            </div>                                                        </div>                                                        <div class="dz-filename" data-dz-name="">RABEE03.MP3</div>                                                            <div class="dz-size" data-dz-size=""><strong>3</strong> MB</div>                                                    </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div><div class="row" data-path="music/64fdbcdd34cc3___RABEE04.MP3">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="" class="w-100">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                            <div class="progress">                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress=""></div>                                                            </div>                                                        </div>                                                        <div class="dz-filename" data-dz-name="">RABEE04.MP3</div>                                                            <div class="dz-size" data-dz-size=""><strong>3.2</strong> MB</div>                                                    </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected="">Select</option>
                        <option value="1" selected="">Publish</option>
                        <option value="0">UnPublish</option>
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

        // Multiple Dropzone
        const dropzoneMulti = new Dropzone('#dropzone-audio3', {
            url: 'https://dash.yekbun.net/file/upload',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
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
                    `<input type="hidden" name="album[]" value="${response.path}" data-path="${response.path}">`;

                if (this.files.length == 1) {
                    let file = this.files[0];
                    let title = file.name;
                    document.getElementById('audio3').value = 'audio';
                    //document.getElementById('audio3').value = title;
                    this.closest('form').querySelector('input[name="title"]').value = title;
                } else {

                    let file = this.files[0];
                    let title = file.name;
                    document.getElementById('audio3').value = 'audio';
                    //document.getElementById('audio3').value = title;
                    this.closest('form').querySelector('input[name="title"]').value = title;



                }
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
                    url: 'https://dash.yekbun.net/album/3/album',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

                                    $("document").ready(() => {
                    var path = "https://dash.yekbun.net/storage/music/64fdbcd8dfe8d___RABEE01.MP3";
                    let name = "64fdbcd8dfe8d___RABEE01.MP3";
                    const parts = name.split("___");
                    
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
                                file.previewElement.dataset.path =
                                'music/64fdbcd8dfe8d___RABEE01.MP3';
                        });
                        file['upload'] = {
                            bytesSent: 0,
                            progress: 0,
                        };

                        // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file, path);

                        dropzoneMulti.files.push(file);
                    });
                });
                            $("document").ready(() => {
                    var path = "https://dash.yekbun.net/storage/music/64fdbcda5460c___RABEE02.MP3";
                    let name = "64fdbcda5460c___RABEE02.MP3";
                    const parts = name.split("___");
                    
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
                                file.previewElement.dataset.path =
                                'music/64fdbcda5460c___RABEE02.MP3';
                        });
                        file['upload'] = {
                            bytesSent: 0,
                            progress: 0,
                        };

                        // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file, path);

                        dropzoneMulti.files.push(file);
                    });
                });
                            $("document").ready(() => {
                    var path = "https://dash.yekbun.net/storage/music/64fdbcdbb4c6f___RABEE03.MP3";
                    let name = "64fdbcdbb4c6f___RABEE03.MP3";
                    const parts = name.split("___");
                    
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
                                file.previewElement.dataset.path =
                                'music/64fdbcdbb4c6f___RABEE03.MP3';
                        });
                        file['upload'] = {
                            bytesSent: 0,
                            progress: 0,
                        };

                        // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file, path);

                        dropzoneMulti.files.push(file);
                    });
                });
                            $("document").ready(() => {
                    var path = "https://dash.yekbun.net/storage/music/64fdbcdd34cc3___RABEE04.MP3";
                    let name = "64fdbcdd34cc3___RABEE04.MP3";
                    const parts = name.split("___");
                    
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
                                file.previewElement.dataset.path =
                                'music/64fdbcdd34cc3___RABEE04.MP3';
                        });
                        file['upload'] = {
                            bytesSent: 0,
                            progress: 0,
                        };

                        // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file, path);

                        dropzoneMulti.files.push(file);
                    });
                });
                            $("document").ready(() => {
                    var path = "https://dash.yekbun.net/storage/music/64fdbcdf3446d___RABEE06.MP3";
                    let name = "64fdbcdf3446d___RABEE06.MP3";
                    const parts = name.split("___");
                    
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
                                file.previewElement.dataset.path =
                                'music/64fdbcdf3446d___RABEE06.MP3';
                        });
                        file['upload'] = {
                            bytesSent: 0,
                            progress: 0,
                        };

                        // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file, path);

                        dropzoneMulti.files.push(file);
                    });
                });
                            $("document").ready(() => {
                    var path = "https://dash.yekbun.net/storage/music/64fdbce066b00___RABEE08.MP3";
                    let name = "64fdbce066b00___RABEE08.MP3";
                    const parts = name.split("___");
                    
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
                                file.previewElement.dataset.path =
                                'music/64fdbce066b00___RABEE08.MP3';
                        });
                        file['upload'] = {
                            bytesSent: 0,
                            progress: 0,
                        };

                        // Update the preview template to include the music title

                        dropzoneMulti.emit("addedfile", file, path);

                        dropzoneMulti.files.push(file);
                    });
                });
                    

        // image
        const dropzoneMulti1 = new Dropzone('#dropzone-img3', {
            url: 'https://dash.yekbun.net/file/upload',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
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
                    url: 'https://dash.yekbun.net/album/3/image',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

        $("document").ready(() => {
            var path = "https://dash.yekbun.net/storage";
            var rpath = "";
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
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="editForm3" class="btn btn-primary" onclick="">Update</button>
                                                </div>
                    </div>
    </div>
</div>

                        </div>
                    </td>
                </tr>
                                <tr>
                    <td>2</td>
                    <td>
                        Şivan Perwer
                    </td>
                    <td>Abc Abc</td>
                    <td> 2</td>
                                        <td>
                        <div class="d-flex justify-content-start align-items-center">
                          <a class="btn" href="{{ url('albums') }}"><i class="bx bx-show"></i></a>
                          <span data-bs-toggle="modal" data-bs-target="#editalbumModal4">
                            <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button></span>
                            <form action="https://dash.yekbun.net/album/4" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                <input type="hidden" name="_method" value="DELETE">                                <input type="hidden" name="_token" value="vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo">                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </form>
                            <div class="modal fade modal-659be65767fd7" id="editalbumModal4" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Edit Album</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <style>
    .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    }
</style>

<form id="editForm4" method="POST" action="https://dash.yekbun.net/album/4" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo">    <input type="hidden" name="_method" value="put">    <div class="hidden-inputs">

                                    <input type="hidden" name="image" value="" data-path="">
    </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Album Title</label>
                    <input type="text" id="audio4" class="form-control" placeholder="Title will add automatically" name="title" value="Abc Abc" readonly="">
                                    </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected="" value="">Select</option>
                                                    <option value="5" selected="">
                                Şivan</option>
                                                    <option value="6">
                                Çiwan</option>
                                                    <option value="7">
                                Ahmet</option>
                                            </select>
                                    </div>

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Image</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dz-clickable dz-started" action="/" id="dropzone-img4">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                
                            <div class="row dz-image-preview" data-path="">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="" class="w-100" alt="undefined" src="https://dash.yekbun.net/storage">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                            <div class="progress">                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress=""></div>                                                            </div>                                                        </div>                                                        <div class="dz-filename" data-dz-name="">undefined</div>                                                            <div class="dz-size" data-dz-size=""><strong>0.8</strong> KB</div>                                                    </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Album</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dz-clickable" action="/" id="dropzone-audio4">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected="">Select</option>
                        <option value="1" selected="">Publish</option>
                        <option value="0">UnPublish</option>
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

        // Multiple Dropzone
        const dropzoneMulti = new Dropzone('#dropzone-audio4', {
            url: 'https://dash.yekbun.net/file/upload',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
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
                    `<input type="hidden" name="album[]" value="${response.path}" data-path="${response.path}">`;

                if (this.files.length == 1) {
                    let file = this.files[0];
                    let title = file.name;
                    document.getElementById('audio4').value = 'audio';
                    //document.getElementById('audio4').value = title;
                    this.closest('form').querySelector('input[name="title"]').value = title;
                } else {

                    let file = this.files[0];
                    let title = file.name;
                    document.getElementById('audio4').value = 'audio';
                    //document.getElementById('audio4').value = title;
                    this.closest('form').querySelector('input[name="title"]').value = title;



                }
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
                    url: 'https://dash.yekbun.net/album/4/album',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

                            

        // image
        const dropzoneMulti1 = new Dropzone('#dropzone-img4', {
            url: 'https://dash.yekbun.net/file/upload',
            previewTemplate: previewTemplate,
            parallelUploads: 1,
            maxFilesize: 100,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
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
                    url: 'https://dash.yekbun.net/album/4/image',
                    method: 'delete',
                    headers: {
                        'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
                    },
                    data: {
                        path: file.previewElement.dataset.path
                    },
                    success: function() {}
                });

                return this._updateMaxFilesReachedClass();
            }
        });

        $("document").ready(() => {
            var path = "https://dash.yekbun.net/storage";
            var rpath = "";
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
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="editForm4" class="btn btn-primary" onclick="">Update</button>
                                                </div>
                    </div>
    </div>
</div>

                        </div>
                    </td>
                </tr>
                                            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->

<!-- SubCategories Modal -->
<div class="modal fade" id="album-modal-1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-datatable table-responsive">

        <table class="table border-top">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Album</th>
                  <th>Total Tracks</th>
                  <th>Total Sales</th>
                  <th>Upload date</th>
                  <th>Total Size</th>
                  <th>Total Time</th>
                  <th>Option</th>
              </tr>
          </thead>
          <tbody>
              <tr class="odd">
                  <td>1</td>
                  <td>Name of Album</td>
                  <td>20</td>
                  <td>1.125</td>
                  <td>12 May 2023</td>
                  <td>8 MB</td>
                  <td>3:30 min</td>
                  <td>
                  <div class="d-flex justify-content-start align-items-center">
                  <button class="btn" data-bs-toggle="modal" data-bs-target="#album-modal-2" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit" ><i class="bx bx-show"></i></button>
                  @can('music.write')
                  <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                  @endcan
                  </button>
                  @can('music.delete')
                  <button type="button" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  @endcan
                  </div>
                  </td>
              </tr>
          </tbody>
      </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ SubCategories Modal -->



<!-- SubCategories Modal -->
<div class="modal fade" id="album-modal-2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-sub-categories">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Subcategories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-datatable table-responsive">

        <table class="table border-top">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Track Title</th>
                  <th>Track</th>
                  <th>Total Sales</th>
                  <th>Upload date</th>
                  <th>Total Size</th>
                  <th>Total Time</th>
                  <th>Option</th>
              </tr>
          </thead>
          <tbody>
              <tr class="odd">
                  <td>1</td>
                  <td>Name of Song</td>
                  <td>The Player</td>
                  <td>1.125</td>
                  <td>12 May 2023</td>
                  <td>8 MB</td>
                  <td>3:30 min</td>
                  <td>
                  <div class="d-flex justify-content-start align-items-center">
                  @can('music.write')
                  <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                  @endcan
                  </button>
                  @can('music.delete')
                  <button type="button" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  @endcan
                  </div>
                  </td>
              </tr>
          </tbody>
      </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ SubCategories Modal -->

<div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you Sure to delete this!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="" method="post" id="delete_form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>

{{-- Create Music model --}}
<x-modal id="createalbumModal" title="Create Album" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">

    @include('content.include.album.createForm')
</x-modal>
@section('page-script')
<script>
    function confirmAction(event, callback) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?'
            , text: "Are you sure you want to delete this?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonText: 'Yes, delete it!'
            , customClass: {
                confirmButton: 'btn btn-danger me-3'
                , cancelButton: 'btn btn-label-secondary'
            }
            , buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }

</script>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
  </script>
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
