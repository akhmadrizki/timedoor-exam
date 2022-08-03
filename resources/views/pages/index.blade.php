@extends('layout.app')

@section('content')

<form action="#">
  <div class="mb-3 row">
    <label for="list" class="col-sm-2 col-form-label">List Shown</label>
    <div class="col-sm-5">
      <select class="form-select" id="list" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="search" class="col-sm-2 col-form-label">Search</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="search">
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="button" class="btn btn-primary">Submit</button>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

@endsection