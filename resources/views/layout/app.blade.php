<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <style>
    .text-black a {
      color: #333;
    }

    .active {
      color: #0096b5 !important;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h1 class="text-center">BookStore</h1>
        <ul class="nav justify-content-center text-capitalize text-black">
          <li>
            <a class="nav-link {{ Request::route()->getName() == 'landing' ? 'active' : null }}"
              href="{{ route('landing') }}">List Books</a>
          </li>
          <li>
            <a class="nav-link {{ Request::route()->getName() == 'famous.author' ? 'active' : null }}"
              href="{{ route('famous.author') }}">Top 10 most famous author</a>
          </li>
          <li>
            <a class="nav-link {{ Request::route()->getName() == 'input.create' ? 'active' : null }}"
              href="{{ route('input.create') }}">input rating</a>
          </li>
        </ul>
        <hr>
      </div>
    </div>

    @yield('content')

    <div class="row align-items-end">
      <div class="col-12">
        <hr>
        <p>Copyright &copy; {{ date('Y') }} - Akhmad Rizki Prayoga 🔥</p>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
  @yield('js')
</body>

</html>