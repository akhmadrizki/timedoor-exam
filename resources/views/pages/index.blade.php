@extends('layout.app')

@section('content')

<div class="col-12">
  @if (session('message'))
  <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
</div>

<form action="{{ route('landing') }}" method="GET">
  <div class="mb-3 row">
    <label for="list" class="col-sm-2 col-form-label">List Shown</label>
    <div class="col-sm-5">
      <select class="form-select" name="shown" id="list" aria-label="Default select example">
        <option selected disabled>Select Here</option>
        @for ($shown = 10; $shown <= 100; $shown=$shown+10) <option value={{$shown}}>{{ $shown }}</option>
          @endfor
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="search" class="col-sm-2 col-form-label">Search</label>
    <div class="col-sm-5">
      <input type="search" value="{{ request('search') }}" class="form-control" name="search" id="search">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="sumbit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Book Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Average Rating</th>
      <th scope="col">Voter</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $book->book_name }}</td>
      <td>{{ $book->category->category_name }}</td>
      <td>{{ $book->author->author_name }}</td>
      <td>{{ round($book->ratings->avg('value'), 2) }}</td>
      <td>{{ count($book->ratings) }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection