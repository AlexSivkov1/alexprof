@extends('layouts.layout')
@section('title', 'AlexProf: Список всех категорий: ')
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

                             <li>
                                 <a href=" {{ route('categories.all') }}" class="animenu__nav__hasDropdown"
                                    aria-haspopup="true">Категории</a>


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

    {{--<div class="contai">



        <div class="card w-25" style="margin-top: 100px;">
        @foreach($categories as $category)

            <div class="card-body">
                <h5 class="card-title" style="color: #000000">{{ $category->title }}</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Кнопка</a>
            </div>
            @endforeach
        </div>

    </div>--}}
    <div class="row justify-content-center" style="margin-top:100px;">
    <div class="container p-0 row" style="padding: 3px;  display: flex; ">
        @foreach($categories as $category)
            <div class="card-body">
                <h5 class="card-title" style="color: #e0e0e0">{{ $category->title }}</h5>
               {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                <a href="#" class="btn btn-primary">Публикации</a>
            </div>
        @endforeach

    </div>
</div>

@endsection




