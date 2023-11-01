<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyectos - Kevin Alexander Ocotán Morales</title>
    
    <link rel="icon" href="{{ asset('images/logo-gobierno.png') }}" type="image/png">
    
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .main-footer {
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
        }

        .main-footer a {
            color: #ffffff;
        }

        .main-footer a:hover {
            color: #17a2b8;
        }
    </style>
</head>
<body>
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="main-footer">
        <div class="container">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2023 - <a>Kevin Alexander Ocotán Morales</a>.</strong>
        </div>
    </footer>
</div>
@yield('third_party_scripts')
@stack('page_scripts')
</body>
</html>
