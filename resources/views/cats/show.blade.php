@extends('layouts.layout')

@section('title', 'AlexProf: ' . $post->title)


@section('content')
    <div class="section animated-row" >
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        {{--<h6 class="col-md-7" style="margin-top:12px">{{ $category->title }}</h6>--}}
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-section">
                            <div class="testimonial-item">
                                <div class="client-row">
                                    {{--<img src="{{ $post->getImage() }}">--}}
                                </div>
                                <div class="testimonial-content">
                                   {{-- <h6><a href="{{ route('category.single', ['slug'=>$post->category->slug]) }}" ></a></h6>--}}
                               {{--     <small class="font-weight-bold">{{ $post->title }}</small>
                                    <small>{{ $post->category->title }}</small>
                                    <small>{{ $post->getPostDate() }}</small>
                                    <small>{{ $post->description }}</small>
                                    <small><i class="fa fa-eye"></i>{{ $post->views }}</small>--}}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 {{--       @if($post->tags->count())
            <span class="font-weight-bold">Теги:  </span>
            @foreach($post->tags as $tag)
                <small><a href="{{ route('tags.single', ['slug'=>$tag->slug]) }}" title="">{{ $tag->title }}</a></small>
            @endforeach

        @endif--}}
    </div>
@endsection



