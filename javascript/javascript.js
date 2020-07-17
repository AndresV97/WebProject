//Verificar contreseñas
window.onload = function() {

var productos = [];

// Lista de deseos

    var elements = document.getElementsByClassName("corazon");

    var like = function() {
        var attribute1 = this.style.backgroundPosition = 'right';
        //console.log(elements[0].style.backgroundPositionX);
        for (var i = 0; i < elements.length; i++) {
        	if (elements[i].style.backgroundPositionX == 'right') {
        		productos[i] = 1;
        	} else {
        		productos[i] = 0;
        	}
        }
        console.log(productos);
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

	function buscadorInterno(){
		filter = input_search.value.toUpperCase();
		li = box_search.getElementsByTagName("li");
		console.log("hola")
		//Recorriendo elementos a filtrar
		for (var i = 0; i < li.length; i++) {
			a = li[i].getElementsByTagName("a")[0];
			textValue = a.textContent || a.innerText;

			if(textValue.toUpperCase().indexOf(filter) > -1){
				li[i].style.display = "";
				box_search.style.display = "block";
				if (input_search.value == "") {
					box_search.style.display = "none";
				}
			}else{
				li[i].style.display = "none";
			}
		}
	}

	document.getElementById("btn_search").addEventListener("click", show, false);
	document.getElementById("container").addEventListener("click", quit, false);

	function show(){
		input_search.style.display = "block";
		input_search.focus();
	}

	function quit(){
		input_search.style.display = "none";
		box_search.style.display = "none";
		input_search.value = "";
	}

// Obtener número de página

	var pagina = window.location.pathname
	console.log(pagina);

	switch (pagina){
		case '/Trabajo%20Final/php/celulares.php':
			var num = 2;
			console.log(num);
			break;
	}
}
