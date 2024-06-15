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
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@section('content')




<div class="d-flex justify-content-between">
    <div>
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Language /</span> All Language
        </h4>
    </div>
    <div class="">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createlanguageModal">Add Language</button>
    </div>
</div>
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">List of Language</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Language</th>
                    <th>Icon</th>
                    {{-- <th>Progress</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if(count($languages))
                @foreach($languages as $language)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $language->title ?? '' }}</td>
                    <td>
                        @if(isset($language->icon))
                        <img src="{{ asset($language->icon) }}" width="50" height="50" alt="Language Icon">
                    @endif
                    
                       
                    </td>
                    {{-- <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ ( $language->translations_count *100)/$language->texts_count}}%" aria-valuenow="{{ $language->translations_count }}" aria-valuemin="0" aria-valuemax="{{ $language->texts_count }}">{{  floor(($language->translations_count *100)/$language->texts_count)}}%</div>
                        </div>
                    </td> --}}
                    <td>
                        <div class="">
                            <span data-bs-toggle="modal" data-bs-target="#languageModal{{ $language->id }}">
                                <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                            </span>
                            <form action="{{ route('language.destroy', $language->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                            </form>
                            {{-- <x-modal id="editlanguageModal{{$language->id}}" title="Update Language" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{$language->id}}" size="md">
                            @include('content.include.movies.editForm')
                            </x-modal> --}}

                            {{-- Add Categroy modal --}}
                            <div class="modal fade" id="languageModal{{ $language->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Edit <span class="text-info">{{ $language->title }}</span> Language</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Section</th>
                                                                <th scope="col">File</th>
                                                                <th scope="col">Progress</th>
                                                                <th scope="col">Done</th>
                                                                <th scope="col">Total</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-border-bottom-0">
                                                            <tr>
                                                                <td>Start - Sign in/up</td>
                                                                <td>Main</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: {{ rand(0,100) }}%;" aria-valuenow="{{ rand(0,100) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ rand(0,100) }}</td>
                                                                <td>{{ rand(0,100) }}</td>
                                                                <td> <span data-bs-toggle="modal" data-bs-target="#languageModal__1{{ $language->id }}">
                                                                        <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                                                                    </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alert/Upgrade Popup</td>
                                                                <td>Task</td>
                                                                <td>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: {{ rand(0,100) }}%;" aria-valuenow="{{ rand(0,100) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>{{ rand(0,100) }}</td>
                                                                <td>{{ rand(0,100) }}</td>
                                                                <td> <span data-bs-toggle="modal" data-bs-target="#languageModal__1{{ $language->id }}">
                                                                        <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                                                                    </span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Edit language model __1 --}}
                            <div class="modal fade" id="languageModal__1{{ $language->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Edit
                                              {{-- <span class="text-info">{{ $language->title }}</span> --}}
                                               Section</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5>English Language</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5>{{ $language->title }} Language</h5>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6>Whole</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="{{ $language->title }} text">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <h6>Text</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="{{ $language->title }} text">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <h6>Activity</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="{{ $language->title }} text">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="8">No Language found.</td>
                </tr>
                @endif
            </tbody>
        </table>

    </div>
</div>

<x-modal id="createlanguageModal" title="Create Language" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
    @include('content.include.language.createForm')
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
<script type="text/javascript">
    function custom_template(obj) {
        var data = $(obj.element).data();
        var text = $(obj.element).text();
        if (data && data['img_src']) {
            img_src = data['img_src'];
            template = $("<div style=\"display:flex;gap:4px;margin-top:10px;\"><img src=\"" + img_src + "\" style=\"width:20px;height:20px;border-radius:20px;\"/><p style=\"font-weight: 400;font-size:10pt; margin-top:-5px;\">" + text + "</p></div>");
            return template;
        }
    }
    var options = {
        'templateSelection': custom_template
        , 'templateResult': custom_template
    , }
    $('#id_select2_example').select2(options);
    $('.select2-container--default .select2-selection--single').css({
        'height': '47px'
    });

</script>
@endsection
@endsection
