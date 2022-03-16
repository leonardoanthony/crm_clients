<?php

if (isset($_GET['loggout'])) {
    Painel::loggout();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Clients</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo INCLUDE_PATH; ?>">CRMClients</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown" <?php Painel::permisssaoMenu($_SESSION['perfil']);?>>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH; ?>cadastrar-usuarios">Cadastrar Usuários</a></li>
                            <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH; ?>cadastrar-categorias">Cadastrar Categorias</a></li>
                            <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH; ?>cadastrar-clientes">Cadastrar Clientes</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH; ?>listar-usuarios">Listar Usuários</a></li>
                            <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH; ?>listar-categorias">Listar Categorias</a></li>
                            <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH; ?>listar-clientes">Listar Clientes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['nome']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH; ?>?loggout">loggout</a></li>
                        </ul>
                    </li>
                </ul>
            
                
            </div>
        </div>
    </nav>

    <div class="main-area">

        <?php Painel::loadPage(); ?>

    </div>

    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
    
</body>

</html>