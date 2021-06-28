@extends('layouts.layout')

@section('title', 'AlexProf: Архив постов')

@section('content')
    <div class="section animated-row" data-section="slide01">
        <div class="section-inner">
            <div class="welcome-box">
                <p class="animate" data-animate="fadeInUp">Эта страница всех постов</p>
            </div>
        </div>
    </div>
    <div class="section animated-row" >
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-10 wide-col-laptop">

                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-section">
                            <div class="testimonials-slider owl-carousel">
                                @foreach($posts as $post)

                                    <div class="item animate flex-active" data-animate="fadeInUp"
                                         style="height: 500px; width: 400px">
                                        <a href="{{ route('posts.single', ['slug'=>$post->slug]) }}"
                                           style="width : 200px; height: 100px ">
                                            <img src="{{ $post->getImage() }}" style="height: 80%; width: 80%"></a>
                                        {!! $post->description !!}
                                        {{--<small><a href="{{ route('category.single', [$post->category->slug]) }}"
                                                  style="margin-bottom:-10px;">{{ $post->category->title }}</a></small>--}}
                                        <small>{{ $post->getPostDate() }}</small>
                                        <small><i class="fa fa-eye"></i>{{ $post->views }}</small>

                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
