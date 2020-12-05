<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHizza Hut</title>
    <link rel="icon" href="/storage/images/pizzaLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <a class="navbar-brand left-position" href="{{route('pizza.index')}}">
        <img src="{{url('storage/images/logo.png')}}" width="110" height="50" alt="" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto right-position">
            @if(isset($user))
                @if($user == "Guest")
                    <li class="nav-item active">
                        <a href="{{route('login')}}" class="nav-link" id="text-color">Login</a>
                    </li>
                    <li class="nav-link" id="divider">|</li>
                    <li class="nav-item active">
                        <a href="{{route('register')}}" class="nav-link" id="text-color">Register</a>
                    </li>
                @else

                    @if($user->role_id == 1)
                        <li class="nav-item active">
                            <a href="{{route('users.transaction')}}" class="nav-link" id="text-color">View All User Transaction</a>
                        </li>
                        <li class="nav-link" id="divider">|</li>
                        <li class="nav-item active">
                            <a href="{{route('users.index')}}" class="nav-link" id="text-color">View All User</a>
                        </li>
                    @elseif($user->role_id == 2)
                        <li class="nav-item active">
                            <a href="{{route('order.history',$user->id)}}" class="nav-link" id="text-color">View Transaction History</a>
                        </li>
                        <li class="nav-link" id="divider">|</li>
                        <li class="nav-item active">
                            <a href="/carts/{{$user->id}}" class="nav-link" id="text-color">View Cart</a>
                        </li>
                    @endif
                        <li class="nav-link" id="divider">|</li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" style="color: #ffffff;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ $user->username }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                @endif
            @else
                <li class="nav-item active">
                    <a href="{{route('login')}}" class="nav-link"  id="text-color">Login</a>
                </li>
                <li class="nav-link" id="divider">|</li>
                <li class="nav-item active">
                    <a href="{{route('register')}}" class="nav-link" id="text-color">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>

    <div class="container">
        @yield('content')
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
