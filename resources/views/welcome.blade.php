<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('libraries/fontawesome/css/all.min.css') }}"> 

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/index.css') }}">


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/index.js') }}"></script>

  <title>Library Apps</title>
</head>

<body data-spy="scroll" data-target="#mainNav" data-offset="50">
  <!--navbar-->
  <nav class="navbar transparent navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">Library Apps</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-nav navbar-right">
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-2"></i>{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user mr-2"></i>{{ __('Register') }}</a>
            </li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        @endguest
      </div>
    </div>
  </nav>

  <!--MastHead-->
  <header class="masthead" id="home">
      <div class="container h-100">
          <div class="row h-100 align-items-center justify-content-center text-center">
              <div class="col-lg-10 align-self-end">
                  <h1 class="text-uppercase text-white font-weight-bold">Book Library</h1>
                  <hr class="divider my-5" />
              </div>
              <a class="col-lg-8 align-self-baseline" href="{{ route('login') }}"> 
                  <button class="button"><i class="fas fa-book-reader"></i> Let's Read</button>
              </a>
          </div>
      </div>
  </header>
    
</body>
</html>