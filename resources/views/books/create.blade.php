@extends('layout')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <h1 class="text-center my-4 text-primary">Add New Book</h1>

    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header bg-info text-white text-center">
                <h4 class="mb-0"><i class="fas fa-book"></i> Enter Book Details</h4>
            </div>
            <div class="card-body">
                <form action="/books" method="POST">
                    @csrf 

                    <div class="form-group">
                        <label for="title" class="text-success">Book Title:</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter book title" required>
                    </div>

                    <div class="form-group">
                        <label for="author" class="text-success">Author:</label>
                        <input type="text" class="form-control" name="author" id="author" placeholder="Enter author's name" required>
                    </div>

                    <div class="form-group">
                        <label for="year_published" class="text-success">Year Published:</label>
                        <input type="number" class="form-control" name="year_published" id="year_published" placeholder="Enter year of publication" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Add Book</button>
                </form>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="/books" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i> Back to Book List</a>
        </div>
    </div>
@endsection
