
<form id="editForm{{ $ad->id }}" class="edit-form" method="POST" action="{{ route('manage-ads.update',$ad->id) }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <h5 class="mb-4">Ads</h5>
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Title</label>
                    <input type ="text" class="form-control" name="title" placeholder="title" value="{{ $ad->title ?? '' }}" />
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Description</label>
                    <textarea  class="form-control" name="description" placeholder="description">{{ $ad->description ?? '' }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="fullname">Start Date</label>
                    <input type="date" class="form-control" name="start_date" placeholder="start date" value="{{ $ad->start_date ?? '' }}"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="fullname">End Date</label>
                    <input type="date" class="form-control" name="end_date" placeholder="end date" value="{{ $ad->end_date ?? '' }}"/>
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Budget</label>
                    <input type ="text" class="form-control" name="budget" placeholder="budget" value="{{ $ad->budget ?? '' }}"/>
                </div>
            </div>
        </div>
    </div>
</form>
