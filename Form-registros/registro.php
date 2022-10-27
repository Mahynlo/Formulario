<?php
include 'conexion.php';

//almasenar datos y gurdarlos en variables
$nombrePelicula =$_POST["nombre"];
$director =$_POST["director"];
$anio =$_POST["anio"];
$categoria =$_POST["categoria"];
$clasificacion =$_POST["clasificacion"];


//consulta de isercion
$insertar = "INSERT INTO cartelera_peliculas(nombre,categoria,anio,director,clasificacion) VALUES('$nombrePelicula',
'$categoria','$anio','$director','$clasificacion')";

//buscamos si exite un suario repetido con el correo
$verificar_nombrePelicula = mysqli_query($conexion," SELECT * FROM cartelera_peliculas WHERE nombre = '$nombrePelicula'");
if(mysqli_num_rows($verificar_nombrePelicula) > 0){
    echo '<script>
            alert("Ya se han registrado una pelicula con este nombre");
            window.history.go(-1);
        </script>
    ';
    exit;
}

//se ejectuta la consulta
$resultado = mysqli_query($conexion,$insertar);

if(!$resultado){
    echo '<h1>Error al registrar en la base de datos</h1>';
}else{
    echo '<script>
        alert("Se registraron los datos exitosamente");
        window.history.go(-1);
    </script>
';
    
}

//se cierra la conecion con la base de datos
mysqli_close($conexion);
