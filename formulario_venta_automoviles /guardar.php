<?php
    $marca = htmlspecialchars($_POST["marca"]);
    $modelo = htmlspecialchars($_POST["modelo"]);
    $anio = htmlspecialchars($_POST["anio"]);
    $color = htmlspecialchars($_POST["color"]);
    $transmision = htmlspecialchars($_POST["transmision"]);
    
    // Asegurar que el precio es un número flotante para realizar cálculos
    $precio = floatval($_POST["precio"]);

    $nombre = htmlspecialchars($_POST["nombre"]);
    $dpi = htmlspecialchars($_POST["dpi"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $direccion = htmlspecialchars($_POST["direccion"]);

    //Calcular el 10% de descuento sobre el precio del vehículo
    $descuento = $precio * 0.10;

    // Calcular el precio final a pagar
    $precio_final = $precio - $descuento;

    //Formatear los números para que aparezcan con comas y dos decimales
    $precio_fmt = number_format($precio, 2);
    $descuento_fmt = number_format($descuento, 2);
    $precio_final_fmt = number_format($precio_final, 2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Venta</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>Procesamiento de la Venta</h1>
    </header>
    <section>
        <article class="ticket">
            <?php
                // Mostrar la salida en el formato exacto requerido usando las variables de arriba
                echo "=========================================<br>";
                echo "VENTA DE AUTOMÓVIL<br>";
                echo "=========================================<br><br>";

                echo "DATOS DEL VEHÍCULO<br>";
                echo "Marca: " . $marca . "<br>";
                echo "Modelo: " . $modelo . "<br>";
                echo "Año: " . $anio . "<br>";
                echo "Color: " . $color . "<br>";
                echo "Transmisión: " . $transmision . "<br>";
                echo "Precio Original: Q" . $precio_fmt . "<br><br>";

                echo "DATOS DEL COMPRADOR<br>";
                echo "Nombre: " . $nombre . "<br>";
                echo "DPI: " . $dpi . "<br>";
                echo "Teléfono: " . $telefono . "<br>";
                echo "Correo: " . $correo . "<br>";
                echo "Dirección: " . $direccion . "<br>";
                
                echo "-----------------------------------------<br>";
                echo "Descuento (10%): Q" . $descuento_fmt . "<br>";
                echo "Precio Final: Q" . $precio_final_fmt . "<br>";
                echo "-----------------------------------------<br><br>";

                echo "¡Felicidades! Se le ha otorgado un descuento especial del 10% en la compra de su automóvil.<br>";
                echo "Gracias por preferir nuestra agencia.<br>";
            ?>
        </article>
    </section>
</body>
</html>