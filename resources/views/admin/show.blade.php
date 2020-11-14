@extends('admin.app')
@section('title', 'Dashboard - Library App')
@section('content')
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=853&q=80" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Author : {{$book->author}}</li>
                <li class="list-group-item">Location : {{$book->location}}</li>
                <li class="list-group-item">Publisher : {{$book->publisher}}</li>
                <li class="list-group-item">Print Year : {{$book->print_year}}</li>
            </ul>
            <div class="card-body">
                <a href="{{route('admin.index')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
@endsection