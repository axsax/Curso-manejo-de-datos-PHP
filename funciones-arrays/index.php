<?php
// sort: Ordena un array.

// rsort: Ordena un array en orden inverso.

// ksort: Ordena un array por clave.

// krsort: Ordena un array por clave en orden inverso.

// array_slice: Extrae una parte de un array.

// array_chunk: Divide un array en fragmentos.

// array_shift: Quita un elemento del principio del array.

// array_pop: Extrae el último elemento del final del array.

// array_unshift: Añadir al inicio de un array uno a más elementos.

// array_push: Inserta uno o más elementos al final de un array.

// array_flip: Intercambia todas las claves de un array con sus valores asociados.

$courses =['PHP','JavaScript', 'Laravel'];
sort($courses); //ordenar ascendentemente
rsort($courses); //ordenar desendentemente r quiere decir recursivo

var_dump($courses);

$courses2 =[10=>'PHP',100=>'JavaScript',1000=> 'Laravel'];
ksort($courses2); //ordenar por keys ascendentemente
krsort($courses2); //ordenar por keys desendentemente r quiere decir recursivo

var_dump($courses2);
var_dump(array_slice($courses2,1)); //quitar o revanar, le quito los keys y lo dejo de 0 a N

var_dump(array_chunk($courses2,1));// repartir en N elementos el array para que sea dividido dependiendo la N cantidad que el configure

array_shift($courses2);// elimina el primer elemento y devuleve el resto del array
var_dump($courses2);
array_pop($courses2); // elimina el ultimo elemento y devuelve el resto del array
var_dump($courses2);
array_unshift($courses2,'JAVA'); //agrega en el primer elemento
var_dump($courses2);
array_push($courses2,'python'); //agrega al final 
var_dump($courses2);
$courses3 =['frontend'=>'JS','framework'=> 'Laravel','backend' =>'PHP'];
var_dump(array_flip($courses3));//intercambiar los valores por los key y viceversa