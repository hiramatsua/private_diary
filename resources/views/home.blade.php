@extends('layouts.app')

@section('content')
<div class="row">
  <div class="main-img">
    <div class="main-contents">
      <h1 class="main-title">Private Diary</h1>
      <p class="main-txt">あなた専用の日記帳サービス</p>
      <a class="btn btn-primary" href="{{ route('login') }}">
        <i class="fas fa-sign-in-alt"></i>&nbsp;ログイン</a>
    </div>
  </div>
</div>
<section class="contents">
  <div class="contents-inner">
    <div class="wrapper">
      <!-- figure1 -->
      <div class="contents-box">
        <figure class="contents-box-img"><img src="./img/nikki1.jpg" alt="figure1"></figure>
        <div class="contents-box-info">
          <h3>Cloud Diary</h3>
          <p>クラウド上で作成・編集ができる日記帳</p>
        </div>
      </div>
      <!-- figure2 -->
      <div class="contents-box">
        <figure class="contents-box-img"><img src="./img/nikki2.jpg" alt="figure2"></figure>
        <div class="contents-box-info">
          <h3>Save Your Diary</h3>
          <p>あなた日記をクラウド上に保存</p>
        </div>
      </div>
      <!-- figure3 -->
      <div class="contents-box">
        <figure class="contents-box-img"><img src="./img/nikki3.jpg" alt="figure3"></figure>
        <div class="contents-box-info">
          <h3>Membership System</h3>
          <p>会員制のクラウド日記帳サービス</p>
        </div>
      </div>
    </div><!-- /.wrapper -->
  </div><!-- contents-inner -->
</section>
@endsection

@section('footer')
<footer class="my-footer">
  <p><small>copyright(C) 2022 XXXXX All Rights Reserved.</small></p>
</footer>
@endsection