@extends('admin.app')
@section('title', 'Edit Book - Library App')
@section('content')
  <h2 class="text-uppercase">Edit Book</h2>
  <a href="" class="btn btn-yellow text-center mb-4 wow fadeIn">Back</a>

  <div class="row">
    <div class="col-md-6">
      <!-- Default form login -->
      <form class="text-center border border-light p-5" action="" enctype="multipart/form-data" method="POST">
        @csrf
        @method('put')
        <div class="form-group row">
          <label for="title">{{ __('Title') }}</label>
          <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title" autofocus>
          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group row">
          <label for="image">{{ __('Upload Cover') }}</label>
          <input id="image" type="file" class="form-control" name="image" value="">
        </div>
        <div class="form-group row">
          <label for="author">{{ __('Author') }}</label>
          <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="" required autocomplete="author">
          @error('author')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group row">
          <label for="location">{{ __('Location') }}</label>
          <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="" required autocomplete="location">
          @error('location')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group row">
          <label for="publisher">{{ __('Publisher') }}</label>
          <input id="publisher" type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" value="" required autocomplete="publisher">
          @error('publisher')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group row">
          <label for="print_year">{{ __('Print Year') }}</label>
          <input id="print_year" type="number" class="form-control @error('print_year') is-invalid @enderror" name="print_year" value="" required autocomplete="print_year">
          @error('print_year')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        

        <!-- Sign in button -->
        <button class="btn btn-amber btn-block my-4" type="submit">Edit book</button>

      </form>
      <!-- Default form login -->
      
    </div>
  </div>

@endsection
