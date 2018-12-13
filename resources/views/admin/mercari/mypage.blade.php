@extends('layouts.admin')

@section('title','マイページ')

@section('content')
<table class="list" aligin="center">
    <tr>
        <th>名前</th>
        <td>{{ Auth::user()->name }}</td>
    </tr>
    <tr>
        <th>住所</th>
        <td>{{ Auth::user()->address }}</td>
    </tr>
    <tr>
        <th>支払い方法</th>
        <td>{{ Auth::user()->pay }}</td>
    </tr>
    <tr>
        <th>出品した商品一覧</th>
        <td></td>
    </tr>
    <tr>
        <th>お気に入り商品一覧</th>
        <td></td>
    </tr>
</table>
<div>
    <a href="{{ action('Admin\MercariController@logout') }}" role="button" class="btn btn-primary">ログアウト</a>
</div>
@endsection
