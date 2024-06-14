@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

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
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
@endsection

@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">Text</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTextModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add Text</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Text</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse($texts as $text)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $text->text ?? '' }}</td>
                    <td>
                      <div class="d-flex justify-content-start align-items-center">
                        <form action="{{ route('translation.translate',$text->id) }}" id="delete_form">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Translate</button>
                        </form>
                        
                          <span data-bs-toggle="modal" data-bs-target="#edittextModal{{ $text->id }}">
                              <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                          </span>
                          <form action="{{ route('text.destroy', $text->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                          </form>
                      </div>
                      <x-modal id="edittextModal{{$text->id}}" title="Update Text" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{$text->id}}" size="md">
                          @include('content.include.text.editForm')
                      </x-modal>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="8"><b>No Text Found.<b></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<!--/ Basic Bootstrap Table -->

{{-- Create Vote model --}}
<x-modal id="createTextModal" title="Create Text" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="sm">
    @include('content.include.text.createForm')
</x-modal>


<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
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
    // bootstrap-maxlength & repeater (jquery)
    $(function() {
        //var maxlengthInput = $('.bootstrap-maxlength-example'),
        var formRepeater = $('.form-repeater');

        // Bootstrap Max Length
        // --------------------------------------------------------------------
        if (maxlengthInput.length) {
            maxlengthInput.each(function() {
                $(this).maxlength({
                    warningClass: 'label label-success bg-success text-white'
                    , limitReachedClass: 'label label-danger'
                    , separator: ' out of '
                    , preText: 'You typed '
                    , postText: ' chars available.'
                    , validate: true
                    , threshold: +this.getAttribute('maxlength')
                });
            });
        }

        // Form Repeater
        // ! Using jQuery each loop to add dynamic id and class for inputs. You may need to improve it based on form fields.
        // -----------------------------------------------------------------------------------------------------------------

        if (formRepeater.length) {
            var row = 2;
            var col = 1;
            formRepeater.on('submit', function(e) {
                e.preventDefault();
            });
            formRepeater.repeater({
                // initEmpty: true,
                show: function() {
                    var fromControl = $(this).find('.form-control, .form-select');
                    var formLabel = $(this).find('.form-label');

                    fromControl.each(function(i) {
                        var id = 'form-repeater-' + row + '-' + col;
                        $(fromControl[i]).attr('id', id);
                        $(formLabel[i]).attr('for', id);
                        col++;
                    });

                    row++;

                    $(this).slideDown();
                }
                , hide: function(e) {
                    $(this).slideUp(e);
                }
            });
        }
    });

</script>
@endsection
