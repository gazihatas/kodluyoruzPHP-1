<?php

//Bu sayfada login olunduğunu varsayıyoruz.

session_start();

$_SESSION['user'] = [
    'name' => 'Muhammet Oğuzhan',
    'surname' => 'AYDOĞDU',
    'age' => 25,
    'mail' => 'm.o.aydogdu@outlook.com',
    'city' => 'Kocaeli'
];

header('Location: page.php');




?>