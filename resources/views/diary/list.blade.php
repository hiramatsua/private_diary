@extends('layouts.app')

@section('content')
<div class="col col-md-offset-3 col-md-12">
  <div class="clearfix">
    <a class="btn btn-primary float-right" href="{{ route('diary.create') }}">日記を書く</a>
  </div>
  <!-- バリデーションエラー表示 -->
  @include('common.errors')
  @if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
  @endif
  <hr>
  <h2><i class="fas fa-list"></i>&nbsp;{{ Auth::user()->name }}さんの日記一覧</h2>
  <div class="container">
    <div class="my-div-style w-100">
      <div class="row">
        @if (count($diaries) > 0)
          @foreach($diaries as $diary)
            <div class="col-12">
              <a href="{{ route('diary.detail', ['id' => $diary->id]) }}">
                <h2 class="post-title">{{ $diary->title }}</h2></a>
              <p>&nbsp;{{ $diary->content }}</p>
              <p>作成日：{{ $diary->created_at }}</p>
            </div>
            <hr>
          @endforeach
        @else
          <p>日記がありません。</p>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection