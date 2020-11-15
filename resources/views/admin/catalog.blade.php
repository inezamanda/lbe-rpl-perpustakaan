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

    <!--Section: Products v.3-->
    <section class="text-center mb-4">

      <!--Grid row-->
      <div class="row wow fadeIn">
        
            
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
          @if ($status ?? '')
            @foreach ($books as $book)
            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{asset('img/cover/Bumi Manusia.jpg')}}" class="card-img-top px-2 pt-2" alt="Book Title">
                <a href=" {{route('admin.show',['id' => $book->id])}} ">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href=" {{route('admin.show',['id' => $book->id])}} " class="grey-text">
                  <h5>{{$book->author}}</h5>
                </a>
                <h5>
                  <strong>
                    <a href=" {{route('admin.show',['id' => $book->id])}} " class="dark-grey-text">{{$book->title}}</a>
                  </strong>
                </h5>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->
            @endforeach
          @else
          @endif
          </div>
          <!--Grid column-->


      </div>

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
