<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bem vindo a tela de Login</h1>
    </header>

    <section>
        <form action="" method="post">
            <label for="">Usuário: </label>
            <input type="text" name="usuario" id="">
            <label for="">Senha: </label>
            <input type="text" name="senha" id="">
            <input type="submit" value="Login">

        </form>
    </section>
</body>
</html>
<?php 
        require_once "usuarios.php";

        // echo print_r($_POST);
        $usuario = $_POST["usuario"] ?? null;
        $senha = $_POST["senha"] ?? null;

        // echo "$usuario -- $senha";

        if(is_null($usuario) && is_null($senha)){
            echo "Fazer Login";
        }else{

            if(verUsuarios($usuario, $senha)){
                echo "Fazendo Login...";
                header("Location: formulario.php ?nome=$nome");
            }else{
                echo "Tentar Novamente";
            }

        }

    
    ?>


