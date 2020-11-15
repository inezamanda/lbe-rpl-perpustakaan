@extends('user.app')
@section('title', 'Catalog - Library App')
@section('content')
  <div class="container dark-grey-text mt-3">
    <h2 class="wow fadeIn">Product Detail</h2>
    <a href="{{ url('/user/catalog') }}" class="btn btn-yellow text-center mb-4 wow fadeIn">Back</a>

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
          <img src="{{ asset('img/cover/Bumi Manusia.jpg') }}" class="img-fluid" alt="Cover">
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <p class="lead font-weight-bold">{{$book->title}}</p>

            <table class="table table-borderless table-sm table-hover">
              <tbody>
                <tr>
                  <th scope="row">Author</th>
                  <td>{{$book->author}}</td>
                </tr>
                <tr>
                  <th scope="row">Location</th>
                  <td>{{$book->location}}</td>
                </tr>
                <tr>
                  <th scope="row">Publisher</th>
                  <td>{{$book->publisher}}</td>
                </tr>
                <tr>
                  <th scope="row">Print Year</th>
                  <td>{{$book->print_year}}</td>
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