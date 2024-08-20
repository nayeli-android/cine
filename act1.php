<html>
    <head></head>
    <body>
        <h1>CALCULADORA</h1>
       
        <div>
        <p>
            <?php
$numero1 = 70;
$numero2 = 45;


$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;


echo "La suma de  $numero1 y  $numero2  es:  $suma  <br>";
echo "La resta de  $numero1 y $numero2  es:  $resta <br>";
echo "La multiplicacion de $numero1 y $numero2 es:  $multiplicacion <br>";
echo "La division de $numero1 y $numero2 es:  $division <br><br>";
?></div>
    </p>
    <h1>Mi Nombre</h1>
    <div>
        <p>
<?php    
$apem= "Dimas";
$apep= "Ortiz";
$nombre="Nayeli";

echo "Mi nombre  completo es $nombre $apep $apem <br><br>";
?></p>
</div>


<h1>Meeting</h1>
<div>
    <p><?php
$chica = "Sonia";
$chico = "Roberto";

echo "A $chica le gusta $chico.<br><br>";

$nombre = "Jennifer";
$nacimiento = 2001;

$edad = date("Y") - $nacimiento; //date-devuelve la fecha actual
//y es un formato de fecha, representa el año actual con 4 digitos 

echo "Me llamo $nombre y nací en el año $nacimiento. Por lo tanto tengo $edad años. <br><br>";
?>
</p>
</div>

<h1>Impuestos</h1>
<div>
    <p><?php
$precio = 2000;

$iva = $precio * 0.21;
$total = $precio + $iva;
echo "El precio con IVA (21%) es: $" . $total . "<br><br>";


echo "<h3>Resumen:</h3>";
echo "<p>Antes de aplicar el IVA, el precio era: $" . number_format($precio, 2) . "</p>";//formatea un numero. numero a formatear, "2" indica cuantos decimales, "," separado por miles 
echo "<p>El IVA añadido (21%) es: $" . number_format($iva, 2) . "</p>";
echo "<p>Después de aplicar el IVA, el precio total es: $" . number_format($total, 2) . "</p>";
?>
    </p>
</div>


    </body>
</html>