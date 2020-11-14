@extends('admin.app')
@section('title', 'Dashboard - Library App')
@section('content')
    @if ($status ?? '')
        <div class="d-flex flex-wrap">
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
                            <a href="{{route('admin.delete',['id' => $book->id])}}" class="btn btn-danger btn-sm">Delete</a>
                            <a href="{{route('admin.show',['id' => $book->id])}}" class="btn btn-warning btn-sm">Show Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
    @endif
@endsection
