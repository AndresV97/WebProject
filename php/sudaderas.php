<?php 
  session_start();
	if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
    header("Location: ../vista/sudaderas.php");
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
    <?php 

if(isset($_GET['log'])&& $_GET['log']==false){
?>
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
        <button class="btn btn-outline-primary my-2 my-sm-0 ml-4 mr-2" id="cuenta" type="submit" ><a href="cuenta.php">Mi Cuenta</a></button>
      </form>
    </div>
  </nav>
<?php 
  }else{
?>
      <nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
        <a href="index.php"><img class="not" src="../imagenes/logo_luxury.jpg" width="80px" style="border-radius: 150px"></a> 
          <a class="navbar-brand py-0 ml-3 mr-5" href="index.php">LUXURY STORE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
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
              <?php echo $_SESSION['USUARIO']?>
              <button class="btn btn-outline-warning my-2 my-sm-0 ml-4 mr-2" id="cuenta" type="submit" ><a href="salir.php">Salir</a></button>
            </form>
          </div>
        </nav>
<?php 
    }
?>
        <script type="text/javascript" src="../javascript/javascript.js"></script>
        
    </header>

  <div class="contenedor" id="container">

<!-- Contenedor Imagenes sudaderas -->
    <div class="container-fluid" id="productos">
      <!-- Primera parte sudaderas -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s1.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart104"></div>
              <p class="card-text"><b>$279.567</b></p>
              <p class="card-text">Ponte el nuevo elemento básico favorito de tu armario con los pantalones NikeLab. Están confeccionados con un tejido de vellón denso.</p>
              <a target="_blank" href="https://www.nike.com/t/nikelab-mens-pants-j6StDV/CD6394-010" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s2.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart105"></div>
              <p class="card-text"><b>$339.990</b></p>
              <p class="card-text">Sudadera Team Sports. Este/a modelo mide 186 cm y lleva una talla M. Su pecho mide 98 cm y su cintura, 80 cm. Tallas disponibles XS, S, M, L, XL. </p>
              <a target="_blank" href="https://www.adidas.co/sudadera-deportiva-team-sports/DV2446.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s3.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart106"></div>
              <p class="card-text"><b>$223.654</b></p>
              <p class="card-text">Con un estilo renovado de PUMA Archives, volvimos a lanzar la T7 para actualizar el diseño clásico para las colecciones urbanas modernas.</p>
              <a target="_blank" href="https://es-us.puma.com/es/us/pd/iconic-t7-mens-track-pants/597643.html?dwvar_597643_color=11" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s4.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart107"></div>
              <p class="card-text"><b>$199.900</b></p>
              <p class="card-text">SUDADERA MEET YOU THERE. Este/a modelo mide 188 cm y lleva una talla M. Su pecho mide 97 cm y su cintura, 81 cm. Tallas disponibles XS, S, M, L, XL.</p>
              <a target="_blank" href="https://www.reebok.co/sudadera-meet-you-there/FP8607.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
      <!-- Segunda Parte sudaderas -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s5.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart108"></div>
              <p class="card-text"><b>$223.654</b></p>
              <p class="card-text">Los pantalones de felpa francesa Nike Sportswear se ven y se sienten como un viejo favorito con su apariencia de color lavado y vibraciones vintage desgastadas.</p>
              <a target="_blank" href="https://www.nike.com/t/sportswear-womens-french-terry-pants-vbqgzB/CJ4115-287" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s6.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart109"></div>
              <p class="card-text"><b>$349.990</b></p>
              <p class="card-text">GLOW PINK / BLACK / GLOW PINK.Este/a modelo mide 178 cm y lleva una talla S. Su pecho mide 84 cm y su cintura, 62 cm. Tallas disponibles XS, S.</p>
              <a target="_blank" href="https://www.adidas.co/conjunto-de-buzo-con-capucha-y-licras/FI6706.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s7.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart110"></div>
              <p class="card-text"><b>$279.567</b></p>
              <p class="card-text">1990, conozca 2020. Tailored for Sport se basa en nuestra colección PUMA Archive de Otoño / Invierno 1990, que fue diseñada para unir deporte y moda.</p>
              <a target="_blank" href="https://es-us.puma.com/es/us/pd/tailored-for-sport-og-womens-retro-pants/598554.html?dwvar_598554_color=02" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/s8.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart111"></div>
              <p class="card-text"><b>$242.292</b></p>
              <p class="card-text">Con elementos de diseño tomados del pasado y una apariencia que va directamente al futuro, estos pantalones de chándal Evide son una elegante mezcla de nuestro archivo clásico.</p>
              <a target="_blank" href="https://es-us.puma.com/es/us/pd/evide-womens-track-pants/596699.html?dwvar_596699_color=32" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Contenedor Imagenes sudaderas -->

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