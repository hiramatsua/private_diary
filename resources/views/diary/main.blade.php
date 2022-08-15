@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="my-div-style w-200">
      <div class="col-lg-12 col-md-12 xm-auto">
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="{{ route('create') }}">日記を書く</a>
        </div>
        @if (count($diaries) > 0)
        @foreach($diaries as $diary)
        <div class="post-preview">
          <a href="#">
            <h2 class="post-title">{{ $diary->title }}</h2>
            <h3 class="post-subtitle">{{ $diary->content }}</h3>
          </a>
          <p class="post-meta">{{ $diary->created_at }}</p>
        </div>
        <hr>
        @endforeach
        @else
        <p class="post-meta">日記がありません。</p>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection