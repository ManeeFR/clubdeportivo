@extends('layouts.plantilla')

@section('title', 'home')

@section('content')


    <style>
        @font-face {
  font-family: "manuscrita";
  src: url("{{ asset('fonts/Italianno-Regular.ttf') }}");
}
@font-face {
  font-family: "titulos";
  src: url("{{ asset('fonts/Lato-Regular.ttf') }}");
}
* {

  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
  box-sizing: border-box;
  font-size: 62.5%;
  /* background-color: #3d4152; */
}

h1, h2, h3, p{
  color: black;

}

h1 {
  font-size: 4rem;
  font-family: "titulos";
}

h2 {
  font-size: 3.2rem;
  font-family: "titulos";
}

h3 {
  font-size: 2.4rem;
  font-family: "titulos";
}

p {
  font-size: 2rem;
  font-family: "titulos";
}

li {
  font-size: 2rem;
  font-family: sans-serif;
}

span {
  font-size: 1.6rem;
}

body {

  background-color: #ffffff;
}

.header {
  width: 70%;
  margin: 30px auto;
  display: flex;
  justify-content: space-between;
}
.header .header__contImg {
  width: 50%;
}
.header .header__contImg img {
  display: block;
  max-width: 40%;
}
.header .header__contNav {
  width: 50%;
  display: flex;
  align-items: center;
  justify-content: end;
}
.header .header__contNav a img {
  display: block;
  width: 30px;
  height: 30px;
}

.menu {
  width: 100%;
  background-color: #141616;
  display: flex;
  justify-content: center;
  padding: 20px 0;
  margin-bottom: 30px;
}
.menu ul {
  display: flex;
  justify-content: space-between;
  width: 70%;
  max-width: 1500px;
}
.menu ul a {
  text-decoration: none;
}
.menu ul a li {
  color: white;
  list-style: none;
}

.fotoHero {
  background-image: url("{{ asset('img/post/pistas.jpg') }}");
  background-size: cover;
  background-position: center center;
  width: 70%;
  height: 50rem;
  margin: 20px auto;
  box-shadow: 0px 7px 8px 1px black;
}

main {
  margin: 50px auto;
  text-align: center;
}

main p {
  margin: 30px auto;
}
main .main__cards {
  width: 70%;
  margin: 30px auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(1, 1fr);
}
main .main__cards .card img {
  margin: 0 auto;
  display: block;
  max-width: 100%;
  border: 3px solid white;
  transform: rotate(0deg);
  transition: transform 0.5s;
}
main .main__cards .card img:hover {
  transform: rotate(5deg) scale(1.1);
  transition: transform 1s;
}
main .main__cards .card .card__txt {
  background-color: white;
  margin: 0 auto;
  width: 80%;
  order: -1;
  position: relative;
  bottom: 30px;
  padding-top: 20px;
}
main .main__cards .card .card__txt a {
  font-family: "titulos";
  font-weight: bold;
  text-decoration: none;
  margin: 35px auto;
  color: white;
  display: block;
  width: 100%;
  padding: 15px 0;
  background-color: #1e008b;
  font-size: 2rem;
}
main .main__cards .card .card__txt a:hover {
  background-color: #1e008b;
  transition: background-color 1s;
}
main .horarios {
  width: 100%;
  display: flex;
}
main .horarios .horarios__txt {
  font-family: "titulos";
  background-color: hsl(234, 94%, 68%);
  width: 50%;
  display: flex;
  justify-content: end;
}
main .horarios .horarios__txt div {
  margin: 10px 10px;
  text-align: center;
  max-width: 500px;
}
main .horarios .horarios__txt div .horarios__table {
  color: white;
  margin: 40px auto;
  border: 3px solid #e082a8;
  border-collapse: collapse;
}
main .horarios .horarios__txt div .horarios__table tr {
  font-size: 3.2rem;
}
main .horarios .horarios__txt div .horarios__table tr:nth-child(1) {
  background-color: #e082a8;
}
main .horarios .horarios__txt div .horarios__table tr td, main .horarios .horarios__txt div .horarios__table tr th {
  padding: 10px 40px;
}
main .horarios .horarios__txt div .horarios__table tr:hover {
  background-color: #1e008b;
}
main .horarios .horarios__txt div .horarios__table tr:nth-child(1):hover {
  background-color: #e082a8;
}
main .horarios .horarios__img {
  background-image: url("{{ asset('img/post/bg_horario.jpg') }}");
  background-size: cover;
  background-position: center right;
  width: 50%;
}
main .productos {
  margin: 50px auto;
}
main .productos .productos__cont {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(1, 1fr);
  width: 70%;
  margin: 40px auto;
  gap: 20px;
}
main .productos .productos__cont .productos__cont__card {
  background-color: white;
  text-transform: uppercase;
}
main .productos .productos__cont .productos__cont__card .productos__cont__card__foto {
  width: 100%;
  margin-bottom: 20px;
  overflow: hidden;
}
main .productos .productos__cont .productos__cont__card .productos__cont__card__foto img {
  display: block;
  width: 100%;
  max-width: 100%;
}
main .productos .productos__cont .productos__cont__card .productos__cont__card__foto img:hover {
  transform: scale(1.2);
  transition: transform 1s;
}
main .productos .productos__cont .productos__cont__card p {
  font-size: 1.5rem;
}
main .productos .productos__cont .productos__cont__card h4 {
  font-family: "titulos";
  font-size: 2.4rem;
  color: #1e008b;
}

.imagen__scroll {
  margin: 40px 0;
  height: 45rem;
  width: 100%;
  background-image: url("{{ asset('img/post/bg_padel.jpg') }}");
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  display: flex;
  align-items: center;
  justify-content: center;
}
.imagen__scroll div {
  color: white;
  width: 34%;
  text-align: center;
  margin: 0 auto;
}
.imagen__scroll div a {
  width: 70%;
  font-family: "titulos";
  font-weight: bold;
  text-decoration: none;
  margin: 35px auto;
  color: white;
  display: block;
  padding: 15px 0;
  font-size: 2rem;
  background-color: #1e008b;
}
.imagen__scroll div a:hover {
  background-color: #e082a8;
  transition: background-color 1s;
}

.footer {
  border-bottom: 1px solid #1e008b;
  padding-bottom: 20px;
  margin: 0 auto;
  width: 70%;
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-template-rows: repeat(1, 1fr);
  text-align: center;
}
.footer .footer__nosotros, .footer .footer__contacto, .footer .footer__horario {
  display: flex;
  flex-direction: column;
  gap: 30px;
}
.footer .footer__horario ul {
  list-style: none;
}
.footer .footer__horario ul li {
  margin-bottom: 30px;
}
.footer .footer__contacto .footer__contacto__redes {
  display: flex;
  justify-content: center;
  align-items: center;
}
.footer .footer__contacto .footer__contacto__redes a img {
  display: block;
  width: 30px;
  height: 30px;
}

span {
  display: block;
  text-align: center;
  margin: 15px auto;
}

