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
<!-- Contenedor Imagenes Accesorios -->
    <div class="container-fluid" id="productos">
      <!-- Primera parte Accesorios -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g1.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart120"></div>
              <p class="card-text"><b>$105.000</b></p>
              <p class="card-text">Montura negro en acabado mate y lentes de espejo azules/ entes triacetato con tecnología Anti­Scratch con protección UV400/ Lentes categoría 3/ Modelo Unisex.</p>
              <a target="_blank" href="https://www.hawkerscolombia.co/products/gafas-sol-carbon-black-sky-one" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g2.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart121"></div>
              <p class="card-text"><b>$149.900</b></p>
              <p class="card-text">Procesador Nordic NRF51822/ Batería de polímero de litio 350mAh/ Con cámara y reproductor de música remoto/ Resistencia al agua IP68, 1.5 metros de profundidad. </p>
              <a target="_blank" href="https://www.falabella.com.co/falabella-co/product/4977033/Smartband-F13-GPS-Waterproof/4977033" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g3.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart122"></div>
              <p class="card-text"><b>$119.900</b></p>
              <p class="card-text">Diseño casual a un tono de textura micro punto, paneles finamente cosidos, detalle referente a la marca, perforaciones que aumentan el flujo del aire y finas costuras reforzadas.</p>
              <a target="_blank" href="https://www.dafiti.com.co/Gorra-Negro-Tommy-Hilfiger-1160425.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g4.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart123"></div>
              <p class="card-text"><b>$105.000</b></p>
              <p class="card-text">Lentes de TR18 con el sello de Eastman🇺🇸, uno de los líderes mundiales en tecnología de copoliéster. Respetuoso con el medio ambiente.Incluye: funda en microfibra y caja.</p>
              <a target="_blank" href="https://www.hawkerscolombia.co/products/gafas-sol-crystal-red-blue-gradient-one-ls" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
      <!-- Segunda Parte accesorios -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g5.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart124"></div>
              <p class="card-text"><b>$119.900</b></p>
              <p class="card-text">Increible reloj de supervivencia para hombre/ Correa en material de alta calidad y nudo militar/ Vidrio mineral/ Cronometraje Analógico/ Resistente al agua.</p>
              <a target="_blank" href="https://www.linio.com.co/c/relojes-hombre/relojes-deportivos-hombre?adjust_t=1zira0_f1h7ws&adjust_google_network=g&adjust_google_placement=&adjust_campaign=col-semun-sdsa&adjust_adgroup=29193690042&gclid=CjwKCAjw88v3BRBFEiwApwLevSm5R1ubCnKqzlMfy47DXIb9LalqBKK8hgSLqwHTN8mlQ6X0xipapRoCr9sQAvD_BwE" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g6.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart125"></div>
              <p class="card-text"><b>$71.900</b></p>
              <p class="card-text">Diseño casual a un tono de textura micro punto, detalle tejido en la parte frontal referente a la marca, finas costuras visibles y terminaciones reforzadas.  </p>
              <a target="_blank" href="https://www.dafiti.com.co/Morral--Gris-Negro-Royal-County-of-Berkshire-Polo-Club-1157284.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g7.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart126"></div>
              <p class="card-text"><b>$125.0007</b></p>
              <p class="card-text">Montura en policarbonato de alta calidad en la parte superior y con la parte inferior en acero inoxidable que rodea los lentes/Lentes categoría 3.</p>
              <a target="_blank" href="https://www.hawkerscolombia.co/products/diamond-black-sky-classic" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/g8.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart127"></div>
              <p class="card-text"><b>$558.900</b></p>
              <p class="card-text">Material del cristal: Flame Fusion/ Material de la banda: Acero inoxidable/ Material de la caja: Acero inoxidable/ Tipo de movimiento: Quartz.</p>
              <a target="_blank" href="https://www.dafiti.com.co/Reloj-Invicta-Plateado-Modelo-66AH-Para-Hombre-Coleccion-Specialty-792794.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Contenedor Imagenes accesorios -->

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