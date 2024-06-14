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
<style>
    .swal2-icon .swal2-icon-content {
        font-size: 66px !important;
    }
    .btn-danger {
        background-color: #ff3e1d !important;
    }
	.upper_card{
	margin-bottom:1rem;
	}
	.icon_boundary{
	padding: 10px 6px;
    background: #ebeef0;
    border-radius: 5px;
	}
</style>
<script>
  const dropZoneInitFunctions = [];
</script>
<div class="d-flex justify-content-between">
  <div>
      <h4 class="fw-bold py-3 mb-4">
          <span class="text-muted fw-light">ShopName /</span> Reservation Mine
      </h4>
  </div>
  <div class="">
    @can('series.create')
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createseriesModal">Add Series</button>
      @endcan
  </div>
</div>
<div class="card upper_card">
	<div class="row mx-0 p-4">
		<div class="col col-sm-6 col-lg-3">
			<div class="d-flex justify-content-between align-items-start border-end">
			<div>
				<h2>56</h2>
				<span>Reservation Plus Today</span>
			</div>
			<div>
				<span class="icon_boundary me-sm-4">
				<i class="bx bx-check-double bx-sm"></i>
				</span>
			</div>
			</div>
		</div>
				
		<div class="col col-sm-6 col-lg-3 d-flex  border-end">
			<div>
				<h2>12689</h2>
				<span>New Reservation</span>
			</div>
			<div>
				<span class="icon_boundary">
				<i class="bx bx-calendar bx-sm"></i>
				</span>
			</div>
		</div>
		<div class="col col-sm-6 col-lg-3 d-flex  border-end">
			<div>
				<h2>124</h2>
				<span>Cancel Reservation</span>
			</div>
			<div>
				<span class="icon_boundary">
				<i class="bx bx-error-alt bx-sm"></i>
				</span>
			</div>
		</div>
	</div>
</div>



  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">List Series</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Thumbnail</th>
            <th>Letters</th>
            <th>Video title</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">

          @if(count($series))
          @foreach($series as $serie)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
              <img src="{{ asset('storage/'.$serie->thumbnail) }}" alt="Avatar" class="rounded" width="100" height="100">
            <td>{{ \Illuminate\Support\Str::random(5) }}</td>
            <td>{{ $serie->title ?? '' }}</td>
        
              {{-- @php
                $json = $serie->series;
                $arr = json_decode($json, true);
              @endphp --}}
           
        
            <td>
              <div class="d-flex justify-content-start align-items-center">
                <span data-bs-toggle="modal" data-bs-target="#editmoviesModal{{ $serie->id }}">
                  @can('series.write')
                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                  @endcan
                </span>

                <form action="{{ route('series.series.destroy', $serie->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    @can('series.delete')
                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                    @endcan
                </form>
              </div>
                
              <x-modal id="editmoviesModal{{$serie->id}}" title="Update Movie" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{$serie->id}}" size="md">
                @include('content.include.series.editForm')
              
              </x-modal>
            </td>
          </tr>
       @endforeach
       @else
       <tr>
        <td class="text-center" colspan="8">No Series found.</td>
       </tr>
       @endif
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
  <div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  style="padding-right: 17px;" aria-modal="true">
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
  function delete_service(el){
    let link=$(el).data('id');
    $('.deleted-modal').modal('show');
    $('#delete_form').attr('action', link);
  }
</script>
<x-modal id="createseriesModal" title="Create Series" saveBtnText="Create" saveBtnType="submit" saveBtnForm="createForm" size="md">
  @include('content.include.series.createForm')

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
