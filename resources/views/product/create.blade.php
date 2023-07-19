@extends('layouts.main')

@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить продукт</h1>
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
                <form method="POST" action="{{route('product.store')}}" style="width: 80%" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex">
                        <x-form.inputText name="title" title="Название" value="{{old('title')}}"
                                          placeholder="Введите название" disabled=""/>

                        <x-form.inputText name="price_old" title="Старая цена" value="{{old('price_old')}}"
                                          placeholder="Введите старую цену" disabled=""/>

                        <x-form.inputText name="price" title="Цена" value="{{old('price')}}"
                                          placeholder="Введите цену" disabled=""/>

                        <x-form.inputText name="count" title="Количество на складе" value="{{old('count')}}"
                                          placeholder="Введите количество" disabled=""/>
                    </div>

                    <x-form.textarea name="description" title="Описание" value="{{old('description')}}"
                                     disabled="" />

                    <x-form.textarea name="contents" title="Контент" value="{{old('contents')}}"
                                     disabled="" />

                    <div class="form-group">
                        <select class="form-control select2" name="category_id" style="width: 100%;">
                            <option disabled selected value="">Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="colors" name="colors[]" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{{$color->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <x-form.checkbox name="is_published" title="Опубликовано" value="{{true}}">checked</x-form.checkbox>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="preview_image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Загрузка</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div>

    </section>
    <!-- /.content -->
@endsection
