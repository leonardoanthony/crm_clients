
<?php

    $id = $_GET['id'];

    $usuario = Usuario::selecionarUsuario($id);

?>


<div class="container">
    <div class="box-init">
    <?php

        if (@isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $perfil = $_POST['perfil'];
            
            if(!$nome){
                Painel::alert('erro','Nome não pode ser vazio');
            }else if(!$login){
                Painel::alert('erro','Login não pode ser vazio');
            }else if(!$senha){
                Painel::alert('erro','Senha não pode ser vazio');
            }else if(!$perfil){
                Painel::alert('erro','Selecione uma opção de perfil válida');
            }else{
                Usuario::atualizarUsuario($nome, $login, $senha, $perfil, $id);
                $usuario = Usuario::selecionarUsuario($id);
            }
        }
    ?>
        <h3>Editar Usuário</h3>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="<?php echo @$usuario['nome_usuario'];?>" id="nome" name="nome" placeholder="Nome Completo">
                <label for="nome">Nome Completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="<?php echo @$usuario['login_usuario'];?>" id="login" name="login"  placeholder="Login">
                <label for="login">Login</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" value="<?php echo @$usuario['senha_usuario'];?>" id="senha" name="senha" placeholder="Senha">
                <label for="senha">Senha</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="perfil" name="perfil" aria-label="Floating label select example">
                    <option value="0" selected>Selecione</option>
                    <option value="1">Visualizador</option>
                    <option value="2">Operador</option>
                </select>
                <label for="perfil">Perfil</label>
            </div>
            <div class="submit-login">
                <input class="btn btn-success" type="submit" value="Atualizar" name="acao">
            </div>
        </form>
    </div>
</div>