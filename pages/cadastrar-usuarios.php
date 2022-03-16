<div class="container">
    <div class="box-init">
        <h3>Cadastrar Usuário</h3>
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Nome Completo">
                <label for="nome_completo">Nome Completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="login" name="login"  placeholder="Login">
                <label for="login">Login</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                <label for="senha">Senha</label>
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