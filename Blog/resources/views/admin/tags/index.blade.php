@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Теги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Теги</li>
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
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->title}}</td>
                                            <td style="display: flex">
                                                <a href="{{route('tags.show',[$tag->id])}}">
                                                    <i class="nav-btn fas fa-solid fa-eye"></i>
                                                </a>
                                                <a href="{{route('tags.edit',[$tag->id])}}">
                                                    <i class="nav-btn fas fa-sharp fa-solid fa-pen"></i>
                                                </a>
                                                <form action="{{route('tags.destroy',$tag->id)}}" method='POST' style="">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-transparent border-0">
                                                        <i class="nav-btn fas fa-solid fa-trash text-danger"></i>

                                                    </button>

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
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
        <!-- /.content -->
        <div class="content">
            <div class="container-fluid">
                <a href="{{route('tags.create')}}" class="btn btn-success mb-3">Создать</a>
            </div>
        </div>
    </div>
@endsection
