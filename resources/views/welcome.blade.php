@extends('layout')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div class="container">
        <h1 class="text-center my-4 text-primary">Welcome to the Books App</h1>
        <p class="text-center">Discover and manage your favorite books.</p>
        <div class="text-center mt-4">
            <a href="{{ route('books.index') }}" class="btn btn-primary"><i class="fas fa-book"></i> View Books</a>
        </div>
    </div>
@endsection
