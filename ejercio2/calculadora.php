<?php
 $operando1 = $_GET['operando1'];
 $operando2 = $_GET['operando2'];
 $operador = $_GET['operador'];
 
 if($operador == "+"){
  $solucion = $operando1 + $operando2;
 }else if($operador == "-"){
  $solucion = $operando1 - $operando2;
 }else if($operador == "*"){
  $solucion = $operando1 * $operando2;
 }else if($operador == "/"){
  $solucion = $operando1 / $operando2;
 }
echo "La respueta a tu problema es: " $solucion;
?>
