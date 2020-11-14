@extends('admin.app')
@section('title', 'Edit Book - Library App')
@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <form action="{{ route('admin.editput', ['id' => $book->id])}}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
      <label for="title">Book Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
    </div>
    
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
    </div>
          
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" name="location" value="{{ $book->location }}">
    </div>

    <div class="form-group">
      <label for="publisher">Publisher</label>
      <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
    </div>

    <div class="form-group">
      <label for="print_year">Print Year</label>
      <input type="text" class="form-control" id="print_year" name="print_year" value="{{ $book->print_year }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Save Changes</button>
      </form>
@endsection
