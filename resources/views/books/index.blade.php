@extends('layout')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <h1 class="text-center my-4 text-primary">Books List</h1>

    <div class="container">
        @if($books->count())
            <div class="row">
                @foreach($books as $book)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow border-primary">
                            <div class="card-body">
                                <h5 class="card-title text-info">{{ $book->title }}</h5>
                                <p class="card-text">by <strong class="text-dark">{{ $book->author }}</strong></p>
                                <p class="card-text"><small class="text-muted">Published: {{ $book->year_published }}</small></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No books available.</p>
        @endif

        <div class="text-center mt-4">
            <a href="/books/create" class="btn btn-success"><i class="fas fa-plus"></i> Add New Book</a>
        </div>
    </div>
@endsection
