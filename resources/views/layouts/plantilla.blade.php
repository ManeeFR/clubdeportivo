<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    .before {
        width: 130px;
    }
    .menuToggle::before, .menuToggle::after{
        margin-left: 1.5vw;
    }
</style>
</head>
<body>

    <body>
        <div class="navigation before">
            <div class="menuToggle"></div>
            <ul>

                <li class="list active" style="--clr:#f44336;">
                    <a href="{{route('home')}}">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Inicio</span>
                    </a>
                </li>
                {{-- <li class="list active" style="--clr:#ffa117;">
                    <a href="{{route('reservas.create')}}">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="text">Nosotros</span>
                    </a>
                </li> --}}
                <li class="list active" style="--clr:#0fc70f;">
                    <a href="{{route('reservas.create')}}">
                        <span class="icon"><ion-icon name="flag-outline"></ion-icon></span>
                        <span class="text">Pistas</span>
                    </a>
                </li>
                <li class="list active" style="--clr:#ffa117;">
                    <a href="{{route('reservas.create')}}">
                        <span class="icon"><ion-icon name="camera-outline"></ion-icon></span>
                        <span class="text">Galería</span>
                    </a>
                </li>
                <li class="list active" style="--clr:#b145e9;">
                    <a href="{{url('https://www.eltiempo.es/utrera.html')}}">
                        <span class="icon"><ion-icon name="cloud-outline"></ion-icon></span>
                        <span class="text">Tiempo</span>
                    </a>
                </li>

            </ul>
        </div>

        @yield('content')

        <script>
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.onclick = function(){
                navigation.classList.toggle('open')
            }

            const list = document.querySelectorAll('.list');
            function activeLink(){
                list.forEach((item) =>
                item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) =>
            item.addEventListener('click',activeLink))

        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>
