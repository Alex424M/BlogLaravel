@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создать пост</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active">Создать пост</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="card card-primary">
            <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Название поста</label>
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <input type="text" value="{{old('title')}}" class="form-control w-50" name="title" placeholder="Введите название тега">

                        <label>Текст</label>
                        @error('content')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div style="height: 100%">
                            <textarea id="summernote" name="content" class="w-100 h-100">{{old('content')}}</textarea>
                        </div>
                        @error('photo')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Загрузка изображений</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="photo">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group w-25">
                            <label>Категория</label>
                            <select name="category_id" class="form-control" style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach($categories as $category)
                                    <option
                                       @if(old('category_id')==$category->id)
                                           selected
                                       @endif
                                        value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group w-25">
                            <label>Теги</label>
                            <div class="container m-0 p-0">
                                <select class="select2 w-100" name="tag_ids[]" multiple="multiple">
                                   @foreach($tags as $tag)
                                        <option {{is_array(old('tag_ids'))&&in_array($tag->id, old('tag_ids'))? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="card-footer w-100 bg-transparent p-0">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
