<?php

$hostname = '10.38.0.81';
$username = "user";
$password = '321';
$db = 'crud_music';

$conn = new mysqli($hostname,$username,$password,$db);

if (!$conn){
    echo '<script> alert("Erro ao conectar")</script>';
}
else{
    // echo'<script> alert("conectado")</script>';
}

?>