@extends('layouts.a')
@section('title', '出品')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>出品</h2>
                <form action="{{ action('Admin\MercariController@create') }}" method="post" enctype="multipart/form-data">
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="name">商品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-md-2">{{ __('カテゴリー') }}</label>

                        <div class="col-md-9">
                            <select class="form-control" name="category">
                                <option value="" slected="selected">カテゴリー</option>
                                <option value="1">服</option>
                                <option value="2">靴</option>
                                <option value="3">帽子</option>
                                <option value="4">食材</option>
                                <option value="5">その他</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="price">値段</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">説明</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="出品する">
                </form>
            </div>
        </div>
    </div>
@endsection
