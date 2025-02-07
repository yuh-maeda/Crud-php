<?php

require '../connect.php';

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];

    $sql = "DELETE FROM musica WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:musica.php');
    }
    else{
        echo'<script>alert("Não foi possível excluir a música!")</script>';
    }

}

?>