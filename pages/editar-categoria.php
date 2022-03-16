<?php

    $id = $_GET['id'];

    $categoria = Categoria::selecionarCategoria($id);

?>

<div class="container">
    <div class="box-init">
    <?php

        if (@isset($_POST['acao'])){
            $categoria = $_POST['categoria'];
            
            if(!$categoria){
                Painel::alert('erro','Categoria não pode ser vazio');
            }else{
                Categoria::atualizarCategoria($categoria, $id);
                $categoria = Categoria::selecionarCategoria($id);
            }
        }
    ?>
        <h3>Editar Categoria</h3>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="<?php echo @$categoria['nome_categoria'];?>"  id="categoria" name="categoria" placeholder="Categoria">
                <label for="categoria">Categoria</label>
            </div>
            <div class="submit-login">
                <input class="btn btn-success" type="submit" value="Atualizar" name="acao">
            </div>
        </form>
    </div>
</div>