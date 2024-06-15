  <form id="createForm" method="POST" action="{{ route('text.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="row">
          <div class="col-lg-12 mx-auto">
              <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Text</label>
                    <textarea type="text" id="fullname" class="form-control" placeholder="" name="text" rows="3"></textarea>
                    @error('text')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
          </div>
      </div>
      </div>
  </form>
