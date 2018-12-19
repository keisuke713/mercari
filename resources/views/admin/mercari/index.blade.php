@extends('layouts.admin')
@section('title', '検索結果一覧')

@section('content')
<div class="container">
    <div class="row">
        <h2>検索結果一覧</h2>
        <div class="col-md-2">
            <a href="#" class="btn btn-primary">詳細検索</a>
        </div>
        <div class="new col-md-10">
            @foreach($products as $product)
                <div class="product col-md-3">
                    <div class="image">
                        <img src="{{ asset('storage/image/'. $product->image_path) }}">
                    </div>
                    <div class="name">
                        {{ "商品名:".$product->name }}
                    </div>
                    <div class="price">
                        {{ "価格:".$product->price."円" }}
                    </div>
                    <a href="{{ action('Admin\MercariController@detail', ['id' => $product->id]) }}" class="btn btn-primary">詳細</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
