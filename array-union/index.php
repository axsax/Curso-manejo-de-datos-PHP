<?php

$frontend =['javascript'];
$backend= ['php', 'laravel'];
var_dump($frontend+$backend); // reemplaza por keys, es por eso que php no aparece, porque javascript ya tomo su posicion primero

$frontend2 =['frontend'=>'javascript'];
$backend2= ['backend'=>'php', 'framework'=>'laravel'];
var_dump($frontend2+$backend2); // como ahora los keys son diferentes, me va a mostrar todos 

var_dump(array_merge($frontend,$backend) ); //los une todos sin importar nada funciona perfecto cuando los keys son numericos

$frontend3 =['a'=>'javascript'];
$backend3= ['a'=>'php', 'b'=>'laravel'];
var_dump(array_merge($frontend3,$backend3) ); // hay problema porque el key es un string por lo tanto quita javascript 
var_dump(array_merge_recursive($frontend3,$backend3) ); // mete cada elemento en N posicion del array nombrando cada uno por el key, entonces se agrupan los a y los b


$courses =['javascript', 'php', 'laravel'];
$categories= ['front', 'back', 'framework'];
var_dump(array_combine($categories,$courses)); // une cada uno y lo coloca como se fuera su key y su value