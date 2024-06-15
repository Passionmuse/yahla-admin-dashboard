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

<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Video Clips</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">21,459</h4>
              <small class="text-success">(+29%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="bx bx-user bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Artist</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">4,567</h4>
              <small class="text-success">(+18%)</small>
            </div>
            <small>Last week analytics </small>
          </div>
          <span class="badge bg-label-danger rounded p-2">
            <i class="bx bx-user-plus bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Album</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">19,860</h4>
              <small class="text-danger">(-14%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="bx bx-group bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Size</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">237</h4>
              <small class="text-success">(+42%)</small>
            </div>
            <small>Last week analytics</small>
          </div>
          <span class="badge bg-label-warning rounded p-2">
            <i class="bx bx-user-voice bx-sm"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Video Clips/</span>All Video Clips
</h4>
</div>
<div class="">
  @can('music.create')
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmusicModal">Add Video Clip</button>
  @endcan
</div>
</div>

   <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Video Clip List</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Artist Name</th>
            <th>Total Clips</th>
            <th>Total Size </th>
            <th>Total Time </th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
                                <tr>
            <td>1</td>
            <td>Artist Name</td>
            
            
            
              <td>20 Clips</td>
              <td>2.3 GB</td>
              <td>0 Hours to 20 min</td>
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <a class="btn" href="https://dash.yekbun.net/video-clip/1"><i class="bx bx-show"></i></a>
                <span data-bs-toggle="modal" data-bs-target="#editmusicModal2">
                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i>
                                    </button>
                </span>
                <form action="https://dash.yekbun.net/video-clips/2" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                  <input type="hidden" name="_method" value="DELETE">                  <input type="hidden" name="_token" value="vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo">                                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                  </form>
                <div class="modal fade modal-659be68aef2f1" id="editmusicModal2" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class=" w-100">
                    <h4 class="modal-title" id="modalCenterTitle">Edit Video Clip</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <style>
    /* .edit-form .dropzone {
        display: flex;
        flex-wrap: wrap;
    }

    .edit-form .dropzone .dz-message {
        width: 100%;
    } */
</style>
<form id="editForm2" class="edit-form" method="POST" action="https://dash.yekbun.net/video-clips/2" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo">    <input type="hidden" name="_method" value="put">    <div class="hidden-inputs">
        
                    <input type="hidden" name="video_paths[]" value="video_clips/64fdbb812ed5a___BERO_BASS_feat._Xatar__Sivan_Perwer_-_Blick_Richtung_Sonne.mp4" data-path="video_clips/64fdbb812ed5a___BERO_BASS_feat._Xatar__Sivan_Perwer_-_Blick_Richtung_Sonne.mp4">
            </div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <h5 class="mb-4">Video Clips</h5>
            <div class="row g-3">
                
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Category Name</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected="" value=""></option>
                                                <option value="2" selected="">Raqsa şexanî</option>
                                                <option value="3">Raqsa kurmancî</option>
                                                <option value="4">dîlana kurdî</option>
                                            </select>
                                    </div>
                
   
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Artist</label>
                    <select class="form-select" aria-label="Default select example" name="artist_id">
                        <option selected="" value=""></option>
                                                <option value="5" selected="">ŞivanPerwer</option>
                                                <option value="6">ÇiwanHaco</option>
                                                <option value="7">AhmetKaya</option>
                                            </select>
                                    </div>
      
                

                <div class="col-12">
                    <div class="card">
                        <h5 class="card-header">Video Upload</h5>
                        <div class="card-body">
                            <div class="dropzone needsclick dz-clickable dz-started" action="/" id="dropzone-video2">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload
                                </div>
                                
                            <div class="row" data-path="video_clips/64fdbb812ed5a___BERO_BASS_feat._Xatar__Sivan_Perwer_-_Blick_Richtung_Sonne.mp4">                                            <div class="col-md-12 col-12 d-flex justify-content-center">                                                <div class="dz-preview dz-file-preview w-100">                                                    <div class="dz-details">                                                        <div class="dz-thumbnail" style="width:95%">                                                            <img data-dz-thumbnail="">                                                            <span class="dz-nopreview">No preview</span>                                                            <div class="dz-success-mark"></div>                                                            <div class="dz-error-mark"></div>                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>                                                            <div class="progress">                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress=""></div>                                                            </div>                                                        </div>                                                        <div class="dz-filename" data-dz-name="">BERO_BASS_feat._Xatar__Sivan_Perwer_-_Blick_Richtung_Sonne.mp4</div>                                                            <div class="dz-size" data-dz-size=""><strong>6.6</strong> KB</div>                                                                                                        </div>                                                </div>                                            </div>                                        <a class="dz-remove" href="javascript:undefined;" data-dz-remove="">Remove file</a></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option value="0">UnPublish</option>
                        <option value="1" selected="">Publish</option>
                    </select>
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
            const dropzoneMulti = new Dropzone('#dropzone-video2', {
                url: 'https://dash.yekbun.net/file/upload',
                previewTemplate: previewTemplate,
                parallelUploads: 1,
                maxFilesize: 100,
                addRemoveLinks: true,
                headers: {
                    'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
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
                        url: 'https://dash.yekbun.net/video-clips/2/clip',
                        method: 'delete',
                        headers: {
                            'X-CSRF-TOKEN': 'vZWRWLao4mkM3TaLxw8oI60YJ7wrJHownfBORslo'
                        },
                        data: {path: file.previewElement.dataset.path},
                        success: function () {}
                    });
                    
                    return this._updateMaxFilesReachedClass();
                }
            });
    
                            $("document").ready(()=>{
                    var path = "https://dash.yekbun.net/storage/video_clips/64fdbb812ed5a___BERO_BASS_feat._Xatar__Sivan_Perwer_-_Blick_Richtung_Sonne.mp4";
                    let name = "64fdbb812ed5a___BERO_BASS_feat._Xatar__Sivan_Perwer_-_Blick_Richtung_Sonne.mp4";
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
                                file.previewElement.dataset.path = 'video_clips/64fdbb812ed5a___BERO_BASS_feat._Xatar__Sivan_Perwer_-_Blick_Richtung_Sonne.mp4';
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
            </div>
                        <div class="modal-footer">
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" form="editForm2" class="btn btn-primary" onclick="">Update</button>
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
<div class="modal fade" id="sub-categories" tabindex="-1" aria-hidden="true">
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
                  <th>Clip Title</th>
                  <th>View Clip</th>
                  <th>Total Listen</th>
                  <th>Upload date</th>
                  <th>Total Size</th>
                  <th>Total Time</th>
                  <th>Option</th>
              </tr>
          </thead>
          <tbody>
              <tr class="odd">
                  <td>1</td>
                  <td>Name of Clip</td>
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

<script>
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>

{{-- Create Music model --}}
<x-modal
id="createmusicModal"
title="Create Video Clips"
 saveBtnText="Create"
 saveBtnType="submit"
  saveBtnForm="createForm"
  size="md">

 @include('content.include.video_clips.createForm')
</x-modal>

@section('page-script')
<script>
  function confirmAction(event, callback) {
    event.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "Are you sure you want to delete this?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      customClass: {
        confirmButton: 'btn btn-danger me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
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
