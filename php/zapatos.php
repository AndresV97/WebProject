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
              <button class="btn btn-outline-primary my-2 my-sm-0 ml-4 mr-2" id="cuenta" type="submit" ><a href="cuenta.php">Mi Cuenta</a></button>
            </form>
          </div>
        </nav>
        <script type="text/javascript" src="../javascript/javascript.js"></script>
        
    </header>

  <div class="contenedor" id="container">

 <!-- Contenedor Imagenes Zapatos -->
    <div class="container-fluid" id="productos">
      <!-- Primera parte Zapatos -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z1.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart112"></div>
              <p class="card-text"><b>$426.646</b></p>
              <p class="card-text">Las zapatillas Air Jordan 1 Mid están inspiradas en el primer AJ1. Vemos lo lejos que ha llegado la marca Jordan desde 1985.</p>
              <a target="_blank" href="https://www.nike.com/t/air-jordan-1-mid-shoe-1zMCFJ/554724-066" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z2.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart113"></div>
              <p class="card-text"><b>$179.990</b></p>
              <p class="card-text">Estos tenis adidas livianos combinan una silueta inspirada en el running con detalles urbanas para crear un look versátil.</p>
              <a target="_blank" href="https://www.adidas.co/tenis-lite-racer-2.0/EG3278.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z3.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart114"></div>
              <p class="card-text"><b>$259.697</b></p>
              <p class="card-text">Desde las zapatillas de calentamiento de basket de los 60 hasta la leyenda del hip hop de los 90, los grandes lo han usado.</p>
              <a target="_blank" href="https://es-us.puma.com/es/us/pd/suede-classic%2B-sneakers/352634.html?dwvar_352634_color=03" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z4.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart115"></div>
              <p class="card-text"><b>$389.900</b></p>
              <p class="card-text">El minimalismo gana en estilo. Con su diseño completamente negro, estos Zig Kinetica tienen un look furtivo y bajo perfil.</p>
              <a target="_blank" href="https://www.nike.com/t/sportswear-mens-full-zip-hoodie-H1M424/CJ4277-515" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
      <!-- Segunda Parte zapatos -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z5.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart116"></div>
              <p class="card-text"><b>$556.495</b></p>
              <p class="card-text">Trae el pasado al futuro con las Nike Air Max 2090. Inspirado en el icónico Air Max 90, este presenta una amortiguación Nike Air.</p>
              <a target="_blank" href="https://www.nike.com/t/air-max-2090-womens-shoe-nk9ZbX/CK2612-101" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z6.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart117"></div>
              <p class="card-text"><b>$229.990</b></p>
              <p class="card-text">Acumula kilómetros con estos tenis de running livianos, que te ofrecen una excelente comodidad y amortiguación mientras corres.</p>
              <a target="_blank" href="https://www.adidas.co/tenis-runfalcon/F36219.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z7.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart118"></div>
              <p class="card-text"><b>$408.096</b></p>
              <p class="card-text">Agregue un poco de glamour a su rotacion. Con detalles amplificados en la parte superior, mezclas de materiales más fuertes.</p>
              <a target="_blank" href="https://es-us.puma.com/es/us/pd/rs-x%C2%B3-glitz-womens-sneakers/372647.html?dwvar_372647_color=02" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/z8.PNG" alt="Card image cap" height="220" width="300">
            <div class="card-body"><div class="corazon" id="heart119"></div>
              <p class="card-text"><b>$159.900</b></p>
              <p class="card-text">Disfruta cada kilómetro con estos tenis de running para mujer. La capellada de malla transpirable ayuda a mantener tus pies frescos.</p>
              <a target="_blank" href="https://www.reebok.co/reebok-energylux-2.0/EH2664.html" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
    <!-- Contenedor Imagenes zapatos -->
    
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