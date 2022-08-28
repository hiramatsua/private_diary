@extends('layouts.app')

@section('content')
<div class="col col-md-offset-3 col-md-12">
  <div class="clearfix">
    <a class="btn btn-primary float-right" href="{{ route('diary.create') }}">日記を書く</a>
  </div>
  <h2><i class="fas fa-list"></i>&nbsp;{{ Auth::user()->name }}さんの日記一覧</h2>
  <!-- バリデーションエラー表示 -->
  @include('common.errors')
  @if(session('message'))
  <div class="alert alert-success">{{ session('message') }}</div>
  @endif
  <hr>
  <div class="container">
    <div class="my-div-style">

      @if (count($diaries) > 0)
      @foreach($diaries as $diary)
      <div class="row">
        <div class="col-9">
          <a href="{{ route('diary.detail', ['id' => $diary->id]) }}">
            <h2 class="post-title">{{ $diary->title }}</h2>
          </a>
          <p>&nbsp;{{ $diary->content }}</p>
          <p>作成日：{{ $diary->created_at }}</p>
        </div>
        <div class="col-3">
          <!-- ここに写真 photo1 -->
          <img src="upload/{{ $diary->photo1 }}" width="180px" height="100px">
        </div>
        <hr>
        @endforeach
        <div class=" row">
          <div class="col-md-4 offset-md-4">
            {{ $diaries->links() }}
          </div>
        </div>
        @else
        <p>日記がありません。</p>
        @endif
      </div>
    </div>
  </div>
  @endsection