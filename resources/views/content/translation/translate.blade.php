@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')
<style>
  .toast-container {
      background-color: green;
      color: white;
  }
  .toast-title {
      font-weight: bold;
  }
</style>
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<script src="{{asset('assets/vendor/libs/toastr/toastr.js')}}"></script>

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/js/ui-toasts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/vendor/libs/toastr/toastr.css')}}" />

@endsection

@section('content')

<!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">{{ $texts->text }}</h5>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Language</th> 
            <th>Translation</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($languages as $language)
        <tr>
          <td>{{ $loop->iteration }}</td>
            <td>{{ $language->title ?? '' }}</td>
            <form action="{{ route('translation.translateLanguage',$language->translation_id) }}" method="post" id="translation-form">
                @csrf
                <input type ="hidden" name="text_id" value="{{ $texts->id }}" />
                <input type ="hidden" name="language_id" value="{{ $language->id }}" />
            <td><textarea class="form-control translation-value" name="translation_text" data-id="{{$language->translation_id}}" data-lang-id="{{$language->id}}" data-text-id="{{$texts->id}}">{{ $language->translation ?? '' }}</textarea></td>
            <td>
            </td>
        </form>
        </tr>
        @empty
        <tr>
            <td class="text-center" colspan="8"><b>No Translation  found.<b></td>
        </tr>
        @endforelse
        </tbody>
      </table>
      <button class="btn btn-primary btn-sm mx-2 mb-3" type="submit" id="submit-btn">save</button>
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
              
            </div>
        </div>
    </div>
</div>

<script>
  function test () {
    document.getElementById('d1').open = !document.getElementById('d1').open;
  }
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>

{{-- Create Vote model --}}
{{-- <x-modal 
id="createvotingModal" 
title="Create Vote"
saveBtnText="Create" 
saveBtnType="submit"
saveBtnForm="createForm" 
size="lg">
 @include('content.include.voting.createForm')
</x-modal> --}}


<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    (function() {
        // Full Toolbar
        // --------------------------------------------------------------------
        const fullToolbar = [
            [{
                    font: []
                }
                , {
                    size: []
                }
            ]
            , ['bold', 'italic', 'underline', 'strike']
            , [{
                    color: []
                }
                , {
                    background: []
                }
            ]
            , [{
                    script: 'super'
                }
                , {
                    script: 'sub'
                }
            ]
            , [{
                    header: '1'
                }
                , {
                    header: '2'
                }
                , 'blockquote'
                , 'code-block'
            ]
            , [{
                    list: 'ordered'
                }
                , {
                    list: 'bullet'
                }
                , {
                    indent: '-1'
                }
                , {
                    indent: '+1'
                }
            ]
            , [{
                direction: 'rtl'
            }]
            , ['link', 'image', 'video', 'formula']
            , ['clean']
        ];
        const fullEditor = new Quill('#inputDescription', {
            bounds: '#full-editor'
            , placeholder: 'Type Something...'
            , modules: {
                formula: true
                , toolbar: fullToolbar
            }
            , theme: 'snow'
        });

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  $("#submit-btn").on("click", (event) => {
    $("#submit-btn").html('Loading...');

    event.preventDefault();

    let translations = $(".translation-value");
    let data = [];

    for (let i=0; i<translations.length; i++) {
      let dataHolder = {};

      dataHolder.id = $(translations[i]).data('id');
      dataHolder.language_id = $(translations[i]).data('lang-id');
      dataHolder.text_id = $(translations[i]).data('text-id');
      dataHolder.value = $(translations[i]).val();

      data.push(dataHolder);
    }

    console.log(data);

    saveTranslation(data);
  })

  const saveTranslation = async (data) => {
    let config = {
      "headers": {
        "Content-Type": "application/json",
        "Accept": "application/json",
      }
    }

    await axios.post('{{url("/language-transalate")}}', {data})

    .then(res => {
      if (res.data.success)
         // Handle success response
         Swal.fire({
            position: 'top-end',
            toast: true,
            title: 'Translation successfully saved',
            showConfirmButton: false,
            timer: 3000,
        });
    })

    .catch(error => {
      console.log(error);
    })

    $("#submit-btn").html('Save');
  }
</script>

@endsection
