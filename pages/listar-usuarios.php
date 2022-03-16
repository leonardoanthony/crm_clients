<?php

    $usuarios = Usuario::listarUsuarios();

?>

<div class="container">
    <div class="box-init">
        <h3>Usuários Cadastrados</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Perfil</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $key => $usuario){ ?>
                <tr>
                    <th scope="row"><?php echo $usuario['nome_usuario']; ?></th>
                    <td><?php echo $usuario['login_usuario']; ?></td>
                    <td><?php echo Painel::$perfil[$usuario['perfil']]; ?></td>
                    <td>
                        <button class="btn btn-success"><i class="material-icons">mode_edit</i></button>
                        <button class="btn btn-danger"><i class="material-icons">delete</i></button>
                        </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
</div>