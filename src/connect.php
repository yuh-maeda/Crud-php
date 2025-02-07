<?php

$hostname = '127.0.0.1';
$username = "root";
$password = '';
$db = 'crud_music';

$conn = new mysqli($hostname,$username,$password,$db);

if (!$conn){
    echo '<script> alert("Erro ao conectar")</script>';
}
else{
    echo'<script> alert("conectado")</script>';
}

?>