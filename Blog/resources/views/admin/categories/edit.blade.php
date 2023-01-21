@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать категорию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Категории</a></li>
                            <li class="breadcrumb-item active">Редактировать категорию {{$category->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="card card-primary">
            <form class="w-25" method="POST" action="{{route('categories.update',$category->id)}}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label>Название</label>
                        @error('title')
                            <div class="text-danger">Заполните это поле</div>
                        @enderror
                        <input type="text" value="{{$category->title}}" class="form-control" name="title" placeholder="Введите название категории">
                    </div>
                    <div class="card-footer w-100 bg-transparent p-0">
                        <button type="submit" class="btn btn-primary">Редактировать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
