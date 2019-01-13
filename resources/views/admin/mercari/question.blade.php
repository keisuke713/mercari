@extends('layouts.a')

@section('title', '質問一覧')
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
            @foreach($product->comments as $comment)
                <div class="question">
                    <div class="title">
                        {{ "タイトル:".$comment->title }}
                    </div>
                    <div class="user">
                        {{ "質問者:".$comment->user->name }}
                    </div>
                    <div class="time">
                        {{ "質問日時:".$comment->created_at }}
                    </div>
                    <div class="body">
                        {{ "質問内容:".$comment->body }}
                    </div>
                    <a href="{{ action('Admin\MercariController@answer', ['id' => $comment->id]) }}" class="btn btn-primary">返信する</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
