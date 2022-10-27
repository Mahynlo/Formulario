<?php
    include("conexion.php");
    $datos = "SELECT * FROM cartelera_peliculas";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <style>
        body{
        margin: 0;
        font-family: sans-serif;
        background: #204862;
        }

        h1{
            color: #fff;
            text-align: center;
        }
        .boton-enviar{
         background: rgb(220, 20, 60);
            color: #fff;
            margin: auto;
            padding: 10px 40px;
            font-size: 20px;
        }

        .boton-enviar:active{
            transform: scale(1.05);

        }
        .contenedor_cartelera {
            border-radius: 20px;
            background-color: green;
            color: white;
            padding: 10px;
            margin: 2em 550px 2em;
        }
    </style>
</head>
<body>
    <form action="index.html">
        <input type="submit" value="Regresar" class="boton-enviar">
    </form><br><br><br><br>
    <div class="container-table">
        <h1>Cartelera de peliculas</h1>

<div>
  
        <?php $resultado = mysqli_query($conexion,$datos);
            while($row= mysqli_fetch_assoc($resultado)){ 
        ?>
    <div class="contenedor_cartelera">
        <div class="table__item">Pelicula: <?php echo $row["nombre"] ?></div>
        <div class="table__item">Ctaegoria: <?php echo $row["categoria"] ?></div>
        <div class="table__item">Año: <?php echo $row["anio"] ?></div>
        <div class="table__item">Director: <?php echo $row["director"] ?></div>
        <div class="table__item">Clasificacion: <?php echo $row["clasificacion"] ?></div><br><br>
    </div>
        <?php } mysqli_free_result($resultado);?>

</div>

    
</body>
</html>