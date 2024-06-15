<style>
    .select2-container {
        z-index: 5000;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow b{
      border-style: none;
    }
    .light-style .select2-container--default .select2-selection--single .select2-selection__rendered{
        padding-top: 8px;
    }
  </style>
<form id=createForm method="POST" action="{{ route('language.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Title</label>
                    <input type="text" name="title" class="form-control" id="audioFile"  />
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="fullname">Icon</label>
                    {{-- <select class="" name="icon"  id="id_select2_example" style="width: 200px;">
                            <span>Choose a language</span>
                            <option value="AE" data-img_src="{{ asset('assets/img/AE.png') }}">Arabic</option>
                            <option value="GB" data-img_src="{{ asset('assets/img/GB.png') }}">English (GB)</option>
                            <option value="US" data-img_src="{{ asset('assets/img/US.png') }}">English (USA)</option>
                            <option value="FR" data-img_src="{{ asset('assets/img/FR.png') }}">French</option>
                            <option value="DE" data-img_src="{{ asset('assets/img/DE.png') }}">Deutsch</option>
                            <option value="IT" data-img_src="{{ asset('assets/img/IT.png') }}">Italian</option>
                            <option value="ES" data-img_src="{{ asset('assets/img/ES.png') }}">Spanish</option>
                    </select>              --}}

                    <input type ="file" class="form-control" name="icon"/>
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              
                
                   <div class="col-md-12">
                    <label class="form-label" for="fullname">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected value="">Select</option>
                        <option value="0">UnPublish</option>
                        <option value="1">Publish</option>
                        
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
  
            </div>
        </div>
    </div>
</form>
