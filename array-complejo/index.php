<?php // arrays cmpleto o asociativo
$courses =['frontend'=>'JS','framework'=> 'Laravel','backend' =>'PHP'];
//var_dump($courses);

foreach($courses as $course){
    echo "$course <br>";
}

foreach($courses as $key =>$value){
    echo "$key : $value <br>";
}
function upper($course){
    echo strtoupper("$course <br>");
}   

function upper2($course, $key){
    echo strtoupper("$key ==> $course <br>");
} 

array_walk($courses, 'upper');
array_walk($courses, 'upper2');

var_dump(array_key_exists('frontend',$courses)) ; //comprobar que exista el key frontend en courses
var_dump(in_array('javascript',$courses)); //buscar a nivel de valores que exista algo en courses 
var_dump(array_keys($courses));//mostrar todos los keys
var_dump(array_values($courses));//mostrar todos los valores