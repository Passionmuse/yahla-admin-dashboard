@extends('layouts/layoutMaster')

@section('title', 'News - Add / Manage')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" /> -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

@endsection

@section('vendor-script')
<!-- <script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script> -->
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

<style>
  .ql-snow {
    overflow: hidden;
  }
</style>
@endsection

@section('content')
<script>
  const dropZoneInitFunctions = [];
</script>
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total News</span>
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
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Category</span>
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
  <div class="col-sm-6 col-xl-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span>Total Size</span>
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
</div>

<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="m-0">News List</h5>
        @can('news.create')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createnewsModal"><i class="bx bx-plus me-0 me-sm-1"></i> Add News</button>
        @endcan
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            {{-- <th>Category </th> --}}
            <th>Image / Video</th>
            <th>Status </th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($news as $new)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $new->title ?? '' }}</td>
          {{-- <td>
              {{ $new->news_category->name  ??  '' }} </option>
          </td> --}}
          @php
          $extension = '';
          if(isset($new->image)){
            if (is_string($new->image))
              $img = json_decode($new->image, true);
            else
              $img = $new->image;

            if(is_array($img) && count($img) > 0){
              // Assuming the JSON is successfully decoded, it's an array, and it has at least one element
              $extension = pathinfo($img[0], PATHINFO_EXTENSION) ?? '';
            }
          }
        @endphp
          <td>
            @if( strtoLower($extension) == 'png'  || strtoLower($extension) == 'jpg' || strtoLower($extension) == 'jpeg'  || strtoLower($extension) == 'gif')
            <img class="rounded" src="{{ asset('storage/'.($img[0]?? ''))  }}" width="150" alt="" height="100" style="object-fit: cover">
            @else
            <video loop  class="rounded" controls style="width:150px; height:100px;">
              <source src="{{ asset('storage/'.($img[0]?? '')) }}" >
            </video>
            @endif
          </td>
           {{--@php
            $maxTextLength = 50; // Set the maximum length of the text you want to display
            $text = $new->description ?? '';
            $shortenedText = strlen($text) > $maxTextLength ? substr($text, 0, $maxTextLength) . '...' : $text;
        @endphp

          <td>{{ $shortenedText ?? '' }}</td>--}}
          <td>
            @if ($new->status)
              <span class="badge bg-label-success me-1">Published</span>
            @else
              <span class="badge bg-label-secondary me-1">UnPublished</span>
            @endif
          </td>
          <td>
              <div class="dropdown d-inline-block">
                <!-- Edit -->
                <span data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#editnewsModal{{ $new->id }}">
                  @can('news.write')
                  <button class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                    <i class="bx bx-edit"></i>
                  </button>
                  @endcan
                </span>
                <!-- Delete -->
                <form action="{{ route('news.destroy',$new->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                  @can('news.delete')
                  <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                  @endcan
                </form>
                {{--<button type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"
                  class="mb-2 mr-2 dropdown-toggle btn btn-light">Action
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl dropdown-menu" style="min-width: 9rem;">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <button class="btn" data-bs-toggle="modal" data-bs-target="#editnewsModal{{ $new->id }}">edit</button>
                    </li>
                    <li class="nav-item">
                      <a href="javascript:void(0);" class="nav-link" type="button" onclick="delete_service(this);"
                        data-id="{{ route('news.destroy',$new->id) }}">
                        <i class="nav-link-icon pe-7s-wallet"> </i><span>Delete</span>
                      </a>
                    </li>
                  </ul>
                </div>--}}
              </div>
              <x-modal id="editnewsModal{{ $new->id }}"
                  title="Edit News"
                  :titleCentered="true"
                  titleTag="h3"
                  saveBtnText="Update"
                  saveBtnType="submit"
                  :showFooter="false"
                    saveBtnForm="editForm{{ $new->id }}"
                    size="lg">
                @include('content.include.news.editForm')
              </x-modal>
            </td>
        </tr>
        @empty
        <tr>
            <td class="text-center" colspan="8"><b>No News found.<b></td>
        </tr>
        @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->


<x-modal id="createnewsModal"
  title="Create News"
  :titleCentered="true"
  titleTag="h3"
  saveBtnText="Create"
  saveBtnType="submit"
  saveBtnForm="createForm"
  size="lg"
  :showFooter="false"
>
 @include('content.include.news.createForm')
</x-modal>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
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

<script>
  function drpzone_init() {
      dropZoneInitFunctions.forEach(callback => callback());
  }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
