@extends('layouts.app')

@section('content')
<div class="col col-md-offset-3 col-md-12">
  <nav class="card">
    <div class="card-header">
      <i class="fas fa-edit"></i>&nbsp;日記を書く
    </div>
    <div class="card-body">
      <!-- @if($errors->any()) -->
      <!-- <div class="alert alert-danger"> -->
      <!-- <ul> -->
      <!-- @foreach($errors->all() as $err_msg) -->
      <!-- <li>{{ $err_msg }}</li> -->
      <!-- @endforeach -->
      <!-- </ul> -->
    </div>
    <!-- @endif -->
    <form action="#" method=" post">
      @csrf
      <div class="form-group">
        <label>タイトル</label>
        <input type="text" class="form-control col-6" name="title" value="{{ old('title') }}">
      </div>
      <div class="form-group">
        <label>内容</label>
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
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-edit"></i>&nbsp;作成</button>
      </div>
    </form>
  </nav>
</div>
@endsection