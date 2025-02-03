<?php

$hostname = '10.38.0.81';
$username = "user";
$password = '321';
$db = 'crud_php';

$conn = new mysqli($hostname,$username,$password,$db);

if (!$conn){
    echo 'Erro ao conectar !';
}

?>