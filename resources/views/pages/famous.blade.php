@extends('layout.app')

@section('content')
<table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Author Name</th>
      <th scope="col">Voter</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($authors as $author)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $author->author_name }}</td>
      <td>{{ $author->ratings_sum_value }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection