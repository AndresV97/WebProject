<?php 
  session_start();
	if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
    //header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Luxury Store</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo_css.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../javascript/javascript.js"></script>
</head>
<body >
    <header>
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
        <a href="../php/index.php"><img class="not" src="../imagenes/logo_luxury.jpg" width="80px" style="border-radius: 150px"></a> 
          <a class="navbar-brand py-0 ml-3 mr-5" href="../php/index.php">LUXURY STORE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../php/index.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Tecnología
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="celulares.php">Celulares</a>
                  <a class="dropdown-item" href="computadores.php">Computadores</a>
                  <a class="dropdown-item" href="consolas.php">Consolas</a>
                  <a class="dropdown-item" href="televisores.php">Televisores</a>

                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Maquillaje
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="cosmetiqueras.php">Cosmetiqueras</a>
                  <a class="dropdown-item" href="iluminadores.php">Iluminadores</a>
                  <a class="dropdown-item" href="labiales.php">Labiales</a>
                  <a class="dropdown-item" href="pestañinas.php">Pestañinas</a>
                  <a class="dropdown-item" href="polvos.php">Polvos</a>
                  <a class="dropdown-item" href="sombras.php">Sombras</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ropa
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="buzos.php">Buzos</a>
                  <a class="dropdown-item" href="camisas.php">Camisas</a>
                  <a class="dropdown-item" href="camisetas.php">Camisetas</a>
                  <a class="dropdown-item" href="jeans.php">Jeans</a>
                  <a class="dropdown-item" href="sudaderas.php">Sudaderas</a>
                  <a class="dropdown-item" href="zapatos.php">Zapatos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="accesorios.php">Accesorios</a>
                </div>
              </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
              <input id="input_search" class="form-control mr-sm-2" type="search" placeholder="¿Qué desea buscar?" aria-label="Search" style="background-color: #F8F8FF;">
              <ul id="box-search">
                <li><a href="celulares.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Celulares</a></li>
                <li><a href="computadores.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Computadores</a></li>
                <li><a href="consolas.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Consolas</a></li>
                <li><a href="televisores.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Televisores</a></li>
                <li><a href="cosmetiqueras.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Cosmetiqueras</a></li>
                <li><a href="iluminadores.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Iluminadores</a></li>
                <li><a href="labiales.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Labiales</a></li>
                <li><a href="pestañinas.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Pestañinas</a></li>
                <li><a href="polvos.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Polvos</a></li>
                <li><a href="sombras.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Sombras</a></li>
                <li><a href="buzos.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Buzos</a></li>
                <li><a href="camisas.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Camisas</a></li>
                <li><a href="camisetas.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Camisetas</a></li>
                <li><a href="jeans.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Jeans</a></li>
                <li><a href="sudaderas.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Sudaderas</a></li>
                <li><a href="zapatos.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Zapatos</a></li>
                <li><a href="accesorios.php"><img class="not" src="../iconos/magnifying-glass.png" width="10px">Accesorios</a></li>
              </ul>
              <div id="btn_search" class="btn btn-outline-primary my-2 my-sm-0" href="#" type="submit"><img class="not" src="../iconos/magnifying-glass.png" width="20px"></div>
              <!--<button class="btn btn-outline-secondary my-2 my-sm-0 ml-4 mr-2" id="cuenta" type="submit"><a href="#">Mi Cuenta</a></button> -->
              <button class="btn btn-outline-primary my-2 my-sm-0 ml-4 mr-2" id="cuenta" type="submit" ><a href="cuenta.php">Mi Cuenta</a></button>
            </form>
          </div>
        </nav>
        <script type="text/javascript" src="../javascript/javascript.js"></script>
        
    </header>

  <div class="contenedor" id="container">

    <div class="container-fluid">
        <div class="row">
        <!-- Acordeón -->
            <div class="d-none d-block col-3 col-sm-3 col-md-3 col-lg-2 px-0">
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          LG
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body"><a href="televisores.php#lg1">OLED UHD OLED65CXPDA</a></div>
                      <div class="card-body"><a href="televisores.php#lg2">OLED UHD OLED65GXPDA</a></div>
                      <div class="card-body"><a href="televisores.php#lg3">OLED UHD OLED65BXPDA</a></div>
                      <div class="card-body"><a href="televisores.php#lg4">OLED HDR OLED55C8PDA</a></div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Samsung
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body"><a href="televisores.php#sm1">65 pulgadas LED 4K Ultra HD</a></div>
                      <div class="card-body"><a href="televisores.php#sm2">43 pulgadas LED 4K Ultra HD</a></div>
                      <div class="card-body"><a href="televisores.php#sm3">55 pulgadas 4K Ultra HD</a></div>
                      <div class="card-body"><a href="televisores.php#sm4">50 Pulgadas UHD 4K</a></div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Celdas de Productos -->

            <div class="col-9 col-sm-9 col-md-9 col-lg-10 px-0">
                <div class="container-fluid" align="center">
                    <h2 class="mt-3" id="HP">LG</h2>
                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lg1.png" width="100%" id="lg1" title="Televisor OLED UHD OLED65CXPDA"><div class="corazon" id="heart34"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor OLED UHD OLED65CXPDA" >Televisor OLED UHD OLED65CXPDA</a></strong></p>
                            <p class="text-left m-0 text-justify"><em>
                                <br>
                                Televisor OLED UHD Con Inteligencia Artificial- Procesador Alpha9 Gen 3 4K -Cinema HDR - Dolby Atmos
                                Pantalla OLED diseño ultra delgado
                                Televisor con Inteligencia Artificial
                                Procesador Inteligente Alpha 9 Gen3 4K , potencializa la imagen y sonido
                                Cinema HDR, la visión del cineasta
                                Sonido Dolby Atmos, envolvente como en el cine<br>
                                <strong>Precio: $5.799.000</strong><br>
                                </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lg2.png" width="100%" id="lg2" title="Televisor OLED UHD OLED65GXPDA"><div class="corazon" id="heart35"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor OLED UHD OLED65GXPDA" >Televisor OLED UHD OLED65GXPDA</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Cinema HDR - Dolby Atmos
                                Pantalla OLED diseño ultra delgado
                                Televisor con Inteligencia Artificial
                                Procesador Inteligente Alpha 9 Gen3 4K , potencializa la imagen y sonido
                                Cinema HDR, la visión del cineasta
                                Sonido Dolby Atmos, envolvente como en el cine<br>
                                <strong>Precio: $6.291.000</strong><br>
                                </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lg3.png" width="95%" id="lg3" title="Televisor OLED UHD OLED65BXPDA"><div class="corazon" id="heart36"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor OLED UHD OLED65BXPDA" >Televisor OLED UHD OLED65BXPDA</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Televisor OLED UHD Con Inteligencia Artificial- Procesador Alpha7 Gen 3 4K -Cinema HDR - Dolby Atmos
                                Pantalla OLED diseño ultra delgado
                                Televisor con Inteligencia Artificial
                                Procesador Inteligente Alpha 7 Gen3 4K , potencializa la imagen y sonido
                                Cinema HDR, la visión del cineasta
                                Sonido Dolby Atmos, envolvente como en el cine<br><strong>Precio: $7.499.500</strong></em></p>
                                
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lg4.png" width="100%" id="lg4" title="Televisor OLED HDR OLED55C8PDA"><div class="corazon" id="heart37"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor OLED HDR OLED55C8PDA" >Televisor OLED HDR OLED55C8PDA</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                TV LG OLED 55'' - HDR Dolby Vision + Technicolor - Procesador Alpha9 - Sonido Dolby Atmos
                                Pantalla OLED
                                Diseño Elegante Bisel Metálico
                                4K CINEMA HDR; más real que nunca
                                Cerebro potente con Procesador Alpha 9
                                Sonido Premium Dolby Atmos
                                Smart TV<br><strong>Precio: $4.699.000</strong><br></em></p>
                                
                        </div>

                    </div>

                    <div class="row mt-5" align="center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="mt-2" id="Huawei">Samsung</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/sm1.png" width="100%" id="sm1" title="Televisor Samsung 65 pulgadas LED 4K Ultra HD Smart TV"><div class="corazon" id="heart38"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor Samsung 65 pulgadas LED 4K Ultra HD Smart TV" >Televisor Samsung 65 pulgadas LED 4K Ultra HD Smart TV</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Tamaño de la pantalla 65 pulgadas
                                Resolución  4K Ultra HD
                                Tecnología  LED
                                Conexión Bluetooth  Sí
                                Entradas USB  1
                                Smart TV  Sí
                                Entradas HDMI 2
                                Control remoto incluido Sí
                                <strong>Precio: $ 2.299.900</strong>        </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/sm2.png" width="100%" id="sm2" title="Televisor Samsung 43 pulgadas LED 4K Ultra HD Smart TV"><div class="corazon" id="heart39"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor Samsung 43 pulgadas LED 4K Ultra HD Smart TV" >Televisor Samsung 43 pulgadas LED 4K Ultra HD Smart TV</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Tamaño de la pantalla 43 pulgadas
                                Resolución  4K Ultra HD
                                Tecnología  LED
                                Conexión Bluetooth  Sí
                                Entradas USB  2
                                Smart TV  Sí
                                Entradas HDMI 3
                                Control remoto incluido Sí.<br>
                                <strong>Precio: $ 1.399.900</strong></em></p>

                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/sm3.png" width="100%" id="sm3" title="Televisor exclusiv 55" 4k ultra hd smart tv><div class="corazon" id="heart40"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor exclusiv 55" 4k ultra hd smart tv" >Televisor exclusiv 55" 4k ultra hd smart tv</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Tamaño de la pantalla 55 pulgadas
                                Resolución  4K Ultra HD
                                Tecnología  LCD
                                Conexión Bluetooth  No
                                Entradas USB  2
                                Smart TV  Sí
                                Entradas HDMI 3
                                Control remoto incluido Sí.<br>
                                <strong>Precio: $ 1.299.900</strong>
                              </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/sm4.png" width="100%" id="sm4" title="Televisor LED Samsung 50 Pulgadas UHD 4K Smart TV Serie 7"><div class="corazon" id="heart41"></div>
                            <p class="m-0"><strong class="text-center"><a title="Televisor LED Samsung 50 Pulgadas UHD 4K Smart TV Serie 7" >Televisor LED Samsung 50 Pulgadas UHD 4K Smart TV Serie7</a></strong></p>
                            <p class="text-left m-0"><em>
                                Tamaño de Pantalla
                                50 Pulgadas
                                Tipo de pantalla
                                Plano
                                Resolución
                                Uhd-4K
                                Tipo de Producto
                                Otros Accesorios Grandes
                                Tecnología
                                Smart Tv
                                Tipo De pantalla
                                Plano
                                Número de Piezas
                                1
                                Wi-Fi Direct
                                Si.<br>
                                <strong>Precio: $ 1.699.900</strong></em></p>
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>

    <footer class="blockquote-footer" >
        <div class="container-fluid" style="background-color: #1C2833;">
            <div class="row">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <br><br>
                    <h4>DATOS DE CONTACTO</h4><br>
                    <h6>UBICACION:</h6>
                    <p>Medellín, Antioquia <br>Tienda Virtual</p>
                    <h6>WHATSAPP:</h6>
                    <P> Ventas al detal: 321 630 4077<br>
                        Ventas al por mayor: 300 319 7203<br>
                        Sugerencias, Quejas y Reclamos: 321 630 4077</P>

                    <h6>EMAIL:</h6>
                    <p>servicio_cliente@luxurystore.com</p>

                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                  <div class="row">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <br><br>
                      <h4>MI CUENTA</h4>
                      <p><a href="cuenta.php">Contacto</a>&nbsp &nbsp &nbsp <a href="cuenta.php">Historial de pedidos</a><br>
                        <a href="cuenta.php">Mi cuenta</a>&nbsp &nbsp &nbsp<a href="cuenta.php">Ingresar</a><br>
                        <a href="cuenta.php">Políticas de privacidad</a>
                      </p>  
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                      <br><br>
                      <h4>PRINCIPALES CARACTERÍSTICAS</h4>
                        <p>&nbsp&nbsp<a href="index2.php#referencia">ATENCIÓN AL CLIENTE</a><br>
                           &nbsp&nbsp<a href="index2.php#referencia">PAGO SEGURO</a><br>
                           &nbsp&nbsp<a href="index2.php#referencia">AHORRA COMPRANDO</a><br>
                           &nbsp&nbsp<a href="index2.php#referencia">SOMOS SOLIDARIOS</a></p>
                    </div>
                  
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <br><br>
                        <h4>HORARIO DE ATENCIÓN</h4>
                        <p>Lunes - Viernes: 10am - 8pm <br>Sábados: 10am- 2pm</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <br><br>
                    <p>© 2020 LuxuryStore All Rights Reserved | powered by University of Antioquia</p>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <br><br>
                    <cite title="Source Title"><a target="_blank" href="https://www.instagram.com/andres_villegas97/">Instagram</a></cite>   
                    <a target="_blank" href="https://www.instagram.com/andres_villegas97/"><img class="not" src="../iconos/instagram-symbol.png" width="25px"></a>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <br><br>
                    <cite title="Source Title"><a target="_blank" href="https://www.facebook.com/andres.villegas97">Facebook</a></cite>   
                    <a target="_blank" href="https://www.facebook.com/andres.villegas97"><img class="not" src="../iconos/facebook-logo-1.png" width="25px"></a>
                    </div>
                  </div>
                </div>

                
            </div>
            <cite title="Source Title">Luxury Store<br>Diseñado y construido por Andrés Villegas® y Andrés Estrada®</cite><br><br>
        </div>      
    </footer>
</body>
</html>