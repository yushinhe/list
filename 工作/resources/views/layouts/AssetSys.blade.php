<!doctype html>
<html lang="en">

<head>
    <title>asset-sys</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+TC:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-danger text-white">
            <a class="navbar-brand logo_main" href="#"><img src="images/816484.jpg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="{{ url('/asset-sys') }}">資產管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Link</a>
                    </li>

                </ul>
            </div>
            <ul class="navbar-nav ml-auto ">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
        <div class="content d-flex">
            <div class="sidebar p-3 bg-light animated slideInLeft">
                <ul class="list-group p-2 list-unstyled">
                <li><a class="list-group-item list-group-item-action btn btn-outline-danger my-2"
                            href=" {{ url('/asset-sys-movein') }} ">資產移交</a>
                    </li>
                    <li><a class="list-group-item list-group-item-action btn btn-outline-danger my-2"
                            href="{{ url('/asset-sys-withdraw') }}">資產領用</a>
                    </li>
                    <li><a class="list-group-item list-group-item-action btn btn-outline-danger my-2"
                            href="{{ url('/asset-sys-borrow') }}">資產借用</a>
                    </li>
                    <li><a class="list-group-item list-group-item-action btn btn-outline-danger my-2"
                            href="{{ url('/asset-sys-return') }}">資產歸還</a>
                    </li>
                    
                    <li><a class="list-group-item list-group-item-action btn btn-outline-info my-2"
                            href="{{ url('/asset-sys-borrow-out') }}">資產借出</a>
                    </li>
                    <li><a class="list-group-item list-group-item-action btn btn-outline-info my-2"
                            href="{{ url('/asset-sys-returnback') }}">歸還入庫</a>
                    </li>
                </ul>
            </div>

            <div class="main p-4">
                @yield('content')
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    
</body>

</html>
