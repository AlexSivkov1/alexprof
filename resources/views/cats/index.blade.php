@extends('layouts.layout')
@section('title', 'AlexProf: Статьи категории :' . $category->title)
@section('menuheader')
    <div class="menu" id="header">
        <div class="container-fluid">
            <div class="navbar">
                <a class="text-lowercase" href="{{ route('home') }}" id="logo" title="AlexProfile">
                    AlexProfile
                </a>
                <div class="navigation-row">
                    <nav class="animenu" role="navigation" aria-label="Menu">
                        <ul class="animenu__nav">
                            {{--<li><a href="{{ route('main') }}">Home</a></li>--}}
                            <li>
                                <a href="{{ route('posts.all') }}" class="animenu__nav__hasDropdown" aria-haspopup="true">Архив</a>
                                {{--<ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">

                                    <li><a href="#" role="menuitem">Sub Item 1</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 2</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 3</a></li>
                                </ul>--}}
                            </li>
                            @foreach($categories as $category)
                             <li>
                                 <a href=" {{ route('categories.all') }}" class="animenu__nav__hasDropdown"
                                    aria-haspopup="true">{{ $category->title }}</a>
                            @endforeach

                                {{-- <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">
                                     @foreach($categories as $k => $v)
                                         <li>
                                             <a href="{{route('menu', ['slug'=>$k])}}" role="menuitem"> {{ $v }} </a>
                                         </li>
                                     @endforeach
                                 </ul>--}}
                             </li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="title-block animated fadeInUp" data-animate="fadeInUp" style="margin-top: 60px;">

            <h2><span>Посты категории: </span>{{ $category->title }}: </h2>
        </div>
        <div class="gallery-section">
            <div class="gallery-list owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(-2242px, 0px, 0px); transition: all 0.7s ease 0s; width: 3364px;">
                        @foreach($posts as $post)
                            <div class="owl-item" style="width: 343.667px; margin: 0 auto; ">
                                <div class="item animate-active" data-animate="fadeInUp">
                                    <div class="portfolio-item" style="margin-right: 20px">
                                        <div class="thumb">
                                            <img src="{{ $post->getImage() }}" alt="">
                                        </div>
                                        <div class="thumb-inner animate" data-animate="fadeInUp">
                                            <h4>templatemo is the best</h4>
                                            <p>Please tell your friends about it. Templatemo is the best website to download
                                                free Bootstrap CSS templates.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item animate-active" data-animate="fadeInUp">
                                    <div class="portfolio-item" style="margin-right: 20px">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/front/images/item-2.jpg') }}" alt="">
                                        </div>
                                        <div class="thumb-inner animate" data-animate="fadeInUp">
                                            <h4>templatemo is the best</h4>
                                            <p>Please tell your friends about it. Templatemo is the best website to download
                                                free Bootstrap CSS templates.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item animate-active" data-animate="fadeInUp">
                                    <div class="portfolio-item">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/front/images/item-3.jpg') }}" alt="">
                                        </div>
                                        <div class="thumb-inner animate" data-animate="fadeInUp">
                                            <h4>templatemo is the best</h4>
                                            <p>Please tell your friends about it. Templatemo is the best website to download
                                                free Bootstrap CSS templates.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                    </button>
                    <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                </div>
                <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot active"><span></span></button>
                </div>
            </div>
        </div>
    </div>


@endsection




