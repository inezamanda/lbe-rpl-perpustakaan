@extends('admin.app')
@section('title', 'Add New Book - Library App')
@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <form action="{{ route('admin.createpost')}}" method="post">
  @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
      <label for="title">Book Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
          
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author" name="author">
    </div>
    
    <div class="form-group">
      <label for="location">location</label>
      <input type="text" class="form-control" id="location" name="location">
    </div>

    <div class="form-group">
      <label for="publisher">Publisher</label>
      <input type="text" class="form-control" id="publisher" name="publisher">
    </div>

    <div class="form-group">
      <label for="print_year">Print Year</label>
      <input type="text" class="form-control" id="print_year" name="print_year">
    </div>
          
    <button type="submit" class="btn btn-primary">Add New Book</button>
  </form>
@endsection
