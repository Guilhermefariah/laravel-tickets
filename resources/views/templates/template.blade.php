<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD Laravel</title>
</head>

<body style="font-family: 'sans-serif'; background-color: #fff;">
    <nav class="bg-light border-bottom">
        <ul class="nav justify-content-left">
            <li class="nav-item">
                <a class="nav-link active text-primary font-weight-bold" aria-current="page"
                    href="{{ url('sellers') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold" aria-current="page"
                    href="{{ route('tickets.index') }}">Tickets</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-4">
        <h1 class="text-center text-dark font-weight-bold">CRUD Laravel</h1>
        <div class="border p-3 bg-light">
            @yield('content')
        </div>
    </div>
    <script src="{{ url('assets/js/javascript.js') }}"></script>
</body>

</html>
