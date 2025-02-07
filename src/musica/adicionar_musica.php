<?php

require '../connect.php';

if(isset($_POST['adicionar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $autor = $_POST['autor'];
    $plays = $_POST['plays'];
    $duracao = $_POST['duracao'];

    $sql = "INSERT INTO musica (nome, descricao, autor, plays, duracao) VALUES ('$nome','$descricao','$autor','$plays','$duracao')";

    $result_create = mysqli_query($conn,$sql);
    
    if($result_create){
        header('location:musica.php');
    }
    else{
        echo'<script>alert("Não foi possível cadastrar a música!")</script>';
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
    <main sty>
        <section class="update">
            <h1>Cadastrar Música</h1>
            <div class="area-formulario">
                <form method="POST"  class="formulario">
                    <div class="area-input">
                        <div class="input">
                            <label for="nome" class="edi-inf">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite o nome da música">
                        </div>

                        <div class="input">
                            <label for="descricao" class="edi-inf">Descrição</label>     
                            <input type="text" name="descricao" id="descricao" placeholder="Descreva brevemente a música">
                        </div>

                        <div class="input">
                            <label for="autor" class="edi-inf">Autor</label>   
                            <input type="text" name="autor" id="autor" placeholder="Digite o autor da música">
                        </div>

                        <div class="input">
                            <label for="plays" class="edi-inf">Plays</label>
                            <input type="text" name="plays" id="plays" placeholder="Digite a quantidade de plays da música">
                        </div>

                        <div class="input">
                            <label for="duracao" class="edi-inf">Duração</label>   
                            <input type="text" name="duracao" id="duracao" placeholder="Digite a duração da música">
                        </div>

                    </div>

                        <div class="area-btn-form">
                            <input type="submit" name="adicionar" id="bot" value="Adicionar" class="default-button btn1">
                            <input type="reset" name="reiniciar" id="bot" value="Reiniciar" class="default-button btn2">
                        </div>
                </form>
            </div>
            <div class="area-btn-voltar">
                <a href='musica.php' class="btn-voltar btn2"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
        </section>
    </main>
</body>
</html>