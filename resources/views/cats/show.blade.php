@extends('layouts.layout')

@section('title', 'AlexProf: ' . $category->title)


@section('content')

    {{--  <div class="page-wrapper">
          <div class="blog-custom-build">

              @foreach($posts as $post)
                  <div class="blog-box wow fadeIn">
                      <div class="post-media">
                          <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">
                              <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                              <div class="hovereffect">
                                  <span></span>
                              </div>
                              <!-- end hover -->
                          </a>
                      </div>
                      <!-- end media -->
                      <div class="blog-meta big-meta text-center">
                          <div class="post-sharing">
                              <ul class="list-inline">
                                  <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span
                                                  class="down-mobile">Share on Facebook</span></a></li>
                                  <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span
                                                  class="down-mobile">Tweet on Twitter</span></a></li>
                                  <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a>
                                  </li>
                              </ul>
                          </div><!-- end post-sharing -->

                          <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">{{ $post->title }}</a></h4>
                          {!! $post->description !!}
                          <small><a href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" title="">{{ $post->category->title }}</a></small>
                          <small>{{ $post->getPostDate() }}</small>
                          <small><i class="fa fa-eye"></i> {{ $post->views }}</small>
                      </div><!-- end meta -->
                  </div><!-- end blog-box -->

                  <hr class="invis">
              @endforeach

          </div>
      </div>--}}
    <div class="row justify-content-center">
        <div class="title-block" data-animate="fadeInUp"  style="margin-top:2%;">
            <span>Посты в категории <br>{{ $category->title }} :</span>
        </div>
        <div class="col-md-8 wide-col-laptop" style="margin-left: 10%">
            <div class="gallery-section">
                <div class="gallery-list owl-carousel owl-loaded owl-drag">

                    <div class="owl-stage-outer" >
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
                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
