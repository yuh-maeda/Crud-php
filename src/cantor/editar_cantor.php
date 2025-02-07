<?php

require '../connect.php';

if(isset($_GET['id'])){
    $id_recebido = $_GET['id'];
    
    $sql = "SELECT * FROM cantor WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql);
    $cantor = mysqli_fetch_assoc($result);
}
else{
    header('location:index.php');
}

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $ranking = $_POST['ranking'];

    $sql_update = "UPDATE cantor SET nome='$nome', genero='$genero', top_ouvida='$ranking' WHERE id = $id_recebido";

    $result_update = mysqli_query($conn,$sql_update);
    
    if($result_update){
        header('location:cantor.php');
    }
    else{
        echo'<script>alert("Não foi possível editar o cantor!")</script>';
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <main sty>
        <section class="update">
            <h1>Editar Cantor</h1>
            <div class="area-formulario">
                <form method="POST"  class="formulario">
                    <div class="area-input">
                        <div class="input">
                            <label for="nome" class="edi-inf">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite o nome do cantor" value="<?= $cantor['nome'];?>">
                        </div>

                        <div class="input">
                            <label for="genero" class="edi-inf">Gênero musical</label>     
                            <input type="text" name="genero" id="genero" placeholder="Digite o gênero musical" value="<?= $cantor['genero'];?>">    
                        </div>

                        <div class="input">
                            <label for="ranking" class="edi-inf">Ranking</label>   
                            <input type="text" name="ranking" id="ranking" placeholder="Digite o ranking do autor" value="<?= $cantor['top_ouvida'];?>"> 
                        </div>

                    </div>

                        <div class="area-btn-form">
                            <input type="submit" name="salvar" id="bot" value="Salvar" class="default-button btn1">
                            <input type="reset" name="reiniciar" id="bot" value="Reiniciar" class="default-button btn2">
                        </div>
                </form>
            </div>
            <div class="area-btn-voltar">
                <a href='cantor.php' class="btn-voltar btn2"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
        </section>
    </main>
</body>
</html>