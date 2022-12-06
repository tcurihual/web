var audioblue = document.getElementById("audioblue");/* se crea una variable, y se le asigna el valor de el id audioblue, en este caso un audio*/
const botonblue = document.getElementById("playblue");/* se crea una constante, y se le asigna el valor de el id playblue, en este caso un boton*/
var count = false; /*variable utilizada como boleano */
botonblue.addEventListener("click", reproducirblue);//la constante anteriormente creada se le asigna el evento de click, cuando esto pase se ejecuta reproducirblue//

function reproducirblue() { //se crea la funcion, si count es falso, pasa a positivo y se comienza a reproducir el sonido, a su vez se cambia el icono de play por pause //
    if(count == false){
        count = true;
        audioblue.play();
        botonblue.innerHTML = "Pause &#9208;";
    }else{ //sino count queda falso, por ende el audio se para, y cambia el icono
        count = false;
        audioblue.pause();
        botonblue.innerHTML = "Play &#9658;";
    } 
}
//pasa lo mismo aca abajo, pero con un id de otro producto
var audiobrown = document.getElementById("audiobrown");
const botonbrown = document.getElementById("playbrown");
botonbrown.addEventListener("click", reproducirbrown);

function reproducirbrown() {
    if(count == 0){
        count = 1;
        audiobrown.play();
        botonbrown.innerHTML = "Pause &#9208;";
    }else{
        count = 0;
        audiobrown.pause();
        botonbrown.innerHTML = "Play &#9658;";
    }
}