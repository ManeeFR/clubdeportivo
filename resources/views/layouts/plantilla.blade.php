<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    <!-- nav -->
    <body>
        <div class="navigation">
            <div class="menuToggle"></div>
            <ul>
                <li class="list active" style="--clr:#f44336;">
                    <a href="{{route('home')}}">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list" style="--clr:#ffa117;">
                    <a href="{{route('reservas.create')}}">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="text">About</span>
                    </a>
                </li>
                <li class="list" style="--clr:#0fc70f;">
                    <a href="{{route('reservas.create')}}">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="text">Pistas</span>
                    </a>
                </li>
                <li class="list" style="--clr:#2196f3;">
                    <a href="{{route('reservas.create')}}">
                        <span class="icon"><ion-icon name="camera-outline"></ion-icon></span>
                        <span class="text">Photos</span>
                    </a>
                </li>
                <li class="list" style="--clr:#b145e9;">
                    <a href="{{route('reservas.create')}}">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="text">Settings</span>
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


    <!-- footer -->
    <!-- script -->
</body>
</html>
