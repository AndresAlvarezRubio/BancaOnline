document.querySelector("#aumentarFuente").addEventListener("click", ()=>{
    ajustarFuente(1);
});
document.querySelector("#reducirFuente").addEventListener("click", ()=>{
    ajustarFuente(-1);
});
document.querySelector("#escalaGrises").addEventListener("click", escalaGrises);
document.querySelector("#altoContraste").addEventListener("click", altoContraste);
document.querySelector("#reset").addEventListener("click", restablecerTodo);


function ajustarFuente(cambio) {

    let elementos = document.querySelectorAll("body *:not(#accesibilidad *)");

    elementos.forEach(function(elem){

        let estilo = window.getComputedStyle(elem) //getComputedStyle() pilla el estilo del elemento
        let fontSize = parseFloat(estilo.fontSize) //se pasa a float para que no sea String
        console.log(fontSize);
        elem.style.fontSize = fontSize + cambio + 'px';
    })
}
function escalaGrises(){

    document.body.classList.add("grayscale");
}
function altoContraste(){

    document.body.classList.add("dark-theme");
}
function restablecerTodo(){

    let elementos = document.querySelectorAll("body *");

    elementos.forEach(function(elem){

        elem.style.fontSize = "";
    })

    document.body.classList.remove("dark-theme");
    document.body.classList.remove("grayscale");

}

