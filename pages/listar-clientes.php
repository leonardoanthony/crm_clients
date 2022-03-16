<?php

$clientes = Cliente::listarClientes();
$categorias = Categoria::listarCategorias();

if (isset($_GET['excluir'])) {
    $idExcluir = intval($_GET['excluir']);
    Painel::delete('tb_control.clientes', $idExcluir);
    Painel::redirect(INCLUDE_PATH . 'listar-clientes');
}


?>

<div class="container">
    <div class="box-init">
        <h3>Clientes Cadastrados</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $key => $cliente) { ?>
                    <tr class="<?php echo Categoria::corCategoria($cliente['id_categoria'] - 1) ?>">
                        <th scope="row"><?php echo $cliente['nome_cliente']; ?></th>
                        <td><?php foreach ($categorias as $key => $categoria) {
                                if ($cliente['id_categoria'] == $key + 1) {
                                    echo $categoria['nome_categoria'];
                                };
                            } ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo INCLUDE_PATH; ?>editar-cliente?id=<?php echo $cliente['id']; ?>"><i class="material-icons">mode_edit</i></a>
                            <a actionBtn="delete" class="btn btn-danger" href="<?php echo INCLUDE_PATH; ?>listar-clientes?excluir=<?php echo $cliente['id']; ?>"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>