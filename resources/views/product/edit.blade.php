@extends('layouts.main')

@section('contents')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование продукта</h1>
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
                <form method="POST" action="{{route('product.update',compact('product'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex">
                        <x-form.inputText name="title" title="Название" value="{{$product->title}}"
                                          placeholder="Введите название" disabled=""/>
                        <x-form.inputText name="price" title="Цена" value="{{$product->price}}"
                                          placeholder="Введите цену" disabled=""/>

                        <x-form.inputText name="count" title="Количество на складе" value="{{$product->count}}"
                                          placeholder="Введите количество" disabled=""/>
                    </div>

                    <x-form.textarea name="description" title="Описание" value="{{$product->description}}"
                                     disabled="" />

                    <x-form.textarea name="contents" title="Контент" value="{{$product->contents}}"
                                     disabled="" />

                    <div class="form-group">
                        <select class="form-control select2" name="category" style="width: 100%;">
                            @foreach($categories as $category)
                                <option @if($category->title == $product->category) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option @if($product->tags()->find($tag->id)) selected @endif
                                value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="colors" name="colors[]" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
                            @foreach($colors as $color)
                                <option @if($product->colors()->find($color->id)) selected @endif
                                value="{{$color->id}}">{{$color->title}}</option>
                            @endforeach
                        </select>
                    </div>


                    <x-form.checkbox name="is_published" title="Опубликовано" value="{{true}}">@if($product->is_published) checked @endif</x-form.checkbox>

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
                        <input type="submit" class="btn btn-primary" value="Применить изменения">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div>

    </section>
    <!-- /.content -->
@endsection
