<div class="container">
    <div class="box-init">
        <h3>Cadastrar Clientes</h3>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Nome Completo">
                <label for="nome_completo">Nome Completo</label>
            </div>
            
            <div class="form-floating mb-3">
                <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example">
                    <option selected disabled>Selecione</option>
                </select>
                <label for="categoria">Categoria</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="perfil" name="perfil" aria-label="Floating label select example">
                    <option selected disabled>Selecione</option>
                    <option value="0">Visualizador</option>
                    <option value="1">Operador</option>
                </select>
                <label for="perfil">Perfil</label>
            </div>
            <div class="submit-login">
                <input class="btn btn-success" type="submit" value="Cadastrar" name="acao">
            </div>
        </form>
    </div>
</div>