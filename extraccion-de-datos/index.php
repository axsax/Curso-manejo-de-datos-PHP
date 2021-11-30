<?php 

$data = 'Estudio PHP';
echo $data[0];
$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur facere ipsam rerum, iure facilis tenetur quia ullam, ea perferendis libero dolorem hic quaerat, aliquam ab. Dolor adipisci hic voluptates autem?';
$extract = substr($post,0,20); //desde 0 hasta 20
echo "$extract... [ver mas] <br>";


$data = 'javascript, php,  laravel'; //campo tag del formulario por ejemplo
$tags = explode(',',$data); // separar por comas lo que tenga data
echo "<pre>";
var_dump($tags);

$courses = ['javascript', 'php', 'laravel'];
echo implode(', ',$courses); //convierte array a string tenendo en cuenta la ,

$course = "   CURSO DE PHP    ";
echo "<pre>";
echo ltrim($course); // quitaespacios al inicio del string
echo rtrim($course); // quitaespacios al final del string
echo trim($course); // quitaespacios al inicio y al final del string

?>