@extends('layouts.layout')

@section('title', 'AlexProf: ' . $post->title)

@section('menuheader')

    <div class="menu" id="header">
        <div class="container-fluid">
            <div class="navbar">
                <a class="text-lowercase" href="{{ route('home') }}" id="logo" title="AlexProfile">
                    AlexProfile
                </a>
                <div class="navigation-row">
                    {{--жду меню!!!!!!!!!!!!!!!!!!!!!!!--}}
                    <nav class="animenu" role="navigation" aria-label="Menu">
                        <ul class="animenu__nav">


                            {{--<li><a href="{{ route('main') }}">Home</a></li>--}}
                            <li>
                                <a href="{{ route('posts.all') }}" class="animenu__nav__hasDropdown" aria-haspopup="true">Архив</a>
                                <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">

                                    <li><a href="#" role="menuitem">Sub Item 1</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 2</a></li>
                                    <li><a href="#" role="menuitem">Sub Item 3</a></li>
                                </ul>
                            </li>
                            {{-- <li>
                                 <a href=" {{ route('cats.all') }}" class="animenu__nav__hasDropdown"
                                    aria-haspopup="true">Категории</a>
                                 <ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">
                                     @foreach($categories as $k => $v)
                                         <li>
                                             <a href="{{route('menu', ['slug'=>$k])}}" role="menuitem"> {{ $v }} </a>
                                         </li>
                                     @endforeach
                                 </ul>
                             </li>--}}
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section animated-row" >
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <h6 class="col-md-7" style="margin-top:12px">{{ $post->category->title }}</h6>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-section">
                                    <div class="testimonial-item">
                                        <div class="client-row">
                                            <img src="{{ $post->getImage() }}">
                                        </div>
                                        <div class="testimonial-content">
                                           {{-- <h6><a href="{{ route('category.single', ['slug'=>$post->category->slug]) }}" ></a></h6>--}}
                                            <small class="font-weight-bold">{{ $post->title }}</small>
                                            <small>{{ $post->category->title }}</small>
                                            <small>{{ $post->getPostDate() }}</small>
                                            <small>{{ $post->description }}</small>
                                            <small><i class="fa fa-eye"></i>{{ $post->views }}</small>


                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    @if($post->tags->count())
            <span class="font-weight-bold">Теги:  </span>
            @foreach($post->tags as $tag)
                <small><a href="{{ route('tags.single', ['slug'=>$tag->slug]) }}" title="">{{ $tag->title }}</a></small>
            @endforeach

        @endif--}}
    </div>
@endsection


