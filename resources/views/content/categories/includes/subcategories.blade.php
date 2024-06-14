<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @forelse($subcategories as $subCat)
            <tr>
            <td>{{ $subCat->id }}</td>
            <td>{{ $subCat->name }}</td>
            <td>
                <div class="d-flex justify-content-start align-items-center gap-1">
                <span data-bs-toggle="modal" data-bs-target="#editSubcategoryModal{{ $subCat->id }}" data-bs-dismiss="modal">
                    <button class="btn p-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i class="bx bx-edit"></i></button>
                </span>

                <form action="{{ route('categories.destroy', $subCat->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-icon p-0" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                </form>
                </div>
                @section('modals')
                    <x-modal
                    id="editSubcategoryModal{{ $subCat->id }}"
                    title="Edit Subcategory" 
                    saveBtnText="Update"
                    saveBtnType="submit"
                    saveBtnForm="editForm{{ $subCat->id }}"
                    size="sm"
                    :show="old('showEditFormModal'.$subCat->id)? true: false"
                    >
                    @include('content.categories.includes.edit_form', ['enableParentCategory' => true, 'category' => $subCat])
                    </x-modal>
                @endsection
            </td>
            </tr>
            @empty
            <tr>
            <td class="text-center" colspan="3"><b>No subcategories found.<b></td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>