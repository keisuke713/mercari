@extends('layouts.a')

@section('title', '詳細検索')

@section('content')
<div class="container">
    <div class="row col-md-12">
        <h2>詳細検索</h2>
    </div>
    <div class="row col-md-10">
        <form action="{{ action('Admin\MercariController@serch') }}" method="get">
            <div class="form-group row">
              <label class="col-md-4">商品名</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="pro_name" value={{ $pro_name ?? '' }}>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4">カテゴリー</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="pro_category" value={{ $pro_category ?? '' }}>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4">最安値</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="pro_min" value={{ $pro_min ?? '' }}>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4">最高値</label>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="pro_max" value={{ $pro_max ?? '' }}>
              </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="btn btn-primary" value="絞り込む">
            </div>
        </form>
    </div>
</div>
@endsection
