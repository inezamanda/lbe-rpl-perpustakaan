<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Catalogue</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('libraries/e-commerce/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('libraries/e-commerce/css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('libraries/e-commerce/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body>
  
  <!--Side Navbar-->
  <div class="sidenav wow fadeIn">
    <h4 class="font-weight-bold text-center text-uppercase">Library Apps</h4>
    <hr class="divider my-1">
    <h6 class="font-weight-bold text-center mt-2">Admin Page</h6>
    <div class="option">
      <a href="{{ url('/admin/index') }}" id="book-tracker">
          <span>Dashboard </span>
          <img src="{{ asset('img/menu_1.png') }}">
      </a>
      
      <a href="{{ url('/admin/catalog') }}" class="active" id="catalog">
          <span>Catalog </span>
          <img src="{{ asset('img/menu_2.png') }}">
      </a>

      <a href="{{ url('/admin/member') }}" id="member">
          <span>Member </span>
          <img src="{{ asset('img/menu_4.png') }}">
      </a>
    </div>
    <a class="nav-link logout mx auto" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
      </form>
  </div>

  <!--Main layout-->
  <main class="main-container">
    <h2 class="wow fadeIn">Catalogue</h2>
    <a href="{{ url('/admin/create') }}" class="btn btn-amber text-center mb-4 wow fadeIn">Add new book</a>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!--Section: Products v.3-->
    <section class="text-center mb-4">
    @if ($status ?? '')
    <div class="row row-cols-4 mx-4">
      @foreach ($books as $book)
        <div class="d-flex">
          <div class="card m-3" style="width: 18rem;">
           <div class="card-body">
            <h5 class="card-title">{{$book->title}}</h5>
              <!-- <p>{{$book->author}}</p>
              <p>{{$book->location}}</p>
              <p>{{$book->publisher}}</p> -->
              <p>{{$book->print_year}}</p>
              <a href="{{route('admin.edit',['id' => $book->id])}}" class="btn btn-info btn-sm">Edit</a>
              a href="{{route('admin.delete',['id' => $book->id])}}" class="btn btn-danger btn-sm">Delete</a>
              a href="{{route('admin.show',['id' => $book->id])}}" class="btn btn-warning btn-sm">Show Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    @else
    @endif
    </section>
    <!--Section: Products v.3-->


  </main>
  <!--Main layout-->

  <!-- SCRIPTS -->
  <!-- JQuery -->

  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <script src=""></script>
</body>

</html>
