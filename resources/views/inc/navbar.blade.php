<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('', 'THEATRA') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">ホーム</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('review.index')}}">マイページ</a>
                        </li>
                        <li class="nav-item float-left">
                            <a class="nav-link" href="{{route('movies.index')}}">映画</a>
                        </li>
                    @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{isset($user) ? asset($user->profile->avator) : Auth::user()->profile->avator}}"
                            alt="{{Auth::user()->name}}" height="40px" width="40px" style="border-radius:50%"
                            class="profile-iamge image-circle">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth::check())
                            <a class="dropdown-item" href="{{ route('profiles.index') }}">
                                プロフィール編集
                            </a><hr>
                            <a class="dropdown-item" href="#">
                                アカウント情報
                            </a>
                            <a class="dropdown-item" href="{{ route('contacts.index') }}">
                                お問い合わせ
                            </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
