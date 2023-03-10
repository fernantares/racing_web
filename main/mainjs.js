const crossRefPage = "http://localhost/racing_web/main/crossref.php";
const btnCross = document.getElementById('btncross'); //boton de main que lleva a cross reference
btnCross.addEventListener('click', () => window.location.href = crossRefPage); //funcion del boton de main que lleva a crossreference

const inputcross = document.getElementById('buscref');
document.addEventListener('keydown', (e) => 

    if(e.key == "F2"){

});