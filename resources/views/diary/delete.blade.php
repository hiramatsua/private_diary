@extends('layouts.app')

@section('content')
<div class="col col-md-offset-3 col-md-12">
  <nav class="card">
    <div class="card-header text-white bg-danger">
      <i class="fas fa-book-open"></i>&nbsp;日記削除
    </div>
    <div class="card-body">
      <!-- バリデーションエラー表示 -->
      @include('common.errors')
      <div class="alert alert-danger">この日記を削除します。よろしいですか？</div>
    </div>

    <div class="container">
      <div class="my-div-style">
        <form action="{{ route('diary.delete', ['id' => $diary->id]) }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-3">
              <label><strong>タイトル</strong></label>
            </div>
            <div class="col-9">
              {{ $diary->title }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3">
              <label><strong>本文</strong></label>
            </div>
            <div class="col-9">
              {{ $diary->content }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3">
              <label><strong>写真</strong></label>
            </div>
            <div class="col-3">
              <img src="{{ $diary->photo1 }}" width="200">
            </div>
            <div class="col-3">
              <img src="{{ $diary->photo2 }}" width="200">
            </div>
            <div class="col-3">
              <img src="{{ $diary->photo3 }}" width="200">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3">
              <label><strong>作成日時</strong></label>
            </div>
            <div class="col-9">
              {{ $diary->created_at }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-3">
              <label><strong>更新日時</strong></label>
            </div>
            <div class="col-9">
              {{ $diary->updated_at }}
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-danger mt-5 ml-2 mb-3">
              <i class="fas fa-trash"></i>&nbsp;はい</button>
        </form>
        <a class="btn btn-secondary mt-5 mb-3" href="{{ route('diary.list') }}">
          <i class="fas fa-edit"></i>&nbsp;キャンセル</a>
      </div>
    </div>
  </nav>
</div>
@endsection