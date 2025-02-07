<?php

require '../connect.php';

if(isset($_POST['adicionar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $autor = $_POST['dono'];
    $duracao = $_POST['duracao'];

    $sql = "INSERT INTO podcast (nome, descricao, dono, duracao) VALUES ('$nome','$descricao','$autor', '$duracao')";

    $result_create = mysqli_query($conn,$sql);
    
    if($result_create){
        header('location:podcast.php');
    }
    else{
        echo'<script>alert("Não foi possível cadastrar o cantor!")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <main>
        <section class="update">
            <h1>Cadastrar Podcast</h1>
            <div class="area-formulario">
                <form method="POST"  class="formulario">
                    <div class="area-input">
                        <div class="input">
                            <label for="nome" class="edi-inf">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite o nome do podcasat">
                        </div>

                        <div class="input">
                            <label for="descricao" class="edi-inf">Descrição</label>     
                            <input type="text" name="descricao" id="descricao" placeholder="Descreva brevemente o podcast">    
                        </div>

                        <div class="input">
                            <label for="autor" class="edi-inf">Autor</label>   
                            <input type="text" name="dono" id="dono" placeholder="Digite o autor do podcast"> 
                        </div>

                        <div class="input">
                            <label for="duracao" class="edi-inf">Duração</label>   
                            <input type="text" name="duracao" id="duracao" placeholder="Digite a duração do podcast">
                        </div>

                    </div>

                        <div class="area-btn-form">
                            <input type="submit" name="adicionar" id="bot" value="Adicionar" class="default-button btn1">
                            <input type="reset" name="reiniciar" id="bot" value="Reiniciar" class="default-button btn2">
                        </div>
                </form>
            </div>
            <div class="area-btn-voltar">
                <a href='podcast.php' class="btn-voltar btn2"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
        </section>
    </main>
</body>
</html>


