<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        header { background: #333; color: white; padding: 20px; text-align: center; }
        nav { margin: 10px; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        footer { background: #eee; padding: 10px; text-align: center; position: fixed; bottom: 0; width: 100%; }
        .content { padding: 20px; }
    </style>
</head>
<body>
    <header>
        <h2>Website Của Tôi</h2>
        <nav>
            <a href="{{ url('/') }}">Bài 1</a>
            <a href="{{ url('/products') }}">Bài 2</a>
        </nav>
    </header>

    <div class="content">
        @yield('main-content')
    </div>

    <footer>
        <p>© 2026 - Học Laravel cơ bản</p>
    </footer>
</body>
</html>