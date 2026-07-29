<?php
    $nombre=$_POST["nombre"];
    $apellido=$POST["ape"];
    $edad=$_POST["edad"];
    $correo=$_POST["correo"];
    $carrera=$_POST["carrera"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir datos</title>

</head>
<body>
    <header> <h1>recibiendo formulario</h1></header>
    <section> 
        <article>
            <?php
                echo "<b>Nombre:</b> ".$nombre."<br>";
                echo "<b>Apellido:</b> ".$apellido."<br>";
                echo "<b>Edad: ".$edad."<br>";
                echo "<b>correo: ".$correo."<br>";
                echo "<b>Carrera: ".$carrera."<br>";

            ?>
        </article>
    </section>
   <footer>Realizado por MIKE Julio-2020 </footer>
</body>
</html>