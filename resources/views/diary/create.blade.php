@extends('layouts.app')

@section('content')
<div class="col col-md-offset-3 col-md-12">
  <nav class="card">
    <div class="card-header text-white bg-secondary">
      <i class="fas fa-edit"></i>&nbsp;日記を書く
    </div>
    <div class="card-body">
      <!-- バリデーションエラー表示 -->
      @include('common.errors')
    </div>
    <form enctype="multipart/form-data" action="{{ route('diary.create') }}" method="post">
      @csrf
      <div class="container">
        <div class="my-div-style">
          <div class="row">

            <div class="form-group">
              <label>タイトル</label>
              <input type="text" class="form-control col-6" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
              <label>本文</label>
              <textarea class="form-control" name="content" value="{{ old('content') }}" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label>写真１</label>
              <input type="file" class="form-control col-6" name="photo1" value="{{ old('photo1') }}">
            </div>
            <div class="form-group">
              <label>写真２</label>
              <input type="file" class="form-control col-6" name="photo2" value="{{ old('photo2') }}">
            </div>
            <div class="form-group">
              <label>写真３</label>
              <input type="file" class="form-control col-6" name="photo3" value="{{ old('photo3') }}">
            </div>
          </div>
          <div class="row">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
              <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;作成</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </nav>
</div>
@endsection