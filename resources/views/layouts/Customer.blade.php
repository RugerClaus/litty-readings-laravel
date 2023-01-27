<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litty Readings || @yield('title')</title>
    <link rel="font" href="SpecialElite-Regular.ttf">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <div class="mobileNav">
        <img class="menuBtn" src="{{asset('images/hamburgerButton.svg')}}" alt="">
    </div>
    <div class="logobox">
        <a class="logo" href="index.php">
            <img href="index.php" src="{{asset('images/headerlogo.webp')}}" alt="">
        </a>
        <header class="header">
            <div class="innerHeader">
                <div class="socmed">
                    <a href="https://facebook.com" class="facebook">
                        <img src="{{asset('images/facebook.webp')}}" alt="" />
                    </a>
                    <a href="https://instagram.com" class="insta">
                        <img style="width: 30px;" src="{{asset('images/instagram.svg')}}" alt="">
                    </a>
                    <a href="https://twitter.com" class="twitter">
                        <img src="{{asset('images/twitter.webp')}}" alt="" />
                    </a>
                </div>
                
                <nav>
                    @if (Request::route()->getName() === 'cust.home')
                    <a class="navButton" id="homeButton" type="submit" name="home" style="color: aqua;" value="Home" href="{{route('cust.home')}}">Home</a>
                    <a class="navButton" id="servicesButton" href="{{route('cust.services')}}">Services</a>
                    <a href="{{route('cust.contact')}}" class="navButton" id="contactButton">Contact</a>
                    <a href="{{route('cust.blog')}}" class="navButton" id="blogButton">Blog</a>
                    @endif
                    @if (Request::route()->getName() === 'cust.services')
                    <a class="navButton" id="homeButton" type="submit" name="home" value="Home" href="{{route('cust.home')}}">Home</a>
                    <a class="navButton" id="servicesButton" style="color: aqua;" href="{{route('cust.services')}}">Services</a>
                    <a href="{{route('cust.contact')}}" class="navButton" id="contactButton">Contact</a>
                    <a href="{{route('cust.blog')}}" class="navButton" id="blogButton">Blog</a>
                    @endif
                    @if (Request::route()->getName() === 'cust.contact')
                    <a class="navButton" id="homeButton" type="submit" name="home" value="Home" href="{{route('cust.home')}}">Home</a>
                    <a class="navButton" id="servicesButton" href="{{route('cust.services')}}">Services</a>
                    <a href="{{route('cust.contact')}}" style="color: aqua;" class="navButton" id="contactButton">Contact</a>
                    <a href="{{route('cust.blog')}}" class="navButton" id="blogButton">Blog</a>
                    @endif
                    @if (Request::route()->getName() === 'cust.blog')
                    <a class="navButton" id="homeButton" type="submit" name="home" value="Home" href="{{route('cust.home')}}">Home</a>
                    <a class="navButton" id="servicesButton" href="{{route('cust.services')}}">Services</a>
                    <a href="{{route('cust.contact')}}" class="navButton" id="contactButton">Contact</a>
                    <a href="{{route('cust.blog')}}" style="color: aqua;" class="navButton" id="blogButton">Blog</a>
                    @endif
                </nav>
            </div>
        </header>
    </div>
    <div class="wrapper">
        
        <main class="main" style="flex-direction: column">
            @yield('content')
        </main>
    </div>
    <footer class="footer"></footer>
    <script src="{{asset('js/footer.js')}}"></script>
</body>
</html>