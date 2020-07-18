window.onload = function() {

    var prod = [];
    var deseosList = [];

    // Lista de deseos

    var elements = document.getElementsByClassName("corazon");
    var k = 0;

    var like = function() {
        var attribute1 = this.style.backgroundPosition = 'right';
        //console.log(elements[0].style.backgroundPositionX);
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].style.backgroundPositionX == 'right') {
                prod[i] = 1;
            } else {
                prod[i] = 0;
            }
        }

        var j = 0;

        for (var i = 0; i < productos.length; i++) {
            if (prod[i] == 1) {
                deseosList[j] = productos[i];
                j++;
            }
        }
        //alert("Se añadió " + deseosList[deseosList.length-1] + " en la lista de deseos");
        //console.log(prod);
        console.log(deseosList);
        //console.log(productos);
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', like, false);
    }

    var dislike = function() {
        var attribute2 = this.style.backgroundPosition = 'left';
    };

    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('dblclick', dislike, false);
    }


    //Buscador Interno

    input_search = document.getElementById("input_search");
    box_search = document.getElementById("box-search");
    console.log(box_search);
    document.getElementById("input_search").addEventListener("keyup", buscadorInterno);

    function buscadorInterno() {
        filter = input_search.value.toUpperCase();
        li = box_search.getElementsByTagName("li");
        console.log("hola")
            //Recorriendo elementos a filtrar
        for (var i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            textValue = a.textContent || a.innerText;

            if (textValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
                box_search.style.display = "block";
                if (input_search.value == "") {
                    box_search.style.display = "none";
                }
            } else {
                li[i].style.display = "none";
            }
        }
    }

    document.getElementById("btn_search").addEventListener("click", show, false);
    document.getElementById("container").addEventListener("click", quit, false);

    function show() {
        input_search.style.display = "block";
        input_search.focus();

    }

    function quit() {
        input_search.style.display = "none";
        box_search.style.display = "none";
        input_search.value = "";

    }

    // Obtener número de página

    var pagina = window.location.pathname
    console.log(pagina);
    /*
    document.getElementById("container").addEventListener("click", cambiar, false);
	
    function cambiar(){
    this.innerHTML = deseosList;
	
    }*/

    var productos = [];
    switch (pagina) {
        case '/Trabajo%20Final/vista/celulares.php':
            productos[0] = "Samsung Galaxy A50";
            productos[1] = "Samsung Galaxy A20";
            productos[2] = "Samsung Galaxy A10e";
            productos[3] = "Samsung Galaxy S20";
            productos[4] = "Samsung Galaxy S10";
            productos[5] = "Huawei P40 PRO";
            productos[6] = "Huawei P30 Lite";
            productos[7] = "Huawei Y9s";
            productos[8] = "Huawei Y7";
            productos[9] = "Xiaomi Mi 10";
            productos[10] = "Xiaomi Mi 9 Lite";
            productos[11] = "Xiaomi Redmi 8";
            productos[12] = "Xiaomi Redmi 7";
            productos[13] = "iPhone 11";
            productos[14] = "iPhone XR";
            productos[15] = "iPhone 8";
            break;
        case '/Trabajo%20Final/vista/computadores.php':
            productos[0] = "Portátil HP ProBook 440 G7";
            productos[1] = "Portátil HP ZBook 14u G6";
            productos[2] = "Portátil HP ZBook 15V G5";
            productos[3] = "Laptop OMEN HP - 15-dh0005la";
            productos[4] = "Portatil Asus M509da-br306t-ryzen5";
            productos[5] = "Portatil Asus X510QLA";
            productos[6] = "Portátil ASUS M509DA";
            productos[7] = "Portátil Gamer ASUS FX505DYLA";
            productos[8] = "Portátil Lenovo S540-14api";
            productos[9] = "Portatil Lenovo S145";
            productos[10] = "Portatil Lenovo S145-14api";
            productos[11] = "Portatil Lenovo Y545";
            break;
        case '/Trabajo%20Final/vista/consolas.php':
            productos[0] = "Playstation 3 Super Slim";
            productos[1] = "Consola PlayStation 4";
            productos[2] = "La Playstation 5";
            productos[3] = "Xbox 360 Ultra Slim E 5.0";
            productos[4] = "Consola X-Box One";
            break;
        case '/Trabajo%20Final/vista/televisores.php':
            productos[0] = "Televisor OLED UHD OLED65CXPDA";
            productos[1] = "Televisor OLED UHD OLED65GXPDA";
            productos[2] = "Televisor OLED UHD OLED65BXPDA";
            productos[3] = "Televisor OLED HDR OLED55C8PDA";
            productos[4] = "Televisor Samsung 65 pulgadas LED 4K Ultra HD Smart TV";
            productos[5] = "Televisor Samsung 43 pulgadas LED 4K Ultra HD Smart TV";
            productos[6] = "Televisor exclusiv 55 pulgadas 4k ultra hd smart tv";
            productos[7] = "Televisor LED Samsung 50 Pulgadas UHD 4K Smart TV Serie7";
            break;
        case '/Trabajo%20Final/vista/cosmetiqueras.php':
            productos[0] = "Cosmetiquera Moda Peluche";
            productos[1] = "Neceser x 3 Rectangular";
            productos[2] = "Neceser x 3 Redondo";
            productos[3] = "Mini Canasta Oro Rosa";
            break;
        case '/Trabajo%20Final/vista/cosmetiqueras.php':
            productos[0] = "Cosmetiquera Moda Peluche";
            productos[1] = "Neceser x 3 Rectangular";
            productos[2] = "Neceser x 3 Redondo";
            productos[3] = "Mini Canasta Oro Rosa";
            break;
        case '/Trabajo%20Final/vista/c.php':
            productos[0] = "Cosmetiquera Moda Peluche";
            productos[1] = "Neceser x 3 Rectangular";
            productos[2] = "Neceser x 3 Redondo";
            productos[3] = "Mini Canasta Oro Rosa";
            break;
    }

}