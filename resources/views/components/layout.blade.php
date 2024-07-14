<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active':'' }}" aria-current="{{ request()->is('/') ? 'page': false }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active':'' }}" aria-current="{{ request()->is('about') ? 'page': false }}" href="/about">About Me</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active':'' }}" aria-current="{{ request()->is('contact') ? 'page': false }}" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->is('blogs') ? 'active':'' }}" aria-current="{{ request()->is('blogs') ? 'page': false }}" href="/blogs">My Blogs</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome Back {{ auth()->user()->name }}</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                @endauth
                </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>