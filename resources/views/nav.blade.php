<header>
  <nav class="my-navbar">
    <div class="my-navbar-control">
      @if(Auth::check())
      <a class="my-navbar-brand" href="{{ route('diary.list') }}">
        <i class="fas fa-list"></i>&nbsp;日記一覧</a>
      <span class="my-navbar-item pl-2">
        <i class="fas fa-user-circle"></i>&nbsp;ようこそ、{{ Auth::user()->name }}さん&nbsp;
        <a href="#" data-bs-toggle="modal" data-bs-target="#menuModal">
          <!-- trigger modal -->
          <i class="fas fa-bars fa-lg"></i>
        </a>
      </span>
      @else
      <a class="my-navbar-brand" href="{{ route('diary') }}">
        <i class="fas fa-home"></i>&nbsp;Home</a>
      <a class="my-nabvar-item pl-2" href="{{ route('register') }}">
        <i class="fas fa-user-plus"></i>&nbsp;ユーザー登録</a>
      @endif
    </div>
  </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="menuModalLabel">メニュー</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <a id="logout" class="btn btn-primary" href="{{ route('logout') }}">
          ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
          @csrf
          <!-- Equivalent to... -->
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>