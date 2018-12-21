@extends('layouts.a')

@section('title', '検索結果')

@section('content')
<div class="container">
    <div class="row">
        <h2>検索結果一覧</h2>
        <div class="col-md-10">
            @if($products != NULL)
                <h5>{{$products->count()."件ヒットしました。"}}</h5>
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
            @else
                <h5>該当する商品はありません</h5>
            @endif
        </div>
    </div>
</div>
@endsection
