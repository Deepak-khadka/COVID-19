<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="../images/ceelina.jpg ">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="container-main">
    <!--Slidbar Section-->
    <div class="sidebar">
        <div class="logo-section text-center">
            <span> Sanjeevani</span>
        </div>
        <div class="menu">
            <div class="menulist ">
                <ul>
                    <li class=" <?php  if(url()->current() == url('')){echo "active";}?>"><a href="/" >Home</a></li>
                    <li class=" <?php  if(url()->current() == url('/question')){echo "active";}?>"  ><a href="/question">Questions</a></li>
                    <li class=" <?php  if(url()->current() == url('/suitation')){echo "active";}?>"><a href="/suitation">Suitation Reports</a></li>
                    <li class=" <?php  if(url()->current()==  url('/helpline')){echo "active";}?>"><a href="/helpline">Helpline</a></li>

                </ul>
            </div>
        </div>
    </div>

<div class="main-body">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="search-people" >
                    <input type="search" placeholder="Search People" class="form-control">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

    </div>

    <div class="container" style="margin-top: 10px">
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {!! session()->get('error') !!}

            </div>

        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                {!! session()->get('success') !!}

            </div>
        @endif

    </div>
   @yield('content')
</div>
</div>
    <!--End of Sidebar Section-->


</body>

</html>
