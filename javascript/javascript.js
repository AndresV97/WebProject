//Verificar contreseñas
window.onload = function() {

var yes = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

    var elements = document.getElementsByClassName("corazon");

    var like = function() {
        var attribute1 = this.style.backgroundPosition = 'right';
        console.log(elements[0].style.backgroundPositionX);
        for (var i = 0; i < elements.length; i++) {
        	if (elements[i].style.backgroundPositionX == 'right') {
        		yes[i] = 1;
        	} else {
        		yes[i] = 0;
        	}
        }
        console.log(yes);
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



}