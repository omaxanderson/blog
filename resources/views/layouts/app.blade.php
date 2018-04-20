<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
<!--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-nav navbar-expand-sm navbar-dark bg-dark justify-content-between sticky-top">
            <!-- Branding Image -->
            <a class="navbar-brand ml-3" href="{{ url('/posts') }}">A Coders's Life</a>

            <div class='collapse navbar-collapse d-flex justify-content-end'>
              <ul class='navbar-nav'>
                <li class='nav-item mx-2'>
                  <a class='nav-link' href='/about'>About</a>
                </li>
                <li class='nav-item mx-2'>
                  <a class='nav-link' href='/contact'>Contact</a>
                </li>
              </ul>
              <form class='form-inline ml-3' action='/search' method='get'>
                <input class='form-control mr-2' type='search' name='q' placeholder='Search posts' aria-label='Search posts'>
                <button class='btn btn-outline-info' type='submit'>Search</button>
            </div>

        </nav>
        <div class='container mt-3'>
          @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
