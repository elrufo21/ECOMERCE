document.getElementById("inicioSesion").addEventListener("click",inicioSesion);


function inicioSesion(){
    window.location = "view/includes/user/sesion/login.php";
}
function cerrar(){
    window.location = "controller/sessionController.php?s=1";
}
function venta(id){
    if (id) {
        window.location = "index.php?venta="+id;
    }else{
        inicioSesion();
    }
}
function tienda(id){
    if (id) {
        window.location = "index.php?tienda="+id;
    }else{
        inicioSesion();
    }
}