<?php

$hostname = '192.168.100.235';
$username = "user";
$password = '321';
$db = 'crud_music';

$conn = new mysqli($hostname,$username,$password,$db);

if (!$conn){
    echo '<script> alert("Erro ao conectar")</script>';
}
else{
    echo'<script> alert("conectado")</script>';
}

?>