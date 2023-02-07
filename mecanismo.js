const car_admin = "car_admin.php";
const model_admin = "model_admin.php";
const make_admin = "make_admin.php";
const article_admin = "article_admin.php";

function pageselected (page){
var carta = document.getElementById("dashboard-car");
carta.addEventListener('click', 
function() {
window.location.href = 'http://localhost/racing_web/administrador/' + page + '.php';
});
};
