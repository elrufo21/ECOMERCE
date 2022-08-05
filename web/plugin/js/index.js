document.getElementById("inicioSesion").addEventListener("click",inicioSesion);


function inicioSesion(){
    window.location = "view/includes/user/sesion/login.php";
}
function cerrar(){
    window.location = "controller/sessionController.php?s=1";
}