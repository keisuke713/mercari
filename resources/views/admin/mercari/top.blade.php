@extends('layouts.admin')

@section('title', 'メルカリ')

@section('content')
    <h2>新着商品一覧</h2>
        <div class="row">
            <div class="new col-md-10">
                @foreach($posts as $product)
                    <div class="product col-md-3">
                        <div class="image">
                            <img src="{{ asset('storage/image/'. $product->image_path) }}">
                        </div>
                        <div class="name">
                            {{ "商品名 ".$product->name }}
                        </div>
                        <div class="price">
                            {{ "値段 ".$product->price."円" }}
                        </div>
                          <a href="{{ action('Admin\MercariController@detail', ['id' => $product->id]) }}" class="btn btn-primary">詳細</a>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
