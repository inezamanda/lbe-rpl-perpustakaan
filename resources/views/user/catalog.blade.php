@extends('user.app')
@section('title', 'Catalog - Library App')

@section('content')
  <h2 class="text-uppercase mb-4 wow fadeIn">Catalog</h2>

  <!--Section: Products v.3-->
  <section class="text-center mb-4">

    <!--Grid row-->
    <div class="row wow fadeIn">
      
          
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="{{ asset('img/cover/Bumi Manusia.jpg') }}" class="card-img-top px-2 pt-2" alt="Book Title">
              <a href="">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body text-center">
              <!--Category & Title-->
              <a href="" class="grey-text">
                <h5>Pramoedya Ananta Toer</h5>
              </a>
              <h5>
                <strong>
                  <a href="" class="dark-grey-text">Bumi Manusia </a>
                </strong>
              </h5>

            </div>
            <!--Card content-->

          </div>
          <!--Card-->

        </div>
        <!--Grid column-->

    

    </div>
    <!--Grid row-->

  </section>
  <!--Section: Products v.3-->


  <!--Section: Products v.3-->
  <section class="text-center mb-4">

    <!--Grid row-->
    <div class="row wow fadeIn">
      
          
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card image-->
            <div class="view overlay">
              <img src="{{ asset('img/cover/Daun Yang Jatuh Tak Pernah Membenci Angin.jpg') }}" class="card-img-top px-2 pt-2" alt="Book Title">
              <a href="">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!--Card image-->

            <!--Card content-->
            <div class="card-body text-center">
              <!--Category & Title-->
              <a href="" class="grey-text">
                <h5>Tere Liye</h5>
              </a>
              <h5>
                <strong>
                  <a href="" class="dark-grey-text">Daun Yang Jatuh Tak Pernah Membenci Angin </a>
                </strong>
              </h5>

            </div>
            <!--Card content-->

          </div>
          <!--Card-->

        </div>
        <!--Grid column-->

    

    </div>
    <!--Grid row-->

  </section>
  <!--Section: Products v.3-->


@endsection
