const crossRefPage = "http://localhost/racing_web/main/crossref.php";
const btnCross = document.getElementById('btncross'); //boton de main que lleva a cross reference
if(btnCross){
btnCross.addEventListener('click', () => window.location.href = crossRefPage); //funcion del boton de main que lleva a crossreference
}

const inputCross = document.getElementById('buscref').value;
const parthtml = document.getElementById('parthtml');

inputCross.document.addEventListener('keydown', (e) => {
    
    if(e.keyCode == 113){
      
    }

});

