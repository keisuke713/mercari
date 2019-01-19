@extends('layouts.a')

@section('title','コメント一覧')
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
            <div class="answer">
                @if($comment->answer->count() == 0)
                    <div class="title">
                        <h4>出品者からの返信はまだありません</h4>
                    </div>
                @else
                    <div class="title">
                        <h4>出品者からの返信</h4>
                    </div>
                    <div class="time">
                        {{ "返信日時:".$comment->answer->created_at }}
                    </div>
                    <div class="body">
                        {{ "本文:".$comment->answer->body }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
