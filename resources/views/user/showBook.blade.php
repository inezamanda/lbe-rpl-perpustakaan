@extends('user.app')
@section('title', 'Catalog - Library App')
@section('content')
  <div class="container dark-grey-text mt-3">
    <h2 class="wow fadeIn">Product Detail</h2>
    <a href="" class="btn btn-yellow text-center mb-4 wow fadeIn">Back</a>

    @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
    <!--Main layout-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-3 mb-4">
          <img src="{{ asset('img/cover/Bumi Manusia.jpg') }}" class="img-fluid" alt="Book Cover">
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <p class="lead font-weight-bold">Bumi Manusia</p>

            <table class="table table-borderless table-sm table-hover">
              <tbody>
                <tr>
                  <th scope="row">Author</th>
                  <td>Pramoedya Ananta Toer</td>
                </tr>
                <tr>
                  <th scope="row">Location</th>
                  <td>Lokasi</td>
                </tr>
                <tr>
                  <th scope="row">Publisher</th>
                  <td>Hasta Mitra</td>
                </tr>
                <tr>
                  <th scope="row">Print Year</th>
                  <td>1980</td>
                </tr>
              </tbody>
            </table>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

  </div>
@endsection