<?php
    include 'connect.php';
    $sql = 'SELECT * FROM musica ORDER BY plays DESC LIMIT 10';
    $result_msc = mysqli_query($conn,$sql);

    $sql = 'SELECT * FROM cantor LIMIT 9';
    $result_autor = mysqli_query($conn,$sql);

    $sql = 'SELECT * FROM podcast LIMIT 10';
    $result_podcast = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJ</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class='menu-home'><a href="index.html"><i class="fa-solid fa-house"></i></a> <p>Home</p> </li>
                <li class='menu-musica'><a href="musica.html"><i class="fa-solid fa-music"></i></a> <p>Musicas</p> </li>
                <li class='menu-cantor'><a href="cantor.html"><i class="fa-solid fa-headphones"></i></a> <p>Cantores</p> </li>
                <li class='menu-podcast'><a href="podcast.html"><i class="fa-solid fa-microphone"></i></a> <p>Podcast</p> </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h1>Pagina Inicial</h1>
            <div class="populares">
                
                <div class="p-musicas pop">
                    <h2 class="pop-txt" >As 10 musicas Populares</h2>

                    <div class="home-area-tabela">
                        <table class="home-table-msc home-tabela">
                            <thead class='h-thead'>
                                <tr class='h-tr'>
                                        <th>Nome</th>
                                        <th>Autor</th>
                                        <th>Duração</th>
                                </tr>
                            </thead>
                            <tbody class='h-tbody'>

                                <?php
                                    if ($result_msc){
                                        while($row = mysqli_fetch_assoc($result_msc)){
                                            $nome = $row['nome'];
                                            $autor = $row['autor'];
                                            $duracao = $row['duracao'];

                                            echo '
                                            <tr class="h-tr">
                                                <td class="h-td">'.$nome.'</td>
                                                <td class="h-td">'.$autor.'</td>
                                                <td class="h-td">'.$duracao.'</td>
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
                    <div class="home-area-tabela">
                        <table class="home-table-autor home-tabela">
                            <thead class='h-thead'>
                                <tr class='h-tr'>
                                        <th>Id</th>
                                        <th>Autor</th>
                                </tr>
                            </thead>
                            <tbody class='h-tbody'>
                                <?php
                                    if ($result_autor){
                                        while($row = mysqli_fetch_assoc($result_autor)){
                                            $id = $row['id'];
                                            $nome = $row['nome'];

                                            echo '
                                                <tr class="h-tr">
                                                    <td class="h-td">'.$id.'</td>
                                                    <td class="h-td">'.$nome.'</td>
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
                    <div class="home-area-tabela">
                        <table class="home-table-autor home-tabela">
                            <thead class='h-thead'>
                                <tr class='h-tr'>
                                        <th class='h-th'>Nome</th>
                                </tr>
                            </thead>
                            <tbody class='h-tbody'>
                                <?php
                                    if ($result_podcast){
                                        while($row = mysqli_fetch_assoc($result_podcast)){
                                            $nome = $row['nome'];

                                            echo '
                                                <tr class="h-tr">
                                                    <td class="h-td">'.$nome.'</td>
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