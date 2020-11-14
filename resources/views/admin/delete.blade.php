@extends('admin.app')
@section('title', 'Add New Book - Library App')
@section('content')
  <form action="{{ route('admin.delete', ['id' => $book->id])}}" method="post">
    @csrf
    @method('DELETE')
    <p>Are you sure you wanna delete book {{ $book->title }}</p>
    <a href="{{route('admin.index')}}" class="btn btn-warning">Cancel</a>
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
@endsection
