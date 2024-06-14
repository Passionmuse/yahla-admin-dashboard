<form id="create{{ isset($enableParentCategory) && $enableParentCategory? 'Subcategory': '' }}Form" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if (isset($enableParentCategory) && $enableParentCategory)
        <input type="hidden" name="showCreateSubcategoryFormModal" value="1">
    @else
        <input type="hidden" name="showCreateFormModal" value="1">
    @endif
    <input type="hidden" name="target" value="{{ $target }}">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    @if (isset($enableParentCategory) && $enableParentCategory)
                    <div class="mb-3">
                        <label class="form-label" for="inputName">Select Category</label>
                        <select id="inputSubcategory" name="parent_id" class="form-control">
                            <option value="">Choose</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div>
                        <label class="form-label" for="inputName">Name</label>
                        <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Category Name">
                    </div>
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</form>