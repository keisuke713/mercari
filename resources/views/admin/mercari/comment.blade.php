@extends('layouts.a')

@section('title','コメント')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="detail">
                <div class="image">
                    <img src="{{ asset('storage/image/' . $product->image_path) }}">
                </div>
            </div>
            <div class="detail">
                <div class="name">
                    {{ "商品名:".$product->name }}
                </div>
                <div class="user">
                    {{ "出品者:".$product->user->name }}
                </div>
                <div class="time">
                    {{ "出品日時:".$product->created_at }}
                </div>
                <div class="price">
                    {{ "値段:".$product->price."円" }}
                </div>
                <div class="body">
                    {{ "商品説明:".$product->body }}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <form action="{{ action('Admin\MercariController@contribute',['id' => $product->id]) }}" method="post">
                <div class="form-group row">
                    <label class="col-md-6" for="title">タイトル</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-6" for="body">本文</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="body" rows="20">{{ old('body')}}</textarea>
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="送信する">
                <input type="hidden" name="product" value="{{ $product->id }}">
            </form>
        </div>
    </div>
</div>
@endsection
