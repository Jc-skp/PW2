<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
         if ($_POST == []) {
            echo "<h1>Faça login para poder acessar essa página.</h1>";
        } else {
    ?>
    
    <section>
        <form method="post" action="conteudo.php">
            <label>Título:</label>
            <input type="text" name="title" placeholder="Digite um título"><br>
            
            <label>Conteúdo:</label><br>
            <textarea name="content" placeholder="Digite o conteúdo" cols="40" rows="20"></textarea><br>
            
            <label>Autor:</label>
            <input type="text" name="author" placeholder="Digite o nome do autor"><br>
            
            <input type="submit" value="postar">
        </form>
    </section>
    
    <?php } ?>
</body>
</html>