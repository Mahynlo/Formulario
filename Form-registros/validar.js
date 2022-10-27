function validar(){
    /*var nombre,apellidos,correo,clave,telefono,expresion,fecha;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    clave = document.getElementById("clave").value;
    telefono = document.getElementById("telefono").value;
    fecha = document.getElementById("fecha").value;*/

    var nombrePelicuala,anio,director;

    nombrePelicuala = document.getElementById("nombre").value;
    anio = document.getElementById("anio").value;
    director = document.getElementById("director").value;

    if(nombrePelicuala === ""  || anio === "" || director === ""){
        alert("Todos los campos tienen que estar llenos");
        return false;
    }else if(nombrePelicuala.length > 60){
        alert("El nombre de la pelicuala es muy largo");
        return false;
    }else if(director.length > 40){
        alert("El nombre de la pelicuala es muy largo");
        return false;
    }else if(anio.length > 4){
        alert("El año es muy largo");
        return false;
    }
    //validamos sis el telefono es un numero
    else if(isNaN(anio)){
        alert("El año no es un numero");
        return false;
    }





    //expresion regular para validar el correo
    //expresion = /\w+@\w+\.+[a-z]/;

    //se valida que el campo espesificado este lleno
    /*if(nombre === ""){
        alert("nombre");
        return false;
    }
    if(apellidos === ""){
        alert("apellidos");
        return false;
    }
    if(correo === ""){
        alert("Correo");
        return false;
    }
    if(clave === ""){
        alert("Contraseña");
        return false;
    }
    if(telefono === ""){
        alert("telefono");
        return false;
    }*/

    /*
    //validacion de los campos
    if(nombre === "" || apellidos === "" || correo === "" || clave === "" || telefono === ""){
        alert("Todos los campos tienen que estar llenos");
        return false;
    }
    else if(nombre.length > 30){
        alert("El nombre es muy largo");
        return false;
    }
    else if(apellidos.length > 80){
        alert("Los apellidos son muy largos");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("correo no valido");
        return false;
    }
    else if(correo.length > 100){
        alert("El correo es muy largo");
        return false;
    }
    else if(clave.length > 20){
        alert("La clave es muy largo");
        return false;
    }
    else if(telefono.length > 10){
        alert("El telefono es muy largo");
        return false;
    }
    //validamos sis el telefono es un numero
    else if(isNaN(telefono)){
        alert("El telefono no es un numero");
        return false;
    }*/
}

