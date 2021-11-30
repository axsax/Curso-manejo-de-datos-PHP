<?php

$courses =['javascript', 'php'];
$wishes= ['php', 'laravel', 'javascript','vuejs'];

var_dump(array_diff($wishes,$courses));//busca las diferencias

$arrayA=[1,2,3,4,5];
$arrayB=[3,4,5,6,7];
var_dump(array_diff($arrayA,$arrayB)); // diferencias respecto al orden
var_dump(array_diff($arrayB,$arrayA));

var_dump(array_diff($arrayA,$arrayB)); //diferencia respecto a los valores o los keys
var_dump(array_diff($arrayB,$arrayA)); //diferencia respecto a los valores o los keys

#array_diff_assoc()
//Calcula la diferencia entre arrays con un chequeo adicional de índices