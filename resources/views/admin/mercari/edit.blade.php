@extends('layouts.a')
@section('title', '商品編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>商品の編集</h2>
            <form action="{{ action('Admin\MercariController@update') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">画像</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                        <div class="form-text text-info">
                            設定中: {{ $product_form->image_path }}
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="name">商品名</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ $product_form->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-md-2">{{ __('カテゴリー') }}</label>

                    <div class="col-md-9">
                        <select class="form-control" name="category">
                            <option value="" slected="selected">カテゴリー</option>
                            <option value="服">服</option>
                            <option value="靴">靴</option>
                            <option value="帽子">帽子</option>
                            <option value="野菜">野菜</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="price">値段</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" name="price" value="{{ $product_form->price }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">説明</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="body" rows="20">{{ $product_form->body }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <input type="hidden" name="id" value="{{ $product_form->id }}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新する">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
