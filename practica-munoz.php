<?php
/**
* Función con la que sumamos 2 números que pasamos por parámetro
*
* @author Adrián Muñoz López
* @version 1.0
* @param1 integer $num1 Primer número que pasamos por parámetro
* @param2 integer $num2 Segundo número que pasamos por parámetro
* @return integer Devuelve el resultado de la suma de los 2 números pasados por parámetros
*/
function sumar($num1, $num2) {
$resultado = $num1 + $num2;

return $resultado;
}

$result = sumar(10+10);
echo $result;

/**
* Función con la que restamos 2 números que pasamos por parámetro
*
* @author Adrián Muñoz López
* @version 1.0
* @param1 integer $num1 Primer número que pasamos por parámetro
* @param2 integer $num2 Segundo número que pasamos por parámetro
* @return integer Devuelve el resultado de la resta de los 2números pasados por parámetro
*/
function restar($num1, $num2) {
$resultado = $num1 - $num2;

return $resultado;
}

$result = restar(10-5);
echo $result;
