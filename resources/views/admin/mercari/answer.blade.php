@extends('layouts.a')

@section('title', '解答作成')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <form action="{{ action('Admin\MercariController@solve', ['id' => $comment->id]) }}" method="post">
                <div class="form group-row">
                    <label class="col-md-6" for="body">本文</label>
                    <div class="col-md-8">
                        <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="comment" value="{{ $comment->id }}">
                <input type="submit" class="btn btn-primary" value="返信する">
            </form>
        </div>
    </div>
</div>
@endsection
