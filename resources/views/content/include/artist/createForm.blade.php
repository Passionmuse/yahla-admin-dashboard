@php
$countries = \App\Models\Country::get();
@endphp

<form id="createForm" method="POST" action="{{ route('artist.store') }}" enctype="multipart/form-data">
    @csrf
   
        <p>Add Artist here</p>
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="country">Country</label>
                <select name="country_id" class="form-select">
                    <option selected>Select Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="gender">Gender</label>
                <select name="gender" class="form-select">
                    <option selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-md-12 text-center">
                <div class="profile-pic">
                    <label class="-label" for="file">
                        <i class="fas fa-pencil-alt"></i>
                    </label>
                    <input id="file" type="file" name="image" onchange="loadFile(event)" />
                    <img src="https://via.placeholder.com/150" id="output" class="rounded-circle" />
                </div>
            </div>
            <div class="col-md-12">
                <label class="form-label" for="artist">Artist</label>
                <input type="text" id="artist" class="form-control" placeholder="Artist Name and Lastname" name="name">
            </div>
            <div class="col-md-12">
                <label class="form-label" for="status">Status</label>
                <select class="form-select" name="status">
                    <option selected>Select Status</option>
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
                </select>
            </div>
        </div>
   
</form>

<style>
    .container {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .profile-pic {
        position: relative;
        display: inline-block;
        width: 150px;
        height: 150px;
    }
    .profile-pic .-label {
        cursor: pointer;
        height: 150px;
        width: 150px;
        position: absolute;
        top: 0;
        left: 0;
        color: white;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s;
    }
    .profile-pic:hover .-label {
        opacity: 1;
    }
    .profile-pic input {
        display: none;
    }
    .profile-pic img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }
</style>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

<!-- Font Awesome for the pencil icon -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
