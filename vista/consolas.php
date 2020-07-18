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
                          PLAY STATION
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body"><a href="consolas.php#ps1">Playstation 3</a></div>
                      <div class="card-body"><a href="consolas.php#ps2">Playstation 4</a></div>
                      <div class="card-body"><a href="consolas.php#ps3">Playstation 5</a></div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          XBOX
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body"><a href="consolas.php#xb1">Xbox 360</a></div>
                      <div class="card-body"><a href="consolas.php#xb2">Xbox ONE</a></div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Celdas de Productos -->

            <div class="col-9 col-sm-9 col-md-9 col-lg-10 px-0">
                <div class="container-fluid" align="center">
                    <h2 class="mt-3" id="play">PLAY STATION</h2>
                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/ps1.png" width="100%" id="ps1" title="Playstation 3 Super Slim"><div class="corazon" id="heart29"></div>
                            <p class="m-0"><strong class="text-center"><a title="Playstation 3 Super Slim" >Playstation 3 Super Slim</a></strong></p>
                            <p class="text-left m-0 text-justify"><em>
                                <br>
                                Marca
                                Sony
                                Línea
                                PlayStation 3
                                Modelo
                                PlayStation 3
                                Sub modelo
                                Super Slim
                                Capacidad
                                500 GB
                                Resolución máxima de salida de video 1920 px x 1080 px
                                Velocidad del procesador 3.2 GHz
                                Juegos Sí<br>
                                <strong>Precio: $1.899.000</strong><br>
                                </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/ps2.png" width="100%" id="ps2" title="Consola PlayStation 4 "><div class="corazon" id="heart30"></div>
                            <p class="m-0"><strong class="text-center"><a title="Consola PlayStation 4 " >Consola PlayStation 4 </a></strong></p>
                            <p class="text-left m-0"><em>
                                <br><br>
                                Capacidad de almacenamiento 1TB
                                Procesador  8 núcleos x 86 AMD
                                Entradas USB  2
                                Entradas HDMI 1
                                Conectividad  Bluetooth
                                Tipo  PS4
                                Modelo  CUH-2215B
                                Hecho en  China<br>
                                <strong>Precio: $ 1.999.000 </strong><br>
                                </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/ps3.png" width="95%" id="ps3" title="La Playstation 5 de Sony"><div class="corazon" id="heart31"></div>
                            <p class="m-0"><strong class="text-center"><a title="La Playstation 5 de Sony" >La Playstation 5 de Sony</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Procesador  CPU AMD Ryzen Zen 2 de ocho núcleos a 3.6GHz
                                Tarjeta Gráfica AMD Radeon RDNA 2 GPU personalizada con 36 CU a 2.23 GHz (10.3 teraflops)
                                RAM 16GB GDDR6
                                Almacenamiento  825GB SSD
                                Unidad óptica Sí, 4K Blu-ray
                                Resolución  8K
                                Fotogramas por segundo  4K/120fps
                                Funciones mandos  Retroalimentación háptica, disparadores adaptativos, conector USB-C<br><strong>Próximamente</strong></em></p>
                                
                        </div>
                    </div>

                    <div class="row mt-5" align="center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="mt-2" id="Huawei">XBOX</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/xb1.png" width="100%" id="xb1" title="Xbox 360 Ultra Slim E 5.0"><div class="corazon" id="heart32"></div>
                            <p class="m-0"><strong class="text-center"><a title="Xbox 360 Ultra Slim E 5.0" >Xbox 360 Ultra Slim E 5.0</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Xbox
                                Sub modelo
                                Slim
                                Controles Sí
                                Conectividad de los controles Inalámbrico
                                Resolución máxima de salida de video 1920 px x 1080 px
                                Cantidad de núcleos de CPU 3
                                HDMI Sí
                                Juegos Sí<br>
                                <strong>Precio: $945.481</strong>        </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/xb2.png" width="100%" id="xb2" title="Consola X-Box One"><div class="corazon" id="heart33"></div>
                            <p class="m-0"><strong class="text-center"><a title="Consola X-Box One">Consola X-Box One</a></strong></p>
                            <p class="text-left m-0"><em>
                                <br>
                                Capacidad de almacenamiento 1TB
                                Procesador  AMD Jaguar
                                Entradas USB  3
                                Entradas HDMI 1
                                Conectividad  WiFi/Ethernet/Bluetooth
                                Tipo  X-Box One
                                Modelo  Xbox One S All Digital
                                Hecho en  China.<br>
                                <strong>Precio: $ 1.299.900</strong></em></p>

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
                        <p>&nbsp&nbsp<a href="index.php#referencia">ATENCIÓN AL CLIENTE</a><br>
                           &nbsp&nbsp<a href="index.php#referencia">PAGO SEGURO</a><br>
                           &nbsp&nbsp<a href="index.php#referencia">AHORRA COMPRANDO</a><br>
                           &nbsp&nbsp<a href="index.php#referencia">SOMOS SOLIDARIOS</a></p>
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