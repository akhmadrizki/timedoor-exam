<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h1 class="text-center">BookStore</h1>
        <ul class="nav justify-content-center text-capitalize">
          <li class="nav-item">
            <a class="nav-link" href="1">List Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="2">Top 10 most famous author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="3">input rating</a>
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
</body>

</html>