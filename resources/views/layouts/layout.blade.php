<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHizza Hut</title>
    <link rel="icon" href="/images/pizzaLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>

<nav class="navbar navbar-light bg-custom">
    <a class="navbar-brand container" href="{{route('pizza.index')}}">
            <img src="/images/logo.png" width="110" height="50" alt="" loading="lazy">
    </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item right-position">
                @if(isset($user))
                    @if($user == "Guest")
                    <a href="{{route('login')}}" class="authColor">Login |</a>
                    <a href="{{route('register')}}" class="authColor">Register</a>
                    @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ $user->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>

                    @if($user->role_id == 1)
                        <a href="" class="authColor">View All User Transaction |</a>
                    <a href="{{route('users.index')}}" class="authColor">View All User |</a>
                    @elseif($user->role_id == 2)
                        <a href="{{route('order.history',$user->id)}}" class="authColor">View Transaction History |</a>
                    <a href="/carts/{{$user->id}}" class="authColor">View Cart |</a>
                    @endif

                    @endif

                @else
                <a href="{{route('login')}}" class="authColor">Login |</a>
                <a href="{{route('register')}}" class="authColor">Register</a>
                @endif
            </li>
        </ul>


</nav>

    <div class="container">
        @yield('content')
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
