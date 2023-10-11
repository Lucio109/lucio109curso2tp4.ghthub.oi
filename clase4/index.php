<?php
// Ejercicio 1
$n = 5;
if ($n > 0) {
echo ""    
echo "El número:$n es positivo"."<br>";
}


$n1 = -9;
if ($n <= 0) {
echo "El número:$n1 es negativo"."<br>";
}

// Ejercicio 2
$n = 7;
if ($n > 1 && $n < 10) {
echo "El número ingresado es mayor a 1 y menor a 10"."<br>";
}


// Ejercicio 3
$n = 15;
if ($n >= 10 || $n < 2) {
echo "El número ingresado es mayor o igual a 10 o menor a 2"."<br>";
} else {
echo "El número ingresado no pudo ser validado"."<br>";
}

// Ejercicio 4
$numero1 = 7;
$numero2 = 3;
if ($numero1 > $numero2) {
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
echo "La suma es: $suma"."<br>";
echo "La resta es: $resta"."<br>";
} else{
    if ($numero2 > $numero1) {
$multiplicacion = $numero1 * $numero2;
$division_entera = $numero2 / $numero1;
$resto = $numero2 % $numero1;
echo "La multiplicación es: $multiplicacion"."<br>";
echo "La división entera es: $division_entera"."<br>";
echo "El resto es: $resto"."<br>";
} else {
echo "Los números ingresados son iguales"."<br>";
}
}
?>

