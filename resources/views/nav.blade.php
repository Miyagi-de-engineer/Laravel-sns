<nav class="navbar navbar-expand navbar-dark blue-gradient">

    <a href="/" class="navbar-brand"><i class="far fa-sticky-note mr-1"></i>Memo</a>

    <ul class="navbar-nav ml-auto">

        @guest
        <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">ユーザー登録</a>
        </li>
        @endguest

        @guest
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">ログイン</a>
        </li>
        @endguest

        @auth
        <li class="nav-item">
            <a href="{{ route('articles.create') }}" class="nav-link"><i class="fas fa-pen mr-1"></i>投稿する</a>
        </li>
        @endauth

        @auth
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropownMenuLink">
                <button class="dropdown-item" type="button" onclick="location.href">
                    マイページ
                </button>
                <div class="dropdown-driver"></div>
                <button class="dropdown-item" form="logout-button" type="submit">
                    ログアウト
                </button>
            </div>
        </li>
        <form method="POST" action="{{ route('logout') }}" id="logout-button">
            @csrf
        </form>
        @endauth
    </ul>
</nav>