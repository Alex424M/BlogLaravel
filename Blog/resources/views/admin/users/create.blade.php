@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создать пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('users.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Создать</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="card card-primary">
            <form class="w-25" method="POST" action="{{route('users.store')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="container p-0">
                            <label>Имя</label>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="text" class="form-control" name="name" placeholder="Введите имя">
                        </div>
                        <div class="container p-0">
                            <label>Email</label>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="text" class="form-control" name="email" placeholder="Введите почту">
                        </div>
                        <div class="container p-0">
                            <label>Пароль</label>
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="password" class="form-control" name="password" placeholder="Введите пароль">
                        </div>
                        <div class="form-group w-100">
                            <label>Роль</label>
                            <select name="role_id" class="form-control" style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                @foreach($roles as $role)
                                    <option
                                        @if(old('role_id')==$role->id)
                                        selected
                                        @endif
                                        value="{{$role->id}}">{{$role->role}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer w-100 bg-transparent">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
