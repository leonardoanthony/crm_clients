<div class="container">
    <div class="box-init">
    <?php

        if (@isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $categoria = $_POST['categoria'];
            $perfil = $_POST['perfil'];
            
            if(!$nome){
                Painel::alert('erro','Nome não pode ser vazio');
            }else if(!$categoria){
                Painel::alert('erro','Selecione uma opção de categoria válida');
            }else if(!$perfil){
                Painel::alert('erro','Selecione uma opção de perfil válida');
            }else{
                Cliente::cadastrarCliente($nome, $categoria, $perfil);
            }
        }
    ?>
        <h3>Cadastrar Clientes</h3>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="<?php echo @$_POST['nome'];?>" id="nome" name="nome" placeholder="Nome Completo">
                <label for="nome">Nome Completo</label>
            </div>
            
            <div class="form-floating mb-3">
                <select class="form-select" id="categoria" value="<?php echo @$_POST['categoria'];?>" name="categoria" aria-label="Floating label select example">
                    <option value="0" selected>Selecione</option>
                    <?php 
                    $categorias = Categoria::listarCategorias();
                    foreach($categorias as $key => $categoria){ ?>
                        <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nome_categoria']; ?></option>
                    <?php } ?>
                </select>
                <label for="categoria">Categoria</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="perfil" name="perfil" aria-label="Floating label select example">
                    <option value="0" selected >Selecione</option>
                    <option value="1">Visualizador</option>
                    <option value="2">Operador</option>
                </select>
                <label for="perfil">Perfil</label>
            </div>
            <div class="submit-login">
                <input class="btn btn-success" type="submit" value="Cadastrar" name="acao">
            </div>
        </form>
    </div>
</div>