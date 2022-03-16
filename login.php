<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Clients</title>

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-login">
        
        

        <div class="box-login">

            <?php
            if (isset($_POST['acao'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];

                $sql = MySql::conectar()->prepare('SELECT * FROM `tb_admin.usuarios` WHERE `login_usuario` = ? AND `senha_usuario` = ?');
                $sql->execute(array($user, $password));

                if($sql->rowCount() == 1){
                    $info = $sql->fetch();
                    $_SESSION['id'] = $info['id'];
                    $_SESSION['nome'] = $info['nome_usuario'];
                    $_SESSION['user'] = $info['login_usuario'];
                    $_SESSION['pass'] = $info['senha_usuario'];
                    $_SESSION['perfil'] = $info['perfil'];
                    $_SESSION['nivel'] = $info['nivel_acesso'];
                    $_SESSION['login'] = true;
                    Painel::redirect(INCLUDE_PATH_PAINEL.'main');
                    die();
                    
                }else{
                    
                }
            }
            ?>
            <form method="post">
                <h2>Login</h2>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="user" placeholder="Login" required>
                    <label for="floatingInput">Login</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Senha" required>
                    <label for="floatingPassword">Senha</label>
                </div>
                <div class="submit-login">
                    <input class="btn btn-success" type="submit" value="Entrar" name="acao">
                </div>
            </form>
        </div>
    </div>
</body>

</html>