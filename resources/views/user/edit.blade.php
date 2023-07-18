@extends('layouts.main')

@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование пользователя</h1>
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
    <x-general.errors/>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form method="POST" action="{{route('user.update',compact('user'))}}">
                    @csrf
                    @method('PUT')
                    <div class="d-flex">

                        <x-form.inputText name="lastname" title="Фамилия" value="{{$user->lastname ?? old('lastname')}}"
                                          placeholder="Введите фамилию" disabled=""/>

                        <x-form.inputText name="name" title="Имя" value="{{$user->name ?? old('name')}}"
                                          placeholder="Введите имя" disabled=""/>

                        <x-form.inputText name="middle_name" title="Отчество" value="{{$user->middle_name ?? old('middle_name')}}"
                                          placeholder="Введите отчество" disabled=""/>
                    </div>

                    <x-form.inputText name="age" title="Возвраст" value="{{$user->age ?? old('age')}}"
                                      placeholder="Укажите возвраст" disabled=""/>

                    <x-form.inputText name="address" title="Адрес" value="{{$user->address ?? old('address')}}"
                                      placeholder="Введите адрес" disabled=""/>

                    <div class="form-group">
                        <select class="custom-select form-control-border" id="gender" name="gender">
                            @foreach(\App\Models\User::GENDER as $gender)
                                <option @if($user->gender == $loop->index) selected @endif value="{{$loop->index}}">
                                    {{$gender}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Применить изменения">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div>

    </section>
    <!-- /.content -->
@endsection
