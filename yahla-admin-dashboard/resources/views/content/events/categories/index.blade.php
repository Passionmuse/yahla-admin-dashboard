@extends('layouts/layoutMaster')

@section('title', 'Event Categories - List')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('content')
<div class="d-flex justify-content-between">
  <div>
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Event Categories /</span> All Categories
</h4>
</div>
<div class="">
    <a href="{{ route('events.categories.create') }}">
      <button class="btn btn-primary">Add Category</button>
    </a>
</div>
</div>
  <!-- Basic Bootstrap Table -->
  <div class="card">
    <h5 class="card-header">Event Categories List</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @forelse($categories as $category)
          <tr>
            <td>{{ $category->name }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('events.categories.edit', $category->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <form action="{{ route('events.categories.destroy', $category->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @empty
          <tr>
            <td class="text-center" colspan="2"><b>No categories found.<b></td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->
@endsection
