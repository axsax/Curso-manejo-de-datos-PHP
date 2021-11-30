<?php
#EXPRESIONES REGULARES
/*
/: CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN
{}: CONDICIÓN
preg_match()
'/^$/': Estructura base
*/

$password ='123456';
var_dump ((bool)preg_match('/^[0-9]{6,9}$/', $password)); // solo me permita elementos del [0-9] y la condicion es {6,9} que tenga como minimo 6 elementos y maximo 9