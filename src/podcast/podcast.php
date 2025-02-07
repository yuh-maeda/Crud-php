<?php
    require '../connect.php';
    $sql = 'SELECT * FROM podcast';
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast</title>

    <link rel="stylesheet" href="../../styles/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <nav>
            <ul>
                <li class='menu-home'><a href="../index.php"><i class="fa-solid fa-house"></i></a> <p>Home</p> </li>
                <li class='menu-musica'><a href="../musica/musica.php"><i class="fa-solid fa-music"></i></a> <p>Musicas</p> </li>
                <li class='menu-cantor'><a href="../cantor/cantor.php"><i class="fa-solid fa-headphones"></i></a> <p>Cantores</p> </li>
                <li class='menu-podcast'><a href="../podcast/podcast.php"><i class="fa-solid fa-microphone"></i></a> <p>Podcast</p> </li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section id='podcast'>
            <h1>Lista de Podcast</h1>
            <div class="container">
                <div class="area-add">
                    <a href="adicionar_podcast.php" class='add-btn'>adicionar podcast</a>
                </div>
                <div class="area-tabela">
                        <table class="default-tabela">
                            <thead class="default-thead">
                                <tr class="default-tr">
                                    <th class="default-th">Id</th>
                                    <th class="default-th">Nome</th>
                                    <th class="default-th">Autor</th>
                                    <th class="default-th">Duração</th> 
                                    <th class="default-th"></th> 
                                    <th class="default-th"></th> 
                                </tr>
                            </thead>

                            <tbody class="default-tbody">
                                <?php
                                    if ($result){
                                        while($row = mysqli_fetch_assoc($result)){
                                            $id = $row['id'];
                                            $nome = $row['nome'];
                                            $dono = $row['dono'];
                                            $duracao = $row['duracao'];

                                            echo '
                                            <tr>
                                                <td class="default-td">'.$id.'</td>
                                                <td class="default-td">'.$nome.'</td>
                                                <td class="default-td">'.$dono.'</td>
                                                <td class="default-td">'.$duracao.'</td>
                                                <td class="default-td"><a href="editar_podcast.php?id='.$id.'" class="default-button btn1">editar</a></td>  
                                                <td class="default-td"><a href="excluir_podcast.php?id='.$id.'" onclick="return confirm(\'Você realmente deseja excluir?\')" class="default-button btn2">excluir</a></td> 
                                            </tr>
                                        ';
                                        }
                                    }
                                ?>
                            </tbody>

                        </table>
                </div>

            </div>
        </section>
    </main>
</body>
</html>