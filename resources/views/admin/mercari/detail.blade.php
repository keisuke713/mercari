@extends('layouts.a')
@section('title', '商品詳細')

@section('contents')
    <div class="container">
        <div class="row">
            <h2>商品詳細</h2>
        </div>
        <div class="row">
            <li>{{ $product->name }}</li>
        </div>
    </div>
@endsection
