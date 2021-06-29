@extends('layouts.layout')
@section('title', 'AlexProf: Список всех категорий: ')


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
                <a href="{{route('categories.single', ['slug'=>$category->slug])}}" class="btn btn-primary">Публикации</a>
            </div>
        @endforeach

    </div>
</div>

@endsection




