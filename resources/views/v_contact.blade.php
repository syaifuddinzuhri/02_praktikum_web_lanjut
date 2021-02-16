<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Contact Us</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="{{ route('home.index') }}">PWL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home.index') }}">Home </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @php
                                $slug1 = Str::slug('Marbel - Educational Games');
                                $slug2 = Str::slug('Marbel & Friends - Kids Games');
                                $slug3 = Str::slug('Riri - Story Books');
                            @endphp
                            <a class="dropdown-item"
                                href="{{ route('category.showproducts', ['category' => $slug1]) }}">Marbel -
                                Educational Games</a>
                            <a class="dropdown-item"
                                href="{{ route('category.showproducts', ['category' => $slug2]) }}">Marbel & Friends -
                                Kids Games</a>
                            <a class="dropdown-item"
                                href="{{ route('category.showproducts', ['category' => $slug3]) }}">Riri - Story
                                Books</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('news.index') }}">News </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                                href="{{ route('program.list', ['program' => 'karir']) }}">Karir</a>
                            <a class="dropdown-item"
                                href="{{ route('program.list', ['program' => 'magang']) }}">Magang
                            </a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('aboutus.index') }}">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('contact-us.index') }}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                </ul>
            </div>
        </div>
    </nav>

    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('contact-us.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="messages">Mesages</label>
                                    <textarea class="form-control" name="messages" id="messages" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
