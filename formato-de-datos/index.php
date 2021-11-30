<?php
$text = "PHP es UN LENGUAJE <br>";
echo "$text <br>";

//alterar
echo strtolower($text); // poner el string en minuscula
echo strtoupper($text);// poner el string en mayuscula
echo ucfirst($text); // poner el primer caracter de un string en mayusucula
echo lcfirst($text);// poner el primer caracter de un string en minuscula

//reemplazar
$slug = str_replace(' ', '-', $text); // reemplaza en un string los espacios en guion medio
echo strtolower($slug);

//Modificacion
$code=39;
echo str_pad($code,8,'#'); // quiero 8 caracteres y teng un texto asi que completelo con el #, 
echo '<br>';
echo str_pad($code,8,'#',STR_PAD_BOTH); // quiero 8 caracteres y teng un texto asi que completelo con el #, pero dejeme en el medio el texto y rellenelo a los lados
echo '<br>';
echo str_pad($code,8,'#',STR_PAD_LEFT); // quiero 8 caracteres y teng un texto asi que completelo con el #, pero rellenelo a la izquier
echo '<br>';
echo str_pad($code,8,'#',STR_PAD_RIGHT); // quiero 8 caracteres y teng un texto asi que completelo con el #, pero rellenelo a ala derecha
echo '<br>';
$text = "<h1>PHP es UN LENGUAJE </h1> <br>";
echo $text;
echo strip_tags($text); // quita etiquetas HTML 
echo '<br>';
$text = "PHP es UN LENGUAJE, AñO 2020 , programación";
echo strtoupper($text); // elemenot monobyte, la ñ y las tildes no se ponen en mayuscual
echo '<br>';
echo mb_strtoupper($text); // elementos multibyte, coloca en mayusucula todo