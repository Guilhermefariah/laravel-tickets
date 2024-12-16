<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>CRUD Laravel</title>
</head>
<body style="font-family: 'sans-serif'; background-image: url('https://images.pexels.com/photos/12781543/pexels-photo-12781543.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover"> 
    <nav>
        <ul class="nav justify-content-left">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ url('sellers') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('tickets.index') }}">Tickets</a>
            </li>
        </ul>
    </nav>   
    <div>
        <h1 class="text-center text-white font-bold text-3xl">CRUD Laravel</h1>
        @yield('content')
    </div>
    
    <script src="{{ url('assets/js/javascript.js') }}"></script>
</body>
</html>