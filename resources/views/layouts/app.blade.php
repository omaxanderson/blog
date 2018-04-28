<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>A Coder's Life</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon"  href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
    <script src="{{ asset('js/posts.js') }}" type="text/javascript"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:200|Cormorant+Garamond|Crimson+Text|Lora|Pompiere" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-nav navbar-expand-sm navbar-dark bg-dark justify-content-between sticky-top garamond-text">
            <!-- Branding Image -->
            <a class="navbar-brand ml-3 " href="{{ url('/') }}">Code</a>

            <div class='collapse navbar-collapse d-flex justify-content-end'>
              <ul class='navbar-nav'>
                @php
                  if (Auth::check()) {
                    echo "<li class='nav-item mx-2'>
                            <a class='nav-link' href='/admin'>Dashboard</a>
                          </li>";
                    echo "<li class='nav-item mx-2'>
                            <a class='nav-link' href='/logout'>Logout</a>
                          </li>";
                  }
                @endphp
                <li class='nav-item mx-2'>
                  <a class='nav-link' href='/posts'>Posts</a>
                </li>
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
              </form>
            </div>

        </nav>
        <div class='container garamond-text'>
          <div class='col-sm-10 offset-sm-1 main-section mt-0 pt-5'>
            <div class='col-sm-10 offset-sm-1'>
              @yield('content')
            </div>
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
