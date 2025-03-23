<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio Rectángulo</title>
</head>
<body>
    <h1>Rectangulo</h1>
    <!--creando un objeto Rectangulo -->
    <?php
    include("./Rectangulo.php");
        $miRectangulo = new Rectangulo(10, 5);
        echo "El area del rectangulo es: " . $miRectangulo->calcularArea();
        echo "<br>";
        echo "El perimetro del rectangulo es: " . $miRectangulo->calcularPerimetro();
    ?>
</body>
</html>