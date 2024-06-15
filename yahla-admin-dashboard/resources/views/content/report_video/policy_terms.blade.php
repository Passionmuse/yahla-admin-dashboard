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
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection
@section('content')

{{-- Nav TAb --}}
<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Policy and Terms /</span> All Policy and Terms
        </h4>
    </div>
    <div>
        @can('policy_terms.create')
        <button class="btn btn-primary" data-bs-target="#addnewtab" data-bs-toggle="modal">Add New</button>
        @endcan
    </div>
</div>

<div class="modal fade" id="addnewtab" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel3">Add New Section</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form id="createForm" method="POST" action="{{ route('policy_and_terms.store') }}">
                        @csrf
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Section Name</label>
                            <input type="text" id="nameLarge" class="form-control" placeholder="Add Tab Name Here" name="name">
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>

@if ($data->count())
<div class="row">
    <h6 class="text-muted">Privacy Policy and Terms</h6>
    <div class="nav-align-left mb-4">
        <div class="col-md-2">
            <ul class="nav nav-pills me-3" role="tablist">
                @foreach($data as $section)
                    <li class="nav-item d-flex align-items-center">
                        <button type="button" class="nav-link {{ $loop->iteration == 1 && !old('tab') ? 'active' : ''  }} {{ old('tab') === "tab{$section->id}"  ? 'active' : '' }}" role="tab" data-bs-toggle="tab" data-bs-target="#tab{{ $section->id }}" aria-controls="tab{{ $section->id }}" aria-selected="true"><i class='bx bx-file'></i>{{ $section->name }}</button>

                        <form action="{{ route('policy_and_terms.destroy' ,$section->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            @can('policy_terms.delete')
                            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1 text-danger" ></i></button>
                            @endcan
                        </form>
                    </li>
                    @section('tab-content')
                        @parent
                        <div class="tab-pane fade show {{ $loop->first && !old('tab') ? 'active' : '' }} {{ old('tab') === "tab{$section->id}"  ? 'active' : '' }}" id="tab{{ $section->id }}" role="tabpanel">
                            <form action="{{ route('policy_and_terms.saveFileds') }}" method="POST">
                                @csrf
                                <input type ="hidden" name ="tab" value=" tab{{ $section->id }} " />
                                <input type ="hidden" name="id" value="{{ $section->id }}" />
                                <div class="mb-3">
                                    <label>Privacy Policy</label>
                                    <textarea class="form-control" name="privacy_policy" rows="6">{{ $section->privacy_policy }}</textarea>
                                </div>
                                {{-- <div class="mb-3">
                                    <label>Disclaimer</label>
                                    <textarea class="form-control" name="disclaimer" rows="6">{{ $section->disclaimer }}</textarea>
                                </div> --}}
                                <button type="submit" class="btn btn-primary">submit</button>
                            </form>
                        </div>
                    @endsection
                @endforeach
            </ul>
        </div>
        <div class="tab-content">
            @yield('tab-content')
        </div>
    </div>
</div>
@endif

@section('page-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
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
<script>
    function deleteURL(event) {
        event.target.closest('.row').remove();
    }

    function AddURL(event) {

        const url = event.target.closest('.URL').querySelector('.URL-body');
        $(url).append('<div class="row mb-3">' +
            '<div class="col-5 pl-1 pr-1">' +
            '<input type="text" class="form-control" name="policy_title[]">' +
            '</div>' +
            '<div class="col-6 pl-1 pr-1">' +
            '<textarea type="text" class="form-control" name="policy_text[]" rows="6"></textarea>' +
            '</div>' +
            '<div class="col-1 pl-1 pr-1 d-flex align-items-center justify-content-center">' +
            '<button type="button" class="btn btn-danger" onclick="deleteURL(event)">X</button>' +
            '</div>' +
            '</div>');
    }

</script>
@endsection
@endsection
