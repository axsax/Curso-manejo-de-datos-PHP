<?php

//valores
function greet($name){
    return "Hola, $name";
}
echo greet("axsax");
echo '<br>';
//referencias
$course='PHP';
function path(&$course){ //parametro de referencias con &
    $course ='Laravel';
    echo $course;
    echo '<br>';
}

path($course);
echo '<br>';
echo($course);
echo '<br>';

//predeterminado

function greet2($name='axsax'){
    return "Hola, $name";
}
echo greet2();
echo '<br>';
echo greet2('melo');
echo '<br>';

echo '<br>';