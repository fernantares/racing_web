let hostdomain = "http://localhost/racing_web/administrador/";
let urladmincar =  hostdomain + "car_admin.php";

var btn = document.getElementById('admin_car');
btn.addEventListener('click', function() {
  document.location.href = urladmincar;
});

