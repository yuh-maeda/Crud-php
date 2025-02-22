<?php
    include 'connect.php';
    $sql = 'SELECT * FROM musica ORDER BY plays DESC LIMIT 10';
    $result_msc = mysqli_query($conn,$sql);

    $sql = 'SELECT * FROM cantor ORDER BY top_ouvida LIMIT 5';
    $result_autor = mysqli_query($conn,$sql);

    $sql = 'SELECT * FROM podcast LIMIT 10';
    $result_podcast = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class='menu-home'><a href="index.php"><i class="fa-solid fa-house"></i></a> <p>Home</p> </li>
                <li class='menu-musica'><a href="musica/musica.php"><i class="fa-solid fa-music"></i></a> <p>Musicas</p> </li>
                <li class='menu-cantor'><a href="cantor/cantor.php"><i class="fa-solid fa-headphones"></i></a> <p>Cantores</p> </li>
                <li class='menu-podcast'><a href="podcast/podcast.php"><i class="fa-solid fa-microphone"></i></a> <p>Podcast</p> </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h1>Pagina Inicial</h1>
            <div class="populares">
                
                <div class="p-musicas pop">
                    <h2 class="pop-txt" >As 10 musicas Populares</h2>

                    <div class="area-tabela">
                        <table class="default-tabela">
                            <thead class='default-thead'>
                                <tr class='default-tr'>
                                        <th class='default-th'>Nome</th>
                                        <th class='default-th'>Autor</th>
                                        <th class='default-th'>Duração</th>
                                </tr>
                            </thead>
                            <tbody class='default-tbody'>

                                <?php
                                    if ($result_msc){
                                        while($row = mysqli_fetch_assoc($result_msc)){
                                            $nome = $row['nome'];
                                            $autor = $row['autor'];
                                            $duracao = $row['duracao'];

                                            echo '
                                            <tr class="default-tr">
                                                <td class="default-td">'.$nome.'</td>
                                                <td class="default-td">'.$autor.'</td>
                                                <td class="default-td">'.$duracao.'</td>
                                            </tr>
                                        ';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="p-artistas pop">
                    <h2 class="pop-txt" >Artistas do momento</h2>
                    <div class="area-tabela">
                        <table class="default-tabela">
                            <thead class='default-thead'>
                                <tr class='default-tr'>
                                        <th class='default-th'>Autor</th>
                                </tr>
                            </thead>
                            <tbody class='default-tbody'>
                                <?php
                                    if ($result_autor){
                                        while($row = mysqli_fetch_assoc($result_autor)){
                                            $id = $row['id'];
                                            $nome = $row['nome'];

                                            echo '
                                                <tr class="default-tr">
                                                    <td class="default-td">'.$nome.'</td>
                                                </tr>
                                            ';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="p-podcast pop">
                    <h2 class="pop-txt" >Principais Podcast</h2>
                    <div class="area-tabela">
                        <table class="default-tabela">
                            <thead class='default-thead'>
                                <tr class='default-tr'>
                                        <th class='default-th'>Nome</th>
                                </tr>
                            </thead>
                            <tbody class='default-tbody'>
                                <?php
                                    if ($result_podcast){
                                        while($row = mysqli_fetch_assoc($result_podcast)){
                                            $nome = $row['nome'];

                                            echo '
                                                <tr class="default-tr">
                                                    <td class="default-td">'.$nome.'</td>
                                                </tr>
                                            ';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

    </main>

</body>

</html>