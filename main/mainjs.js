const crossRefPage = "http://localhost/racing_web/main/crossref.php";
const btnCross = document.getElementById('btncross'); //boton de main que lleva a cross reference
if(btnCross){
btnCross.addEventListener('click', () => window.location.href = crossRefPage); //funcion del boton de main que lleva a crossreference
}


const inputCross = document.getElementById('buscref').value;


inputCross.document.addEventListener('keydown', (e) => {
  const formCross = document.getElementById('formCross');
  const rowPart = document.getElementById('rowPart');

  if(e.keyCode == 13){
    const data = FormData(formCross);
    fetch("http://localhost/racing_web/main/crossdata.php",{
      method: 'POST',
      body: JSON.stringify(data)
    })
    rowPart.textContent = JSON.stringify(data);

  }
});



