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
              <a href="index.php"><img class="not" src="../imagenes/logo_luxury.jpg" width="80px" style="border-radius: 150px"></a> 
                <a class="navbar-brand py-0 ml-3 mr-5" href="index.php">LUXURY STORE</a>
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
                    <button class="btn btn-outline-primary my-2 my-sm-0 ml-4 mr-2" id="cuenta" type="submit" ><a href="../php/cuenta.php">Mi Cuenta</a></button>
                  </form>
                </div>
              </nav>
        <script type="text/javascript" src="../javascript/javascript.js"></script>
        
    </header>
<div class="contenedor" id="container">
    <div class="container-fluid" id="bloque">
      <div class="row">  
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div id="carousel-main" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner" align="center">
                <div class="carousel-item active">
                    <img class="not" src="../imagenes/carrusel4.jpg" width="50%">
                    <div class="carousel-caption">
                        <h3></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="not" src="../imagenes/maquillaje.jpg" width="41.9%">
                    <div class="carousel-caption">
                        <h3></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="not" src="../imagenes/ropa.jpg" width="49.8%">
                    <div class="carousel-caption">
                        <h3></h3>
                    </div>
                </div>
                
            </div>

            <a href="#carousel-main" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon border border-dark"></span>
            </a>
            <a href="#carousel-main" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon border border-dark"></span>
            </a>

            <ul class="carousel-indicators">
            
                <li data-target="#carousel-main" class="active" data-slide-to=0></li>
                <li data-target="#carousel-main"  data-slide-to=1></li>
                <li data-target="#carousel-main"  data-slide-to=2></li>
            </ul>
          </div>
         </div> 
      </div>
    </div>  

    <div class="container-fluid mt-5 px-0 text-center">

      <div class="row container-fluid px-3 mx-0">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-5 mt-3">
          <h2 id="Home"><em><strong>Información de la tienda</strong></em></h2>
          <p class="p-2 text-justify"><em>Luxury Store es una tienda virtual de ventas de Tecnología, maquillaje y ropa en Medellín, en efectivo o a crédito. Nos hemos especializado en crédito donde miles de clientes han obtenido sus productos pagados en cuotas muy cómodas hasta un máximo de 12 meses.

          Líderes en la comercialización de las mejores marcas y modelos de telefonía móvil, artículos para la belleza y lo mejor de la moda en Colombia. importadores directos, razón que nos permite ofrecer las mejores marcas a los mejores precios, al por mayor y al detal en todo el mercado nacional. </em></p>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 px-3">
          <div class="center px-0">
            <h2 id="referencia"><em><strong></strong></em></h2>
          </div>
          <div class="row px-0 mx-0 container-fluid">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 px-0 container-fluid">
              <a target="_blank" title="Ahorra Comprando"><img class="not" id="facebook" src="../imagenes/pesos.png" width="100px"></a>
              <p class="p-2 text-center"><em><strong>AHORRA COMPRANDO</strong><br>
                                            ¡Premiamos tu fidelidad!<br>
              Por compras de 6 o más productos obtienes un descuento automático del 15% en el total tu compra (antes del envío). El descuento lo ves reflejado cuando vas a pagar.</em></p> 
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 px-0 container-fluid">
              <a target="_blank" title="Pago Seguro"><img class="not" id="facebook" src="../imagenes/pago.png" width="100px"></a>
              <p class="p-2 text-center"><em><strong>PAGO SEGURO</strong><br>
                                            Seguro y rápido<br>
              Garantizamos la seguridad de tus transacciones. Los pagos se realizan con Certificado de seguridad SSL, encriptando los datos bancarios para un pago seguro.</em></p> 
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 px-0 container-fluid">
              <a target="_blank" title="Atención al Cliente"><img class="not" id="facebook" src="../imagenes/atencion.png" width="100px"></a>
              <p class="p-2 text-center"><em><strong>ATENCIÓN AL CLIENTE</strong><br>
                                              ¿Necesita ayuda?<br>

               Puedes confiar en nosotros. Nuestra web está disponible 24/7 porque atenderte es nuestra prioridad. Respondemos oportunamente todas tus dudas.</em></p> 
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 px-0 container-fluid">
              <a target="_blank" title="Somos Solidarios"><img class="not" id="instagram" src="../imagenes/somos.png" width="100px"></a>
              <p class="p-2 text-center"><em><strong>SOMOS SOLIDARIOS</strong><br>
                                            Eres solidario<br>

                Al comprar en Luxury Store al mismo tiempo estás ayudando a los más necesitados? Un porcentaje (%) de las ganancias es donado a diferentes fundaciones que tenemos apadrinadas.</em></p>
            </div> 
          </div>
        </div>
      </div>

    </div>

  </div>  
    
    <footer class="blockquote-footer" >
        <div class="container-fluid" style="background-color: #1C2833;">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
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
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <br><br>
                      <h4>MI CUENTA</h4>
                      <p><a href="cuenta.php">Contacto</a>&nbsp &nbsp &nbsp <a href="cuenta.php">Historial de pedidos</a><br>
                        <a href="cuenta.php">Mi cuenta</a>&nbsp &nbsp &nbsp<a href="cuenta.php">Ingresar</a><br>
                        <a href="cuenta.php">Políticas de privacidad</a>
                      </p>  
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                      <br><br>
                        <h4>PRINCIPALES CARACTERÍSTICAS</h4>
                        <p>&nbsp&nbsp<a href="index.php#referencia">ATENCIÓN AL CLIENTE</a><br>
                           &nbsp&nbsp<a href="index.php#referencia">PAGO SEGURO</a><br>
                           &nbsp&nbsp<a href="index.php#referencia">AHORRA COMPRANDO</a><br>
                           &nbsp&nbsp<a href="index.php#referencia">SOMOS SOLIDARIOS</a></p>
                    </div>
                  
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
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