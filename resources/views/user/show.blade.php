@extends('layouts.main')

@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <div class="mr-3">
                                <a href="{{route('user.edit',compact('user'))}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form method="POST" action="{{route('user.delete',compact('user'))}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <td>ФИО</td>
                                    <td>{{ $user->lastname }} {{ $user->name }} {{ $user->middle_name }}</td>
                                </tr>
                                <tr>
                                    <td>Возраст</td>
                                    <td>{{ $user->age }}</td>
                                </tr>
                                <tr>
                                    <td>Адрес</td>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                <tr>
                                    <td>Пол</td>
                                    <td>{{ $user->genderTitle }}</td>
                                </tr>
                                <tr>
                                    <td>Почта</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

    </section>
    <!-- /.content -->
@endsection
