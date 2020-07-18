<?php 
  session_start();
	if(!isset($_SESSION['auth']) || $_SESSION['auth'] == false){
    header("Location: ../vista/jeans.php");
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
              <div class="btn btn-outline-primary my-2 my-sm-0 ml-4 mr-2"><a class="btnP" href="../php/perfil.php"><?php echo "  Hola ". $_SESSION['USUARIO']?></a></div>
              <button class="btn btn-outline-danger my-2 my-sm-0 ml-4 mr-2" id="cuenta" type="submit" ><a class="btnP" href="salir.php">Salir</a></button>
            </form>
          </div>
        </nav>
<?php 
    }
?>
        <script type="text/javascript" src="../javascript/javascript.js"></script>
        
    </header>

  <div class="contenedor" id="container">

<!-- Contenedor Imagenes Jeans -->
    <div class="container-fluid" id="productos">
      <!-- Primera parte Jeans -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j1.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart96"></div>
              <p class="card-text"><b>$169.900</b></p>
              <p class="card-text">Jean para hombre tennis, jeans skinny plano cintura con pretina. color: azul. hecho en material 98% algodon 2% elastano.</p>
              <a target="_blank" href="https://www.tennis.com.co/jeans-azul-jea-ski-0000929/p" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j2.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart97"></div>
              <p class="card-text"><b>$129.500</b></p>
              <p class="card-text">Jean para hombre en tono medio con desgaste, bigotes, arrugas 3D y garra de Polo club en cuero. Con un lavado moderno </p>
              <a target="_blank" href="https://poloclub.com.co/collections/jeans/products/jean-azul-indigo-medio-2" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j3.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart98"></div>
              <p class="card-text"><b>$109.900</b></p>
              <p class="card-text">Jean para mujer tiro medio plano cintura con pretina. color: azul. hecho en material 63% algodon 2% elastano 23% poliester</p>
              <a target="_blank" href="https://www.tennis.com.co/jeans-azul-jea-ptm-0000967/p" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j4.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart99"></div>
              <p class="card-text"><b>$69.900</b></p>
              <p class="card-text">Pantalón con 5 bolsillos, tejido elástico, tiro bajo y pierna ajustada. Cremallera oculta y botón metálico.</p>
              <a target="_blank" href="https://www.bershka.com/co/mujer/rebajas/jeans/jeans-skinny-low-waist-c1010194036p102224750.html?colorId=461" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
      <!-- Segunda Parte Jeans -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j5.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart100"></div>
              <p class="card-text"><b>$125.000</b></p>
              <p class="card-text">Jean para hombre azul índigo oscuro. Detalles de lavado y desgastes sutiles. Diseño Regular. 98% Algodón - 2% Elastomero.</p>
              <a target="_blank" href="https://poloclub.com.co/collections/jeans/products/jean-azul-para-hombre-clasico-con-desgastes" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j6.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart101"></div>
              <p class="card-text"><b>$125.000</b></p>
              <p class="card-text">Jean para hombre azul oscuro. Detalles de lavado sutiles y desgastes . Diseño Regular. 98% Algodón - 2% Elastomero</p>
              <a target="_blank" href="https://poloclub.com.co/collections/camisas-para-hombre/products/camisa-manga-corta-estampada-blanca" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j7.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart102"></div>
              <p class="card-text"><b>$149.900</b></p>
              <p class="card-text">Jean para mujer tennis, jeans super slim plano cintura con pretina. color: azul. La modelo es talla 8 y mide 1,77</p>
              <a target="_blank" href="https://www.tennis.com.co/jean-azul-jea-sup-0000917/p" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/j8.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart103"></div>
              <p class="card-text"><b>$99.900</b></p>
              <p class="card-text">Pantalón tejano Kick Flare con cinco bolsillos y bajo desflecado. Corte ancho y cierre mediante botón y cremallera oculta.</p>
              <a target="_blank" href="https://www.bershka.com/co/mujer/rebajas/jeans/jeans-kick-flare-con-bajo-desflecado-c1010194036p102352594.html?colorId=428" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Contenedor Imagenes Jeans -->

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