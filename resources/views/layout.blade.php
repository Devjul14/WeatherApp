<!DOCTYPE html>
<html>

<head>
    <title>Weather App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <main role="main" class="flex-shrink-0">
        <nav class="navbar navbar-light">
            <div class="container">

                <a class="navbar-brand" href="http://127.0.0.1:8000/weather">
                    <b class="my-text"> Weather App</b>
                </a>
            </div>
        </nav>

        @yield('content')

    </main>
</body>

</html>