@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать пост</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active">Редактировать пост {{$post->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="card card-primary">
            <form method="POST" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label>Название</label>
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <input type="text" value="{{$post->title}}" class="form-control w-25" name="title"
                               placeholder="Введите название тега">

                        <label>Текст</label>
                        @error('content')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div style="height: 100%">
                            <textarea id="summernote" name="content" class="w-100 h-100">{{$post->content}}</textarea>
                        </div>
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Загрузка изображений</label>
                            @error('photo')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="container m-0 p-0 mb-2 w-50">
                                <img src="{{url('storage/'.$post->photo)}}" class="w-100" alt="">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="photo">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <select class="form-control select2 w-25 select2-hidden-accessible" style="width: 100%;"
                                    name="category_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach($categories as $category)
                                    <option
                                        @if($category->id === $post->category_id)
                                        selected
                                        @endif
                                        value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group w-25">
                            <label>Теги</label>
                            @error('tag_ids[]')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="container m-0 p-0">
                                <select class="select2 w-100" name="tag_ids[]" multiple="multiple">
                                    @foreach($allTags as $tag)
                                        <option
                                            @foreach($tags as $post_tag)
                                                @if($tag->id==$post_tag->tag_id)
                                                    selected
                                                @endif
                                            @endforeach
                                            value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer w-100 bg-transparent p-0">
                        <button type="submit" class="btn btn-primary">Редактировать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
