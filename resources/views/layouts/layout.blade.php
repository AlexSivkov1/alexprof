<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">
    <link rel="stylesheet" href="{{asset('/assets/my.css')}}">



</head>

<body>

{{--<div id="video">--}}
    {{--<div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>--}}

    <header id="header">
        <div class="container-fluid">
            <div class="navbar">
                <a class="text-lowercase" href="{{ route('main') }}" id="logo" title="AlexProfile">
                    AlexProfile
                </a>
                <div class="navigation-row">
                    {{--жду меню!!!!!!!!!!!!!!!!!!!!!!!--}}
                    <nav class="animenu" role="navigation" aria-label="Menu">
                        <ul class="animenu__nav">


                            <li><a href="{{ route('main') }}">Home</a></li>
                            <li>
                                <a href="#" class="animenu__nav__hasDropdown" aria-haspopup="true">Архив</a>
                                <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">

                                    <li><a href="#" role="menuitem">Sub Item 1</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 2</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=" {{ route('cats.all') }}" class="animenu__nav__hasDropdown"
                                   aria-haspopup="true">Категории</a>
                                <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">
                                    @foreach($categories as $k => $v)
                                        <li>
                                     <a id="$v" href="{{route('menu')}}" role="menuitem"> {{ $v }} </a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>



                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{--<video autoplay muted loop id="myVideo">--}}
        {{--<source src="images/video-bg.mp4" type="video/mp4">--}}
    {{--</video>--}}



@yield('content')



{{--contact информация--}}
    <div class="section animated-row" data-section="slide07">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-7 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <span>Contact</span>
                        <h2>Get In Touch!</h2>
                    </div>
                    <div class="contact-section">
                        <div class="row">
                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                <div class="contact-box">
                                    <div class="contact-row">
                                        <i class="fa fa-map-marker"></i> 123 New Street Here, Wonderful City 10220
                                    </div>
                                    <div class="contact-row">
                                        <i class="fa fa-phone"></i> 090 080 0210
                                    </div>
                                    <div class="contact-row">
                                        <i class="fa fa-envelope"></i> info@company.co
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                <form id="ajax-contact" method="post" action="#">
                                    <div class="input-field">
                                        <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                                    </div>
                                    <div class="input-field">
                                        <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                                    </div>
                                    <div class="input-field">
                                        <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn" type="submit">Submit</button>
                                </form>
                                <div id="form-messages" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div id="social-icons">
    <div class="text-right">
        <ul class="social-icons">
            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" title="Instagram"><i class="fa fa-behance"></i></a></li>
        </ul>
    </div>
</div>
{{--скрипт для ВЫПАДАЮЩЕГО МЕНЮ--}}



<script src="{{ asset('assets/front/js/front.js') }}"></script>
<script src="{{ asset('assets/my.js') }}"></script>





</body>
</html>