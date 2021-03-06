<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Old sale - @yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="" class="navbar-brand">Old Sale</a>

    <form action="" method="GET" class="form-inline mx-auto">
        <input type="search" name="search" class="form-control" size="70">
        <input type="submit" name="find" class="btn btn-danger">
    </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="" class="btn btn-outline-danger">Sell Online</a></li>
    </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <ul class="navbar-nav">
        <li class="nav-item"><a href="" class="nav-link text-white">Furniture</a></li>
        <li class="nav-item"><a href="" class="nav-link text-white">Mobile</a></li>
        <li class="nav-item"><a href="" class="nav-link text-white">Laptops</a></li>
    </ul>
</nav>

@section('content')

    @show()

    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>