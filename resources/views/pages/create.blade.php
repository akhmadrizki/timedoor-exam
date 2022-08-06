@extends('layout.app')

@section('content')

<form action="{{ route('input.store') }}" method="POST">
  @csrf
  <div class="mb-3 row">
    <label for="author" class="col-sm-2 col-form-label">Book Author</label>
    <div class="col-sm-5">
      <select class="form-select" name="author" id="author" aria-label="Default select example">
        <option selected disabled>Select Author</option>
        @foreach ($authors as $author)
        <option value="{{ $author->id }}">{{ $author->author_name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="list" class="col-sm-2 col-form-label">Book Name</label>
    <div class="col-sm-5">
      <select class="form-select form-select dynamic" name="book" data-dependent="book" id="book"></select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="list" class="col-sm-2 col-form-label">Rating</label>
    <div class="col-sm-5">
      <select class="form-select" name="rating" id="list" aria-label="Default select example">
        <option selected disabled>Select Rating</option>
        @for ($shown = 1; $shown <= 10; $shown++) <option value={{$shown}}>{{ $shown }}</option>
          @endfor
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
      <button type="sumbit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection

@section('js')
<script type="text/javascript">
  $('#author').change(function(){
    const getUrl = window.location.origin+'/input-rating/fetch/'+this.value
    $.ajax({
    url: getUrl,
    method: 'GET',
    success:function(data){
      const books = data.map(function(d){
        return `<option value='${d.id}'>${d.book_name}</option>`
      })

      $('#book').html(books)
    }
    });
  })
</script>
@endsection