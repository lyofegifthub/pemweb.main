<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel | Mahasiswa')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            color: #e8e8e8;
        }
        .navbar-dark {
            background: linear-gradient(90deg, #050505, #2d2d55);
        }
        .nav-link.active {
            font-weight: bold;
            text-decoration: underline;
            color: #4b7bec !important;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(255,255,255,0.04);
        }
        .card-header {
            background-color: #0a0a0a !important;
            color: #fff;
            border-bottom: 1px solid #333;
        }
        .btn-primary {
            background-color: #4b7bec;
            border: none;
        }
        .btn-secondary {
            background-color: #636e72;
            border: none;
        }
        .btn-warning {
            background-color: #feca57;
            border: none;
            color: black;
        }
        .btn-danger {
            background-color: #ee5253;
            border: none;
        }
        input, textarea, select {
            background-color: #2c2c2c !important;
            color: #fff !important;
            border: 1px solid #444 !important;
        }
        table thead {
            background-color: #2d3436;
        }
        table tbody tr {
            background-color: #1e272e;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-dark px-3">
    <a class="navbar-brand fw-bold text-white" href="/">Laravel Dark</a>
    <div>
        <a href="{{ route('form') }}" 
           class="nav-link d-inline text-white {{ request()->routeIs('form') ? 'active' : '' }}">
           Form
        </a>

        <a href="{{ route('table') }}" 
           class="nav-link d-inline text-white {{ request()->routeIs('table') ? 'active' : '' }}">
           Table
        </a>
    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
