<?php

require '../connect.php';

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];

    $sql = "DELETE FROM podcast WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:podcast.php');
    }
    else{
        echo'<script>alert("Não foi possível excluir o podcast!")</script>';
    }

}

?>