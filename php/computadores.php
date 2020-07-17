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

    <div class="container-fluid">
        <div class="row">
        <!-- Acordeón -->
            <div class="d-none d-block col-3 col-sm-3 col-md-3 col-lg-2 px-0">
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Hewlett-Packard
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body"><a href="computadores.php#hp1">ProBook 440 G7</a></div>
                      <div class="card-body"><a href="computadores.php#hp2">ZBook 14u G6</a></div>
                      <div class="card-body"><a href="computadores.php#hp3">ZBook 15V G5</a></div>
                      <div class="card-body"><a href="computadores.php#hp4">15-dh0005la</a></div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Asus
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body"><a href="computadores.php#asus1">M509da-br306t-ryzen5</a></div>
                      <div class="card-body"><a href="computadores.php#asus2">X510QLA</a></div>
                      <div class="card-body"><a href="computadores.php#asus3">M509DA</a></div>
                      <div class="card-body"><a href="computadores.php#asus4">FX505DYLA</a></div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Lenovo
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body"><a href="computadores.php#lev1">Mi S540-14api</a></div>
                      <div class="card-body"><a href="computadores.php#lev2">Mi S145</a></div>
                      <div class="card-body"><a href="computadores.php#lev3">S145-14api</a></div>
                      <div class="card-body"><a href="computadores.php#lev4">Y545</a></div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Celdas de Productos -->

            <div class="col-9 col-sm-9 col-md-9 col-lg-10 px-0">
                <div class="container-fluid" align="center">
                    <h2 class="mt-3" id="HP">HP</h2>
                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/hp1.png" width="100%" id="hp1" title="Portátil HP ProBook 440 G7">
                            <p class="m-0"><strong class="text-center"><a title="Portátil HP ProBook 440 G7" >Portátil HP ProBook 440 G7</a></strong></p><div class="corazon" id="heart17"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>Procesador Intel® Core™ i7-10510U con gráficos Intel® UHD 620 Processor (frecuencia base de 1,8 GHz, hasta 4,9 GHz con tecnología Intel® Turbo Boost, 8 MB de caché L3 y 4 núcleos).<br>
                                <strong>Disco Duro: </strong>Unidad de estado sólido M.2 PCIe® NVMe™ de 512 GB
                                Gráficos Intel® UHD 620.<br>
                                <strong>OS: </strong>Windows 10 Pro 64<br>
                                <strong>Memory: </strong>16 GB de SDRAM DDR4-2400 (1 x 16 GB).<br>
                                <strong>Pantalla: </strong>Pantalla con retroiluminación WLED HD SVA antirreflectante, de 14" en diagonal, 220 nits, 45 % de NTSC (1366 x 768).<br>
                                <strong>Precio: $4.999.000</strong><br></em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/hp2.png" width="110%" id="hp2" title="Portátil HP ZBook 14u G6">
                            <p class="m-0"><strong class="text-center"><a title="Portátil HP ZBook 14u G6" >Portátil HP ZBook 14u G6</a></strong></p><div class="corazon" id="heart18"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>Intel® Core™ i5-8265U con gráficos Intel® UHD 620 Processor (frecuencia base de 1,6 GHz, hasta 3,9 GHz con tecnología Intel® Turbo Boost, 6 MB L3 de caché y 4 núcleos).<br>
                                <strong>Disco Duro: </strong>Unidad de estado sólido M.2 PCIe® NVMe™ de 512 GB AMD Radeon™ Pro WX 3200.<br>
                                <strong>OS: </strong>Windows 10 Pro 64<br>
                                <strong>Memory: </strong>8 GB de SDRAM DDR4-2400 (1 x 8 GB).<br>
                                <strong>Pantalla: </strong>Pantalla con retroiluminación WLED IPS 4K antirreflejo con sensor de luz ambiental de 14" en diagonal, 600 nits, 95 % NTSC (3840 x 2160).<br>
                                <strong>Precio: $6.291.000</strong><br>
                                </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/hp3.png" width="95%" id="hp3" title="Portátil HP ZBook 15V G5">
                            <p class="m-0"><strong class="text-center"><a title="Portátil HP ZBook 15V G5" >Portátil HP ZBook 15V G5</a></strong></p><div class="corazon" id="heart19"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>Intel® Core™ i7-9750H con gráficos Intel® UHD 630 Processor (frecuencia base de 2,6 GHz, hasta 4,5 GHz con tecnología Intel® Turbo Boost, 12 MB de caché y 6 núcleos).<br>
                                <strong>Disco Duro: </strong>SSD PCIe® NVMe™ de 1 TB NVIDIA® Quadro® P600 .<br>
                                <strong>OS: </strong>Windows 10 Pro 64<br>
                                <strong>Memory: </strong>SDRAM DDR4-2666 de 16 GB.<br>
                                <strong>Pantalla: </strong>Pantalla FHD eDP con retroiluminación LED, antirreflejo, de 15,6" en diagonal, 220 cd/m², 67 % de sRGB (1920 x 1080).<br><strong>Precio: $7.477.500</strong><br></em></p>
                                
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/hp4.png" width="100%" id="hp4" title="Laptop OMEN HP - 15-dh0005la">
                            <p class="m-0"><strong class="text-center"><a title="Laptop OMEN HP - 15-dh0005la" >Laptop OMEN HP - 15-dh0005la</a></strong></p><div class="corazon" id="heart20"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>Intel® Core™ i7-9750H Processor (frecuencia base de 2,6 GHz, base de hasta 4,5 GHz con tecnología Intel® Turbo Boost, 12 MB de caché y 6 núcleos).<br>
                                <strong>Disco Duro: </strong>SSD M.2 PCIe® NVMe™ de 512 GB NVIDIA® GeForce® RTX™ 2070 con diseño Max-Q.<br>
                                <strong>OS: </strong>Windows 10 Pro 64<br>
                                <strong>Memory: </strong>16 GB de SDRAM DDR4-2666 .<br>
                                <strong>Pantalla: </strong>Pantalla con retroiluminación WLED FHD IPS antirreflectante con microborde de 15,6" en diagonal y 144 Hz (1920 x 1080).<br><strong>Precio: $7.699.000</strong></em></p>
                        </div>

                    </div>

                    <div class="row mt-5" align="center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="mt-2" id="Huawei">ASUS</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/asus1.png" width="100%" id="asus1" title="Portatil Asus M509da-br306t-ryzen5">
                            <p class="m-0"><strong class="text-center"><a title="Portatil Asus M509da-br306t-ryzen5" >Portatil Asus M509da-br306t-ryzen5</a></strong></p><div class="corazon" id="heart21"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>Ryzen 5 -3500U.<br>
                                <strong>Disco Duro: </strong>1TB HDD.<br>
                                <strong>OS: </strong>Windows 10<br>
                                <strong>Memory: </strong>8 GB.<br>
                                <strong>Pantalla: </strong> 15.6’’ HD.<br>
                                <strong>Precio: $2.399.000</strong></em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/asus2.png" width="110%" id="asus2" title="Portatil Asus X510QLA">
                            <p class="m-0"><strong class="text-center"><a title="Portatil Asus X510QLA" >Portatil Asus X510QLA</a></strong></p><div class="corazon" id="heart22"></div>
                            <p class="text-left m-0"><em>
                                <br><br>
                                <strong>Procesador: </strong>AMD A12-9700P.<br>
                                <strong>Disco Duro: </strong>1TB HDD.<br>
                                <strong>OS: </strong>Windows 10<br>
                                <strong>Memory: </strong>12 GB DDR4.<br>
                                <strong>Pantalla: </strong>15.6 pulgadas "Marcos Reducidos y Antireflejo".<br>
                                <strong>Precio: $2.199.000</strong></em></p>

                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/asus3.png" width="100%" id="asus3" title="Portátil ASUS M509DA">
                            <p class="m-0"><strong class="text-center"><a title="Portátil ASUS M509DA" >Portátil ASUS M509DA</a></strong></p><div class="corazon" id="heart23"></div>
                            <p class="text-left m-0"><em>
                                <br><br>
                                <strong>Procesador: </strong>AMD® Ryzen™ 3 3200U.<br>
                                <strong>Disco Duro: </strong>1TB 5400 rpm SATA HDD.<br>
                                <strong>OS: </strong>Windows 10<br>
                                <strong>Memory: </strong>12 GB SDRAM.<br>
                                <strong>Pantalla: </strong>Antireflejo de 15.6" (16:9) LED-backlit HD (1366x768) 60Hz Anti-Glare Panel with 45% NTSC.<br>
                                <strong>Precio: $2.199.000</strong>
                              </em></p>
                        </div>
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/asus4.png" width="100%" id="asus4" title="Portátil Gamer ASUS FX505DYLA">
                            <p class="m-0"><strong class="text-center"><a title="Portátil Gamer ASUS FX505DYLA" >Portátil Gamer ASUS FX505DYLA</a></strong></p><div class="corazon" id="heart24"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>AMD® Ryzen™ 5 3550H Processor.<br>
                                <strong>Disco Duro: </strong>512GB PCIe® Gen3 SSD.<br>
                                <strong>OS: </strong>Windows 10<br>
                                <strong>Memory: </strong>RAM: 16 DDR4.<br>
                                <strong>Pantalla: </strong>15.6" (16:9) LED-backlit FHD (1920x1080) Anti-Glare IPS-level Panel with 45% NTSC.<br>
                                <strong>Precio: $3.999.000</strong></em></p>
                        </div>

                    <div class="row mt-5" align="center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 class="mt-2" id="Lenovo">LENOVO</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lev1.png" width="100%" id="lev1" title="Portátil Lenovo S540-14api">
                            <p class="m-0"><strong class="text-center"><a title="Portátil Lenovo S540-14api" >Portátil Lenovo S540-14api</a></strong></p><div class="corazon" id="heart25"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>AMD Ryzen 7-3700U 2.3GHz 4C MB.<br>
                                <strong>Disco Duro: </strong>SSD 256GB M.2.<br>
                                <strong>OS: </strong>Windows 10 Home<br>
                                <strong>Memory: </strong>8GB (4GB Onboard + 4GB SODIMM) DDR4 2400 Crece a 12GB Slots x1.<br>
                                <strong>Pantalla: </strong>14.0FHD IPS 250N.<br>
                                <strong>Precio: $3.429.900</strong></em></p>
                        </div>

                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lev2.png" width="100%" id="lev2" title="Portatil Lenovo S145">
                            <p class="m-0"><strong class="text-center"><a title="Portatil Lenovo S145" >Portatil Lenovo S145</a></strong></p><div class="corazon" id="heart26"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>Intel Core i5-1035G4 Processor ( 1,16 GHz 4C MB ).<br>
                                <strong>Disco Duro: </strong>256 GB SSD M,2 2242 MNME TLC.<br>
                                <strong>OS: </strong>Windows 10 Home<br>
                                <strong>Memory: </strong>4GB Soldered DDR4-2666.<br>
                                <strong>Pantalla: </strong>14.0” (35,6mm) HD (1366x768) anti-glare LED Backlight 220 nits.<br>
                                <strong>Precio: $1.759.900</strong></em></p>
                        </div>

                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lev3.png" width="100%" id="lev3" title="Portatil Lenovo S145-14api">
                            <p class="m-0"><strong class="text-center"><a title="Portatil Lenovo S145-14api" >Portatil Lenovo S145-14api</a></strong></p><div class="corazon" id="heart27"></div>
                            <p class="text-left m-0"><em>
                                <br>
                                <strong>Procesador: </strong>RYZEN 3 3200U 2.6G2C MB.<br>
                                <strong>Disco Duro: </strong>DISCO SOLID STATE HARD DRIVE: 512GB M.2 2242 NVME TLC.<br>
                                <strong>OS: </strong>Windows 10<br>
                                <strong>Memory: </strong> 4GB DDR4 2400 MB.<br>
                                <strong>Pantalla: </strong>14.0HD TN AG 220N N.<br>
                                <strong>Precio: $1.775.000</strong></em></p>
                        </div>

                        <div class="col-12 col-sm-6 col col-md-4 col-lg-3 col-xl-3 mt-5">
                            <img src="../imagenes/lev4.png" width="100%" id="lev4" title="Portatil Lenovo Y545">
                            <p class="m-0"><strong class="text-center"><a title="Portatil Lenovo Y545" >Portatil Lenovo Y545</a></strong></p><div class="corazon" id="heart28"></div>
                            <p class="text-left m-0"><em>
                                <br><br><br>
                                <strong>Procesador: </strong> Intel core i7-9750h novena generacion.<br>
                                <strong>Disco Duro: </strong>1 tera + 512gb ssd (solido) + 1tb mecanico.<br>
                                <strong>OS: </strong>Windows 10<br>
                                <strong>Memory: </strong>6g ram super velocidad ddr4.<br>
                                <strong>Pantalla: </strong>15.6 pulgadas,  led full hd (1920 x 1080) ips 144hz.<br>
                                <strong>Precio: $5.849.900</strong></em></p>
                        </div>
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