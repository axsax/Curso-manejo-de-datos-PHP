<?php 

echo 'Una linea
varias lineas
comilla simple \' backslack \\ continuar con mas texto <br>';

$name = 'axsax';
echo "Mi nombre es $name <br>";

$courses =[
'backend' =>[
    'PHP',
    'LARAVEL'
]
];
$courses2 =[
    'backend' => 'PHP'
    ];

echo "{$courses['backend'][0]} <br>";

class User{
    public $name ='axsax';
}
$user = new User;

echo "$user->name quiere {$courses['backend'][1]} <br>";
echo "$user->name quiere {$courses2['backend']} <br>";

$teacher = 'axsax';
$axsax = 'Profesor PHP';

echo "$teacher es ${$teacher} CURIOSO <br>";

function getTeacher(){
    return 'teacher';
}

$teacher = 'AXSAX';
echo "{${getTeacher()}} enseña PHP";

?>