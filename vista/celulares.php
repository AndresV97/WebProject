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
                          Samsung
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body"><a href="celulares.php#A50">Galaxy A50</a></div>
                      <div class="card-body"><a href="celulares.php#A20">Galaxy A20</a></div>
                      <div class="card-body"><a href="celulares.php#A10e">Galaxy A10e</a></div>
                      <div class="card-body"><a href="celulares.php#S20">Galaxy S20</a></div>
                      <div class="card-body"><a href="celulares.php#S10">Galaxy S10</a></div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Huawei
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body"><a href="celulares.php#P40">Huawei P40 Pro</a></div>
                      <div class="card-body"><a href="celulares.php#P30">Huawei P30 Lite</a></div>
                      <div class="card-body"><a href="celulares.php#Y9s">Huawei Y9s</a></div>
                      <div class="card-body"><a href="celulares.php#Y7">Huawei Y7</a></div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Xiaomi
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body"><a href="celulares.php#Mi10">Mi 10</a></div>
                      <div class="card-body"><a href="celulares.php#Mi9L">Mi 9 Lite</a></div>
                      <div class="card-body"><a href="celulares.php#Redmi8">Redmi 8</a></div>
                      <div class="card-body"><a href="celulares.php#Redmi7">Redmi 7</a></div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          iPhone
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body"><a href="celulares.php#iphone11">iPhone 11</a></div>
                      <div class="card-body"><a href="celulares.php#iphonexr">iPhone Xr</a></div>
                      <div class="card-body"><a href="celulares.php#iphone8">iPhone 8</a></div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Celdas de Productos -->

            <div class="col-9 col-sm-9 col-md-9 col-lg-10 px-0">
                <div class="container-fluid" align="center">
                    <h2 class="mt-3" id="Samsung">Samsung</h2>
                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/A50.png" width="60%" id="A50" title="Samsung Galaxy A50">
                            <p class="m-0"><strong class="text-center"><a title="Samsung Galaxy A50" href="#">Samsung Galaxy A50</a></strong></p><div class="corazon" id="heart1"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong>Released 2019, March.<br>
                                <strong>Body: </strong>166g, 7.7mm thickness.<br>
                                <strong>OS: </strong>Android 9.0, up to Android 10.0; One UI 2.0<br>
                                <strong>Memory: </strong>64GB/128GB storage, microSDXC.<br>
                                <strong>Display Size: </strong>6.4" 1080x2340 pixels.<br>
                                <strong>Camera: </strong>25MP 1080p.<br>
                                <strong>Battery: </strong>4000mAh Li-Po.</em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                             <img src="../imagenes/A20.png" width="61%" id="A20" title="Samsung Galaxy A20">
                             <p class="m-0"><strong class="text-center"><a title="Samsung Galaxy A20" href="#" >Samsung Galaxy A20</a></strong></p><div class="corazon" id="heart2"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong> Released 2019, April.<br>
                                <strong>Body: </strong>169g, 7.8mm thickness<br>
                                <strong>OS: </strong>Android 9.0; One UI<br>
                                <strong>Memory: </strong>32GB storage, microSDXC.<br>
                                <strong>Display Size: </strong>6.4" 720x1560 pixels.<br>
                                <strong>Camera: </strong>13MP 1080p.<br>
                                <strong>Battery: </strong>4000mAh Li-Po.</em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                             <img src="../imagenes/A10e.png" width="60%" id="A10e" title="Samsung Galaxy A10e">
                             <p class="m-0"><strong class="text-center"><a title="Samsung Galaxy A10e" href="#" >Samsung Galaxy A10e</a></strong></p><div class="corazon" id="heart3"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong>Released 2019, August.<br>
                                <strong>Body: </strong>141g, 8.4mm thickness.<br>
                                <strong>OS: </strong>Android 9.0<br>
                                <strong>Memory: </strong>32GB storage, microSDXC.<br>
                                <strong>Display Size: </strong>5.83" 720x1560 pixels.<br>
                                <strong>Camera: </strong>8MP 1080p.<br>
                                <strong>Battery: </strong>3000mAh Li-Ion.</em></p>
                        </div>
                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                             <img src="../imagenes/S20.png" width="102%" id="S20" title="Samsung Galaxy S20">
                             <p class="m-0"><strong class="text-center"><a title="Samsung Galaxy S20" href="#" >Samsung Galaxy S20</a></strong></p><div class="corazon" id="heart4"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong>Released 2020, March 6.<br>
                                <strong>Body: </strong>163g, 7.9mm thickness.<br>
                                <strong>OS: </strong>Android 10.0; One UI 2<br>
                                <strong>Memory: </strong>128GB storage, microSDXC.<br>
                                <strong>Display Size: </strong>6.2" 1440x3200 pixels.<br>
                                <strong>Camera: </strong>64MP 4320p.<br>
                                <strong>Battery: </strong>4000mAh Li-Po.</em></p>
                        </div>

                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/S10.png" width="102%" id="S10" title="Samsung Galaxy S10">
                            <p class="m-0"><strong class="text-center"><a title="Samsung Galaxy S10" href="#" >Samsung Galaxy S10</a></strong></p><div class="corazon" id="heart5"></div>
                            <p class="text-left m-0"><em><br> 
                            <strong>Launch: </strong>Released 2019, March.<br>
                            <strong>Body: </strong>166g, 7.7mm thickness.<br>
                            <strong>OS: </strong>Android 9.0, up to Android 10.0; One UI 2.0<br>
                            <strong>Memory: </strong>64GB/128GB storage, microSDXC.<br>
                            <strong>Display Size: </strong>6.4" 1080x2340 pixels.<br>
                            <strong>Camera: </strong>25MP 1080p.<br>
                            <strong>Battery: </strong>4000mAh Li-Po.</em></p>
                        </div>



                    </div>

                    <div class="row mt-5" align="center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="mt-2" id="Huawei">Huawei</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/P40.jpg" width="90%" id="P40" title="Huawei P40 PRO">
                            <p class="m-0"><strong class="text-center"><a title="Huawei P40 PRO" href="#">Huawei P40 Pro</a></strong></p><div class="corazon" id="heart6"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong>Exp. release 2020, April 7.<br>
                                <strong>Body: </strong>209g, 9mm thickness.<br>
                                <strong>OS: </strong>Android 10.0; EMUI 10.1<br>
                                <strong>Memory: </strong>128GB/256GB/512GB storage, NM.<br>
                                <strong>Display Size: </strong>6.58" 1200x2640 pixels.<br>
                                <strong>Camera: </strong>50MP 2160p.<br>
                                <strong>Battery: </strong>4200mAh Li-Po.</em></p>
                        </div>
                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/P30.jpg" width="90%" id="P30" title="Huawei P30 Lite">
                            <p class="m-0"><strong class="text-center"><a title="Huawei P30 Lite" href="#" >Huawei P30 Lite</a></strong></p><div class="corazon" id="heart7"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong>Released 2019, April.<br>
                                <strong>Body: </strong>159g, 7.4mm thickness.<br>
                                <strong>OS: </strong>Android 9.0, up to Android 10.0; EMUI 10.0<br>
                                <strong>Memory: </strong>128GB storage, microSDXC.<br>
                                <strong>Display Size: </strong>6.15" 1080x2312 pixels.<br>
                                <strong>Camera: </strong>48MP 1080p.<br>
                                <strong>Battery: </strong>3340mAh Li-Po.</em></p>
                        </div>
                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/Y9s.jpg" width="90%" id="Y9s" title="Huawei Y9s">
                            <p class="m-0"><strong class="text-center"><a title="Huawei Y9s" href="#" >Huawei Y9s</a></strong></p><div class="corazon" id="heart8"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong>Released 2019, December.<br>
                                <strong>Body: </strong>206g, 8.8mm thickness.<br>
                                <strong>OS: </strong>Android 9.0; EMUI 9.1<br>
                                <strong>Memory: </strong>128GB storage, microSDXC.<br>
                                <strong>Display Size: </strong>6.59" 1080x2340 pixels.<br>
                                <strong>Camera: </strong>48MP 1080p.<br>
                                <strong>Battery: </strong>4000mAh Li-Po.</em></p>
                        </div>
                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/Y7.jpg" width="90%" id="Y7" title="Huawei Y7">
                            <p class="m-0"><strong class="text-center"><a title="Huawei Y7" href="#" >Huawei Y7</a></strong></p><div class="corazon" id="heart9"></div>
                            <p class="text-left m-0"><em>
                                <br> 
                                <strong>Launch: </strong>Released 2019, March.<br>
                                <strong>Body: </strong>168g, 8.1mm thickness.<br>
                                <strong>OS: </strong>Android 8.1; EMUI 8.2<br>
                                <strong>Memory: </strong>32GB storage, microSDXC.<br>
                                <strong>Display Size: </strong>6.26" 720x1520 pixels.<br>
                                <strong>Camera: </strong>13MP 1080p.<br>
                                <strong>Battery: </strong>4000mAh Li-Ion.</em></p>
                        </div>
                    </div>

                    <div class="row mt-5" align="center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="mt-2" id="Xiaomi">Xiaomi</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/Mi10.jpg" width="90%" id="Mi10" title="Xiaomi Mi 10">
                            <p class="m-0"><strong class="text-center"><a title="Xiaomi Mi 10" href="#" >Xiaomi Mi 10</a></strong></p><div class="corazon" id="heart10"></div>
                            <p class="text-left m-0"><em>
                            <br> 
                            <strong>Launch: </strong>Released 2020, February 14.<br>
                            <strong>Body: </strong>208g, 9mm thickness.<br>
                            <strong>OS: </strong>Android 10.0; MIUI 11<br>
                            <strong>Memory: </strong>128GB/256GB storage, no card slot.<br>
                            <strong>Display Size: </strong>6.67" 1080x2340 pixels.<br>
                            <strong>Camera: </strong>108MP 4320p.<br>
                            <strong>Battery: </strong>4780mAh Li-Po.</em></p>
                        </div>

                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/Mi9L.jpg" width="90%" id="Mi9L" title="Xiaomi Mi 9 Lite">
                            <p class="m-0"><strong class="text-center"><a title="Xiaomi Mi 9 Lite" href="#" ">Xiaomi Mi 9 Lite</a></strong></p><div class="corazon" id="heart11"></div>
                            <p class="text-left m-0"><em>
                            <br> 
                            <strong>Launch: </strong>Released 2019, September.<br>
                            <strong>Body: </strong>179g, 8.7mm thickness.<br>
                            <strong>OS: </strong>Android 9.0, up to Android 10.0; MIUI 11<br>
                            <strong>Memory: </strong>64GB/128GB storage, microSDXC.<br>
                            <strong>Display Size: </strong>6.39" 1080x2340 pixels.<br>
                            <strong>Camera: </strong>48MP 2160p.<br>
                            <strong>Battery: </strong>4030mAh Li-Po.</em></p>
                        </div>

                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/Redmi8.jpg" width="90%" id="Redmi8" title="Xiaomi Redmi 8">
                            <p class="m-0"><strong class="text-center"><a title="Xiaomi Redmi 8" href="#" >Xiaomi Redmi 8</a></strong></p><div class="corazon" id="heart12"></div>
                            <p class="text-left m-0"><em>
                            <br> 
                            <strong>Launch: </strong>Released 2019, October.<br>
                            <strong>Body: </strong>188g, 9.4mm thickness.<br>
                            <strong>OS: </strong>Android 9.0; MIUI 11<br>
                            <strong>Memory: </strong>32GB/64GB storage, microSDXC.<br>
                            <strong>Display Size: </strong>6.22" 720x1520 pixels.<br>
                            <strong>Camera: </strong>12MP 1080p.<br>
                            <strong>Battery: </strong>5000mAh Li-Po.</em></p>
                        </div>

                        <div class="col-10 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/Redmi7.jpg" width="90%" id="Redmi7" title="Xiaomi Redmi 7">
                            <p class="m-0"><strong class="text-center"><a title="Xiaomi Redmi 7" href="#" >Xiaomi Redmi 7</a></strong></p><div class="corazon" id="heart13"></div>
                            <p class="text-left m-0"><em>
                            <br> 
                            <strong>Launch: </strong>Released 2019, March.<br>
                            <strong>Body: </strong>180g, 8.5mm thickness.<br>
                            <strong>OS: </strong>Android 9.0 Pie, up to Android 10.0; MIUI 11<brReleased 2019, March>
                            <strong>Memory: </strong>16GB/32GB/64GB storage, microSDXC.<br>
                            <strong>Display Size: </strong>6.26" 720x1520 pixels.<br>
                            <strong>Camera: </strong>12MP 1080p.<br>
                            <strong>Battery: </strong>4000mAh Li-Po.</em></p>
                        </div>
                    </div>

                    <div class="row mt-5" align="center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="mt-2" id="Apple">Apple</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-6 col-lg-4 col-xl-4 mt-5">
                            <img src="../imagenes/iphone11.jpg" width="65%" id="iphone11" title="iPhone 11">
                            <p class="m-0"><strong class="text-center"><a title="iPhone 11" href="#" >iPhone 11</a></strong></p><div class="corazon" id="heart14"></div>
                            <p class="text-left m-0"><em>
                            <br> 
                            <strong>Launch: </strong>Released 2019, September.<br>
                            <strong>Body: </strong>194g, 8.3mm thickness.<br>
                            <strong>OS: </strong>iOS 13, up to iOS 13.4<br>
                            <strong>Memory: </strong>64GB/128GB/256GB storage, no card slot.<br>
                            <strong>Display Size: </strong>6.1" 828x1792 pixels.<br>
                            <strong>Camera: </strong>12MP 2160p.<br>
                            <strong>Battery: </strong>3110mAh Li-Ion</em></p>
                        </div>

                        <div class="col-12 col-sm-6 col col-md-6 col-lg-4 col-xl-4 mt-5">
                            <img src="../imagenes/iphonexr.jpg" width="65%" id="iphonexr" title="iPhone XR">
                            <p class="m-0"><strong class="text-center"><a title="iPhone XR" href="#" >iPhone XR</a></strong></p><div class="corazon" id="heart15"></div>
                            <p class="text-left m-0"><em>
                            <br> 
                            <strong>Launch: </strong>Released 2018, October.<br>
                            <strong>Body: </strong>194g, 8.3mm thickness.<br>
                            <strong>OS: </strong>iOS 12, up to iOS 13.4<br>
                            <strong>Memory: </strong>64GB/128GB/256GB storage, no card slot.<br>
                            <strong>Display Size: </strong>6.1" 828x1792 pixels.<br>
                            <strong>Camera: </strong>12MP 2160p.<br>
                            <strong>Battery: </strong>2942mAh Li-Ion.</em></p>
                        </div>

                        <div class="col-12 col-sm-6 col col-md-6 col-lg-4 col-xl-4 mt-5">
                            <img src="../imagenes/iphone8.jpg" width="65%" id="iphone8" title="iPhone 8">
                            <p class="m-0"><strong class="text-center"><a title="iPhone 8" href="#" >iPhone 8</a></strong></p><div class="corazon" id="heart16"></div>
                            <p class="text-left m-0"><em>
                            <br> 
                            <strong>Launch: </strong>Released 2017, September.<br>
                            <strong>Body: </strong>148g, 7.3mm thickness.<br>
                            <strong>OS: </strong>iOS 11, up to iOS 13.4<br>
                            <strong>Memory: </strong>64GB/256GB storage, no card slot.<br>
                            <strong>Display Size: </strong>4.7" 750x1334 pixels.<br>
                            <strong>Camera: </strong>12MP 2160p.<br>
                            <strong>Battery: </strong>1821mAh Li-Ion.</em></p>
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