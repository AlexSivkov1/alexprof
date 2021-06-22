@extends('layouts.cats_layout')

@section('title', 'AlexProf: Список категорий')

@section('content')

    <div class="row justify-content-center">

        <div class="wrap-content" style="width: 50%; margin-top: 5%;">

            @foreach($categories as $category)

                <div class="container mt-2">
                    <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $category->title }}</h3>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" name="title"
                                       class="form-control @error('title') is-invalid @enderror" id="title"
                                       placeholder="Название">
                            </div>

                            <div class="form-group">
                                <label for="description">Цитата</label>
                                <textarea name="description" class="form-control" id="description" rows="3"
                                          placeholder="Цитата ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea name="content" class="form-control" id="content" rows="7"
                                          placeholder="Контент ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Категория</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach($categories as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="thumbnail">Изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" id="thumbnail"
                                               class="custom-file-input">
                                        <label class="custom-file-label" for="thumbnail">Choose file</label>
                                    </div>
                                </div>
                            </div>

                        </div>


                           {{--href="{{ route('category.single', $category->slug) }}">--}}
                            {{--<img src="images/<?=$item->img;?>" class="img-responsive" alt="">--}}

                        </a>
                    </div>
                </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection


