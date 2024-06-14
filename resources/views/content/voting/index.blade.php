@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" /> -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
@endsection

@section('content')
<script>
    const dropZoneInitFunctions = [];
  </script>
<div class="row g-4 mb-4">
    <div class="col-sm-6  col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total Category</span>
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
    <div class="col-sm-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Total Vote</span>
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
</div>


<!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Voting List</h5>
        @can('voting.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createvotingModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Vote</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Title</th>
            <th>Thumbnail</th>
            <th>Total </th>
            <th>Likes </th>
            <th>Dislikes </th>
            <th>Natural </th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($votes as $vote)
        <tr>
            <td>{{ $vote->id }}</td>
            <td>{{ $vote->vote_category->name ?? '' }}</td>
            <td>{{ $vote->name ?? '' }}</td>
            <td><video loop="" class="rounded" controls="" style="width:150px; height:100px;">
              <source src="/storage/music/64feb52fea13d___Untitled_video.mp4">
            </video></td>
            <td>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <div class="dropdown d-inline-block">
                    <!-- Edit -->
                    <span data-bs-toggle="modal" data-bs-target="#editvotingModal{{ $vote->id }}">
                        @can('voting.write')
                        <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit" aria-describedby="tooltip557134">
                            <i class="bx bx-edit"></i>
                        </button>
                        @endcan
                    </span>

                    <!-- Delete -->
                    <form action="{{ route('vote.destroy', $vote->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        @can('voting.delete')
                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                        @endcan
                    </form>
                </div>
                {{-- Edit Model Form --}}
                <x-modal id="editvotingModal{{ $vote->id }}" title="Edit Vote" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{ $vote->id }}" size="md">
                    @include('content.include.voting.editForm')
                </x-modal>
            </td>
        </tr>
        @empty
        <tr>
            <td class="text-center" colspan="8"><b>No Voting found.<b></td>
        </tr>
        @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

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

{{-- Create Vote model --}}
<x-modal
id="createvotingModal"
title="Create Vote"
saveBtnText="Create"
saveBtnType="submit"
saveBtnForm="createForm"
size="md">
 @include('content.include.voting.createForm')
</x-modal>


<!-- <script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script> -->
<script>
    (function() {
        // Full Toolbar
        // --------------------------------------------------------------------
        // const fullToolbar = [
        //     [{
        //             font: []
        //         }
        //         , {
        //             size: []
        //         }
        //     ]
        //     , ['bold', 'italic', 'underline', 'strike']
        //     , [{
        //             color: []
        //         }
        //         , {
        //             background: []
        //         }
        //     ]
        //     , [{
        //             script: 'super'
        //         }
        //         , {
        //             script: 'sub'
        //         }
        //     ]
        //     , [{
        //             header: '1'
        //         }
        //         , {
        //             header: '2'
        //         }
        //         , 'blockquote'
        //         , 'code-block'
        //     ]
        //     , [{
        //             list: 'ordered'
        //         }
        //         , {
        //             list: 'bullet'
        //         }
        //         , {
        //             indent: '-1'
        //         }
        //         , {
        //             indent: '+1'
        //         }
        //     ]
        //     , [{
        //         direction: 'rtl'
        //     }]
        //     , ['link', 'image', 'video', 'formula']
        //     , ['clean']
        // ];
        // const fullEditor = new Quill('#inputDescription', {
        //     bounds: '#full-editor'
        //     , placeholder: 'Type Something...'
        //     , modules: {
        //         formula: true
        //         , toolbar: fullToolbar
        //     }
        //     , theme: 'snow'
        // });

        ClassicEditor
        .create( document.querySelector( '#inputDescription' ) )
        .catch( error => {
            console.error( error );
        } );

    }());

</script>

@endsection

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
// bootstrap-maxlength & repeater (jquery)
$(function () {
  //var maxlengthInput = $('.bootstrap-maxlength-example'),
    var formRepeater = $('.form-repeater');

  // Bootstrap Max Length
  // --------------------------------------------------------------------
//   if (maxlengthInput.length) {
//     maxlengthInput.each(function () {
//       $(this).maxlength({
//         warningClass: 'label label-success bg-success text-white',
//         limitReachedClass: 'label label-danger',
//         separator: ' out of ',
//         preText: 'You typed ',
//         postText: ' chars available.',
//         validate: true,
//         threshold: +this.getAttribute('maxlength')
//       });
//     });
//   }

  // Form Repeater
  // ! Using jQuery each loop to add dynamic id and class for inputs. You may need to improve it based on form fields.
  // -----------------------------------------------------------------------------------------------------------------

  if (formRepeater.length) {
    var row = 2;
    var col = 1;
    formRepeater.on('submit', function (e) {
      e.preventDefault();
    });
    formRepeater.repeater({
        // initEmpty: true,
      show: function () {
        var fromControl = $(this).find('.form-control, .form-select');
        var formLabel = $(this).find('.form-label');

        fromControl.each(function (i) {
          var id = 'form-repeater-' + row + '-' + col;
          $(fromControl[i]).attr('id', id);
          $(formLabel[i]).attr('for', id);
          col++;
        });

        row++;

        $(this).slideDown();
      },
      hide: function (e) {
        $(this).slideUp(e);
      }
    });
  }
});
</script>
<script>
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
  </script>
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
