<?php 
$greet = function($name){ // funciones anonimas variables que requieren logica
return "Holi, $name";
};

echo $greet('Axsax <br>');

function greet2(Closure $lang, $name){ // el closure espera una funcion anonima
    return $lang($name);
}
$es = function($name){
    return "Hola, $name";
};
$en= function($name){
    return "Hi, $name";
};

echo greet2($en, 'Axsax');