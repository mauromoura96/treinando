<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\telalogin.css">
    <title>ADT|Login</title>
</head>
<body>
    <?php
        $username = "mauro";
        $password = "123";

        if(isset($_POST["username"]))
        {
            if($_POST["username"] == $username and $_POST["password"] == $password){
                header("Location: home.html");
            }else
            {
                echo "Usuário ou Senha inválidos.";
            }
        }
    ?>
    <header>
    </header>
    <main>
        <div class="container">
            <img src="img/avatar.png">
            <form method="post">
                <div class="form-input">
                    <input type="text" name="username" placeholder="Usuário">
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Senha">
                </div>
                <input type="submit" name="submit" value="Entrar">
            </form>
        </div>  
    </main>
    <footer>
        <p>Gerenciamento de Treinamentos - Desenvolvido por MPM - Abril 2018</p>
    </footer>
</body>
</html>
