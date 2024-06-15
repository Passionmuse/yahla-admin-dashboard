<form id=createForm method="POST" action="#" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Select Reason</label>
                    <select class="form-control">
                        <option selected disabled>Select Request</option>
                        <option>Reason 1</option>
                        <option>Reason 2</option>
                        <option>Reason 3</option>
                    </select>
                </div>
               
        </div>
    </div>
    </div>
</form>