<?php

$categorias = Categoria::listarCategorias();

if (isset($_GET['excluir'])) {
    $idExcluir = intval($_GET['excluir']);
    Painel::delete('tb_control.categorias', $idExcluir);
    Painel::redirect(INCLUDE_PATH . 'listar-categorias');
}


?>

<div class="container">
    <div class="box-init">
        <h3>Categorias Cadastradas</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($categorias as $key => $categoria){ ?>

                    <tr class="<?php echo Categoria::corCategoria($categoria['id'] - 1) ?>">
                        <th><?php echo $categoria['id']; ?></th>
                        <td><?php echo $categoria['nome_categoria']; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo INCLUDE_PATH; ?>editar-categoria?id=<?php echo $categoria['id']; ?>"><i class="material-icons">mode_edit</i></a>
                            <a actionBtn="delete" class="btn btn-danger" href="<?php echo INCLUDE_PATH; ?>listar-categorias?excluir=<?php echo $categoria['id']; ?>"><i class="material-icons">delete</i></a>
                        
                        </td>
                    </tr>

                <?php  } ?>

            </tbody>
        </table>
    </div>
</div>