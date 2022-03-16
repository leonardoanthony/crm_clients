<?php

    if(Painel::permissaoPagina($_SESSION['perfil'])){

?>

<div class="container">
    <div class="box-init">
    <?php

        if (@isset($_POST['acao'])){
            $categoria = $_POST['categoria'];
            
            if(!$categoria){
                Painel::alert('erro','Categoria não pode ser vazio');
            }else{
                Categoria::cadastrarCategoria($categoria);
            }
        }
    ?>
        <h3>Cadastrar Categorias</h3>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="<?php echo @$_POST['categoria'];?>"  id="categoria" name="categoria" placeholder="Categoria">
                <label for="categoria">Categoria</label>
            </div>
            <div class="submit-login">
                <input class="btn btn-success" type="submit" value="Cadastrar" name="acao">
            </div>
        </form>
    </div>
</div>

<?php }else{ ?>

    <div class="container">
    <div class="box-init">
        <?php Painel::alert('erro','Você não tem permissão de acesso a essa página'); ?>   
    </div>
</div>


<?php } ?>