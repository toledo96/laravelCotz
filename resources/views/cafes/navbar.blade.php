<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('app-assets/css/navbar.css')}}">
    @yield('css')
</head>

<body>
    <div class="blockscreen" id="blockscreen">
    </div>
    <header id="header">
        <input type="checkbox" id="menubtn">
        <label for="menubtn" id="menulabel"><img src="{{asset('app-assets/imagenes/menu.png')}}" height="20px"></label>
        <div class="menu">
            <div class="texturl">
<<<<<<< HEAD
                <a href="{{URL::route('cafes')}}">Nuestro Café</a>
                <a href="{{URL::route('tiendita')}}">Compra Online</a>
                <a href="{{URL::route('nosotros')}}">Nosotros</a>
                <button class="login">Iniciar Sesion</button>
                <button class="register">Registrarse</button>
=======
                <a href="/productos">Nuestro Café</a>
                <a href="">Compra Online</a>
                <a href="">Nosotros</a>

                @guest
                <a href="{{URL::route('login')}}" id="loginlabel">Iniciar Sesion</a>
                @if (Route::has('register'))
                <a href="{{URL::route('register')}}" id="registerlabel">Registrarse</a>
                @endif
                @else
                <div class="username">
                    <img src="{{asset('app-assets/imagenes/user.png')}}" height="15px">
                    <a href="">{{ Auth::user()->name }}</a>
                </div>
                <a class="logoutlabel" href="{{ route('logout') }}" 
                onclick="event.preventDefault();    document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesion') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
>>>>>>> 1d26412451a76d451ef8377e85699fe5ca3edce7
            </div>
        </div>
        <div></div>
    </header>
</body>


</html>