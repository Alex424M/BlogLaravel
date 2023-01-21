@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пост</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('posts.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active">Пост {{$post->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Текст</th>
                                        <th>Количество лайков</th>
                                        <th>Категория</th>
                                        <th>Теги</th>
                                        {{--                                        <th>Тег</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->content}}</td>
                                        <td>{{$post->likes}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>
                                            @foreach($tags as $tag)
                                                {{$tag->title}};
                                            @endforeach
                                        </td>
                                        {{--                                            <td>{{$post->title}}</td>--}}
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-md-left g-0">
                    <div class="col col-auto">
                        <a href="{{route('posts.edit',[$post->id])}}" class="btn btn-primary w-100">Редактировать</a>
                    </div>
                    <div class="col col-lg-1">
                        <form action="{{route('posts.destroy',$post->id)}}" method='POST' class="w-100">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Удалить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
