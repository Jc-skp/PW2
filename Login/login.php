<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <?php
       
    $login = $_POST['user'];
    $senha = $_POST['password']; 

    if ($login != "etec" || $senha != "1234") {
        echo "<h1>dados invalidos ou não preechidos</h1>"."<br>";
        echo "<button type='submit'><a href='index.html'>Voltar</a></button> ";
    }else { 
        include('formulario.php');
    }
       
    
?>

</body>
</html>

