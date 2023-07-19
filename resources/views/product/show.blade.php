@extends('layouts.main')

@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукт</h1>
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
                                <a href="{{route('product.edit',compact('product'))}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form method="POST" action="{{route('product.delete',compact('product'))}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <img src="{{asset('storage/'.$product->preview_image)}}" width="400px" alt="">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $product->title }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $product->category }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <td>Наполнение</td>
                                    <td>{{ $product->contents }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество на складе</td>
                                    <td>{{ $product->count }}</td>
                                </tr>
                                <tr>
                                    <td>Теги</td>
                                    <td>@foreach($tags as $tag) <div class="btn btn-primary">{{$tag->title}}</div>@endforeach</td>
                                </tr>
                                <tr>
                                    <td>Цвета</td>
                                    <td class="d-flex" style="gap: 5px" >@foreach($colors as $color)<div style="width: 16px; height: 16px; background: {{$color->title}}"></div> @endforeach</td>
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
