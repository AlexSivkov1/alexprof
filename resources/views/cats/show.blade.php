@extends('layouts.layout')

@section('title', 'AlexProf: ' . $category->title)


@section('content')
        <div class="row justify-content-center">
        <div class="title-block" data-animate="fadeInUp"  style="margin-top:2%;">
            <span>Посты в категории <br>{{ $category->title }} :</span>
        </div>
        <div class="col-md-8 wide-col-laptop" style="margin-left: 10%">
            <div class="gallery-section">
                <div class="gallery-list owl-carousel owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        @if (count($posts))
                        <div class="owl-stage "
                             style="transform: translate3d(-2242px, 0px, 0px); transition: all 0.7s ease 0s; width: 3364px;">
                            <div class="owl-item active" style="width: 343.667px;">
                                @foreach($posts as $post)
                                <div class="item">
                                    <div class="portfolio-item" style="width: 340px" >
                                        <div class="thumb" style="margin-left: 20px">
                                            <img src="{{ $post->getImage() }}" alt="">
                                        </div>
                                        <div class="thumb-inner" data-animate="fadeInUp" >
                                            <h4>{{ $post->title }}t</h4>
                                            <p>{{ $post->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>

                        </div>
                        @else
                            <p>Статей в данной категории пока нет...</p>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
