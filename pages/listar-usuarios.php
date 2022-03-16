<?php

$usuarios = Usuario::listarUsuarios();

if (isset($_GET['excluir'])) {
    $idExcluir = intval($_GET['excluir']);
    Painel::delete('tb_admin.usuarios', $idExcluir);
    Painel::redirect(INCLUDE_PATH . 'listar-usuarios');
}


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
                <?php foreach ($usuarios as $key => $usuario) { ?>
                    <tr>
                        <th scope="row"><?php echo $usuario['nome_usuario']; ?></th>
                        <td><?php echo $usuario['login_usuario']; ?></td>
                        <td><?php echo Painel::$perfil[$usuario['perfil']]; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo INCLUDE_PATH; ?>editar-usuario?id=<?php echo $usuario['id']; ?>"><i class="material-icons">mode_edit</i></a>
                            <a actionBtn="delete" class="btn btn-danger" href="<?php echo INCLUDE_PATH; ?>listar-usuarios?excluir=<?php echo $usuario['id']; ?>"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>