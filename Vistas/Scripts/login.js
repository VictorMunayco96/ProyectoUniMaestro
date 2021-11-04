

function logueo(){

let usuario=$("#logina").val();

let contrasena =$("#clavea").val();

console.log(usuario+" "+contrasena);

if(usuario=='admin' && contrasena==='admin'){

    location.href="http://localhost:80/proyectomaestro/vistas/Escritorio.php";

}else{

alert ("Usuario o contraseña es incorrecto");

}

}