@media screen and (max-width: 768px) {
  .header {
    width: 100%;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .header .header__contImg {
    display: flex;
    justify-content: center;
    width: 100%;
  }
  .header .header__contImg img {
    max-width: 60%;
  }
  .header .header__contNav {
    justify-content: center;
    margin: 30px auto;
  }

  .menu ul {
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .fotoHero {
    height: 25rem;
    margin: 20px auto;
    box-shadow: 0px 7px 8px 1px black;
  }

  main .main__cards {
    width: 70%;
    margin: 30px auto;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-template-rows: repeat(1, 1fr);
  }
  main .horarios {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-template-rows: repeat(2, 1fr);
  }
  main .horarios .horarios__txt {
    width: 100%;
    display: flex;
    justify-content: center;
  }
  main .horarios .horarios__img {
    background-size: cover;
    background-position: center center;
    width: 100%;
    margin: 20px auto;
  }
  main .productos .productos__cont {
    grid-template-columns: 1fr;
    grid-template-rows: repeat(4, 1fr);
  }

  .imagen__scroll {
    height: 58rem;
  }

  .footer {
    grid-template-columns: 1fr;
    grid-template-rows: repeat(3, 1fr);
  }
}


    </style>
<head>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
      </script>


    <header class="header">
        <div class="header__contImg" style="display: flex; flex: 1 1;">
            <img style="min-width: 20vw;" src="{{asset('img/post/logopadel.png')}}" alt="Foto del logo">
            <h1 style="color: rgb(71, 36, 32); min-width: 35vw; margin-top: 7vh;">EL MEJOR CLUB DEPORTIVO DE PÁDEL DE UTRERA</h1>
        </div>

        <div class="header__contNav">
            <a data-aos="fade-down" data-aos-delay="200" href="https://www.facebook.com/"><img src="{{asset('img/post/icono_facebook.svg')}}" alt="Facebook"></a>
            <a data-aos="fade-down" data-aos-delay="200" href="https://www.twitter.com/"><img src="{{asset('img/post/icono_twitter.svg')}}" alt="Twitter"></a>
            <a data-aos="fade-down" data-aos-delay="200" href="https://www.instagram.com/"><img src="{{asset('img/post/icono_instagram.svg')}}" alt="Instagram"></a>
            <a data-aos="fade-down" data-aos-delay="200" href="https://www.youtube.com/"><img src="{{asset('img/post/icono_youtube.svg')}}" alt="Youtube"></a>
            <a data-aos="fade-down" data-aos-delay="200" href="https://www.tiktok.com/"><img src="{{asset('img/post/icono_tiktok.svg')}}" alt="Tiktok"></a>
        </div>
    </header>

    <div class="fotoHero">

    </div>

    <main class="main">
        <h3>Bienvenidos/as a nuestro sitio web</>
        <h2>CLUB DE PÁDEL</h2>
        <p>Disponemos de los mejores entrenadores del sector</p>


        <section class="main__cards">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000"  class="card">
                <img src="{{asset('img/post/servicio_01.jpg')}}" alt="Servicio 01">
                <div class="card__txt">
                    <h3>conoce mas sobre</h3>
                    <h2>NOSOTROS</h2>
                    <a href="#">LEER MÁS</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000"  class="card">
                <img src="{{asset('img/post/servicios_02.jpg')}}" alt="Servicio 02">
                <div class="card__txt">
                    <h3>nuestros</>
                    <h2>SERVICIOS</h2>
                    <a href="#">LEER MÁS</a>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000"  class="card">
                <img src="{{asset('img/post/servicio_03.jpg')}}" alt="Servicio 03">
                <div class="card__txt">
                    <h3>visita nuestra</h3>
                    <h2>TIENDA</h2>
                    <a href="#">LEER MÁS</a>
                </div>
            </div>
        </section>


        <section class="horarios">
            <div class="horarios__txt">
                <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                    <h2>HORARIOS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sed enim corporis eius quo repellendus placeat voluptas? Amet ullam nam neque assumenda voluptates, possimus nulla eum quas commodi, qui dolorum!</p>
                <table class="horarios__table" >
                    <tr>
                        <th>Dia</th>
                        <th>De</th>
                        <th>Hasta</th>
                    </tr>
                    <tr>
                        <td>Lunes</td>
                        <td>9:00</td>
                        <td>21:00</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>9:00</td>
                        <td>21:00</td>
                    </tr>
                    <tr>
                        <td>Miércoles</td>
                        <td>9:00</td>
                        <td>21:00</td>
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        <td>9:00</td>
                        <td>21:00</td>
                    </tr>
                    <tr>
                        <td>Viernes</td>
                        <td>9:00</td>
                        <td>21:00</td>
                    </tr>
                    <tr>
                        <td>Sábado</td>
                        <td>9:00</td>
                        <td>21:00</td>
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        <td colspan="2">Cerrado</td>
                    </tr>

                </table>
                </div>

            </div>
            <div class="horarios__img" style="">

            </div>
        </section>

        <section class="productos">
            <h3>nuestros</h3>
            <h1>PRODUCTOS</h1>

            <div class="productos__cont">
                <div data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000" class="productos__cont__card">
                    <div class="productos__cont__card__foto">
                        <img src="{{asset('img/post/productos_01.jpg')}}" alt="">
                    </div>
                    <h4>Producto 1</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptate voluptatibus.</p>
                    <h4>30€</h4>
                </div>
                <div data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000" class="productos__cont__card">
                    <div class="productos__cont__card__foto">
                        <img src="{{asset('img/post/productos_02.jpg')}}" alt="">
                    </div>
                    <h4>Producto 2</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptate voluptatibus.</p>
                    <h4>40€</h4>
                </div>
                <div data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000" class="productos__cont__card">
                    <div class="productos__cont__card__foto">
                        <img src="{{asset('img/post/productos_03.jpg')}}" alt="">
                    </div>
                    <h4>Producto 3</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptate voluptatibus.</p>
                    <h4>50€</h4>
                </div>
                <div data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000" class="productos__cont__card">
                    <div class="productos__cont__card__foto">
                        <img src="{{asset('img/post/productos_04.jpg')}}" alt="">
                    </div>
                    <h4>Producto 4</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptate voluptatibus.</p>
                    <h4>55€</h4>
                </div>
            </div>
        </section>

        <div class="imagen__scroll">
            <div>
                <h1>PIDE UNA CITA</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia optio nemo aliquam impedit culpa id ad, quaerat quo quisquam quod mollitia? Dignissimos fugit quasi, pariatur excepturi autem numquam aperiam animi?</p>
                <a href="#">LEER MÁS</a>
            </div>


        </div>




    </main>

    <footer class="footer">
        <div class="footer__nosotros">
            <h2 style="color: black;">NOSOTROS</h2>
            <p style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias modi ex itaque quasi minima maxime deserunt ullam qui quis earum. Obcaecati nisi rerum iure sint facilis eum, magnam quisquam officia!</p>
        </div>



        <div class="footer__contacto">
            <h2 style="color: black;">CONTACTO</h2>
            <p style="color: black;">Av. Constitución, 14</p>
            <div class="footer__contacto__redes">
                <a href="https://www.facebook.com/"><img src="{{asset('img/post/icono_facebook.svg')}}" alt="Facebook"></a>
                <a href="https://www.twitter.com/"><img src="{{asset('img/post/icono_twitter.svg')}}" alt="Twitter"></a>
                <a href="https://www.instagram.com/"><img src="{{asset('img/post/icono_instagram.svg')}}" alt="Instagram"></a>
                <a href="https://www.youtube.com/"><img src="{{asset('img/post/icono_youtube.svg')}}" alt="Youtube"></a>
                <a href="https://www.tiktok.com/"><img src="{{asset('img/post/icono_tiktok.svg')}}" alt="Tiktok"></a>
            </div>
        </div>
    </footer>
    <span><small style="color: black;"> Realizado por Manuel y Javier, alumnado del IES Ruiz Gijón</small></span>


</body>
</html>



@endsection
