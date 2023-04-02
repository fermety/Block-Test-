<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.index') }}">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" name="admin" href="{{ route('moder.main.index') }}" >Войти</a>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')
</body>
</html>
