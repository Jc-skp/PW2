<!DOCTYPE html>
<html lang="´pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfil-content</title>
</head>
<body>
    <main>
        <?php
            require_once 'users.php';
            require_once 'class/post.php';
            require_once 'class/session.php';
            
            $session = new Session();
            
            $post = new Post();

            $titulo = $_POST['title'];
            $conteudo = $_POST['content'];
            $autor = $_POST['author'];
            if ($titulo == '' || $conteudo == '' || $autor == '') {
                echo "<p>Preencha todos os campos!</p>";
            } else {
                
        ?>
        <p class="center"><img src="<?=$data['img']?>"></p>
        <p>Nome: <?= $data['name'] ?> </p>
        <p>E-mail: <?= $data['email'] ?> </p>
        <p>CPF: <?= $data['cpf'] ?> </p>
        <hr>
        <div class="areatitulo">
            <h1 class="titulo"> <?= $titulo ?> </h1>
        </div>
        <section>
            <textarea name="" id="" cols="20" rows="10"class="areatexto"> <?= $conteudo ?> </textarea>
            <p class="direita"> <?= $autor ?> </p>
        </section>

        <?php } ?>
    </main>
</body>
</html>