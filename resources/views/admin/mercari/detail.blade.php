@extends('layouts.a')
@section('title', '商品詳細')

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
                        {{ "出品者:".$user->name }}
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
            <div class="detail">
                <div class="col-md-10">
                    @if(Auth::user()->id == $product->user_id)
                        <a href="{{ action('Admin\MercariController@edit', ['id' => $product->id]) }}" class="btn btn-primary">編集する</a>
                        <a href="{{ action('Admin\MercariController@delete', ['id' => $product->id]) }}" class="btn btn-primary">削除する</a>
                        <a href="{{ action('Admin\MercariController@question', ['id' => $product->id]) }}" class="btn btn-primary">質問一覧</a>
                    @else
                        @if($product->likes()->where('user_id', Auth::user()->id)->count() == 1)
                            <a href="{{ action('Admin\MercariController@release', ['id' => $product->id]) }}" class="btn btn-primary">いいねを解除する</a>
                        @else
                            <a href="{{ action('Admin\MercariController@like', ['id' => $product->id]) }}" class="btn btn-primary">いいねする</a>
                        @endif
                            @if($product->comments()->where('user_id', Auth::user()->id)->count() == 0)
                                <a href="{{ action('Admin\MercariController@comment', ['id' => $product->id]) }}" class="btn btn-primary">質問する</a>
                            @else
                                <a href="{{ action('Admin\MercariController@list', ['id' => $product->id]) }}" class="btn btn-primary">出品者からの返信</a>
                            @endif
                        <a href="#" class="btn btn-primary">購入する</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
