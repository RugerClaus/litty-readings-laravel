<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Lit Panel</title>
</head>
@guest
    <body>
        <main>
            <h1 style="height: 100vh; display:flex;align-items:center;justify-content:center; flex-direction:column;">
                Must be logged in to view this page. 
                <a href="login_page">Log In</a>
            </h1>
        </main>
    </body>
@else

<body>
    <nav>
        <a href="/">Home</a>
        <a href="#" id="servicestab" class="servicesTab">Services</a>
        <a href="/article_manager">Articles</a>
        <form action="{{route('admin.logout')}}" method="post">
            @csrf
            <input type="submit" value="Logout" class="btn">
        </form>
    </nav>
    
    <section class="subNav"></section>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
    
@endguest
</html>