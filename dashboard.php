<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <nav>
            <div class = "container-fluid">
                <a class = "navbar-brand">Sistem x</a>
                <?php
                    print "Olá, " . $_SESSION["nome"];
                    print "<a href='logout.php'>Sair</a>";
                ?>
            </div>
        </nav>


        <a>teste Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore impedit ex maiores perspiciatis debitis hic! Aliquid sapiente animi repudiandae. Pariatur neque nulla harum libero inventore quia, aliquid velit possimus dolorum.
</a>
    </body>
</html>