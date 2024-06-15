<form id="createForm" action="{{ route('settings.cities.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputCountryId">Select Country</label>
                    <select id="inputCountryId" name="country_id" class="form-control" onchange="loadRegions(event)">
                        <option value="">Choose</option>
                        @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ (int) old('country_id') === (int) $country->id? 'selected': '' }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputRegionId">Select Province</label>
                    <select id="inputRegionId" name="region_id" class="form-control">
                        <option value="">Choose</option>
                        @foreach($regions as $region)
                        <option value="{{ $region->id }}" {{ (int) old('region_id') === (int) $region->id? 'selected': '' }}>{{ $region->name }}</option>
                        @endforeach
                    </select>
                    @error('region_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <!-- Form Repeater -->
                    <div class="form-repeater">
                        <div data-repeater-list="cities">
                            @if (old('cities'))
                                @foreach (old('cities') as $i => $city)
                                    <div class="row mb-3" data-repeater-item>
                                        <div class="col-md-4">
                                            <label class="form-label" for="inputZipcode">Zipcode</label>
                                            <input type="text" id="inputZipcode" name="zipcode" class="form-control" value="{{ $city['zipcode']?? '' }}" placeholder="Zipcode">
                                            @error("cities.$i.zipcode")
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-label" for="inputName">City Name</label>
                                            <input type="text" id="inputName" name="name" class="form-control" value="{{ $city['name']?? '' }}" placeholder="City Name">
                                            @error("cities.$i.name")
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" style="visibility:hidden;">placeholder</label>
                                            <button type="button" class="btn btn-label-danger" data-repeater-delete>
                                                <i class="bx bx-x me-1"></i>
                                                <span class="align-middle">Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="row mb-3" data-repeater-item>
                                    <div class="col-md-4">
                                        <label class="form-label" for="inputZipcode">Zipcode</label>
                                        <input type="text" id="inputZipcode" name="zipcode" class="form-control" value="{{ old('zipcode') }}" placeholder="Zipcode">
                                        @error('zipcode')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label" for="inputName">City Name</label>
                                        <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="City Name">
                                        @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" style="visibility:hidden;">placeholder</label>
                                        <button type="button" class="btn btn-label-danger" data-repeater-delete>
                                            <i class="bx bx-x me-1"></i>
                                            <span class="align-middle">Delete</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @error('cities')
                            <div class="invalid-feedback d-block mb-3">{{ $message }}</div>
                        @enderror
                        <div class="mb-0">
                            <button type="button" class="btn btn-primary" data-repeater-create>
                                <i class="bx bx-plus me-1"></i>
                                <span class="align-middle">Add More</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@section('page-script')
@parent
<script>
    window.addEventListener('load', function () {
        $("#inputRegionId").select2();
        $("#inputCountryId").select2();
    });
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
@endsection