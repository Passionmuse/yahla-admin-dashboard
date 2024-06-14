<form id="createForm" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputTitle">Title</label>
                    <input type="text" id="inputTitle" name="title" class="form-control" value="{{ old('title') }}" placeholder="Post Title">
                    @error('title')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="inputContent">Content</label>
                    <div class="input-group input-group-merge">
                        <textarea class="form-control" id="inputContent" name="content" placeholder="Post Content" rows="6">{{ old('content') }}</textarea>
                        @error('content')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="imageInput">Image</label>
                    <input type="file" name="image" id="imageInput" class="form-control">
                    @error('image')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="statusInput">Status</label>
                    <select class="form-control" name="status" id="statusInput">
                        <option value="1" selected>Active</option>
                        <option value="0" {{ old('status') === '0'? 'selected': '' }}>Disabled</option>
                    </select>
                    @error('status')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>