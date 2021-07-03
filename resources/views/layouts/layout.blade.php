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

<div class="menu" id="header">
    <div class="container-fluid">
        <div class="navbar col-md-12 ml-3 container-fluid">

                <form class="form" method="get" action="{{ route('search') }}">
                    <input name="s" class="form-control mb-0 text-center @error('s') is-invalid @enderror" type="search" placeholder="Search" required aria-label="Search" >
                    <button class="btn-primary" style="opacity: 0.3; width: 100%; border-radius: 10px;" type="submit">Search</button>
                </form>


            <div class="navigation-row mb-4" style="opacity: 0.6;">
                {{--жду меню!!!!!!!!!!!!!!!!!!!!!!!--}}
                <nav class="animenu" role="navigation" aria-label="Menu">
                    <ul class="animenu__nav">


                        {{--<li><a href="{{ route('main') }}">Home</a></li>--}}

                        <li>
                            <a href="{{ route('posts.all') }}" class="animenu__nav__hasDropdown" aria-haspopup="true">Архив</a>
                            <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">

                               {{-- <li><a href="{{ route('search') }}" role="menuitem">Поиск</a></li>--}}
                            </ul>
                        </li>
                        <li>
                            <a href=" {{ route('categories.all') }}" class="animenu__nav__hasDropdown"
                               aria-haspopup="true">Категории</a>
                            <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">
                                @foreach($menu_categories as $menu_category)
                                    <li>
                                        <a href="{{route('categories.single', ['slug'=>$menu_category->slug])}}" role="menuitem"> {{ $menu_category->title }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('send') }}">Contact</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
    </div>

@yield('content')



{{--contact информация--}}
    <div class="section animated-row" data-section="slide07">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-7 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <span>Contact</span>

                    </div>
                    <div class="contact-section">
                        <div class="row">
                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                <div class="contact-box">

                                    <div class="contact-row">
                                        <i class="fa fa-phone"></i> +79292555688
                                    </div>
                                    <div class="contact-row">
                                        <i class="fa fa-envelope"></i> plingsir2012@gmail.com
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




<script src="{{ asset('assets/front/js/front.js') }}"></script>






</body>
</html>