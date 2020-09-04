<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
            @if (Auth::check())
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">用户列表</a>
                        <a class="dropdown-item" href="{{ route('users.show',Auth::user()) }}">个人中心</a>
                        <a class="dropdown-item" href="#">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">退出</button>
                            </form>
                        </a>
                    </div>
                </div>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
            @endif
        </ul>
    </div>
</nav>
