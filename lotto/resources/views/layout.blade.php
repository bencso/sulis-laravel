<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/mystyle.css">
</head>

<body>
    <div class="container-fluid bg-dark">
        <nav class="container navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Húzások</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mikor">Mikor volt ötös?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/random">Számtippelő</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ujhuzas">Új húzás</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container py-3">
        @yield('content')
    </div>
    <div class="container-fluid bg-dark text-center text-white">
        <footer class="pt-3 pb-1 fs-5">
            <p>@yield('footer')</p>
        </footer>
    </div>
</body>

</html>
