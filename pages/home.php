
<?php

    $categorias = Categoria::listarCategorias();
    $gratis = Cliente::listarClientesPorCategoria(1);
    $normal = Cliente::listarClientesPorCategoria(2);
    $premium = Cliente::listarClientesPorCategoria(3);


    

?>

<div class="container">

    <div class="box-init">
        <h4>Bem-vindo <?php echo $_SESSION['nome']; ?></h2>
            <p>Este sistema tem como função cadastrar os clientes no sistema Força do Hábito</p>
    </div>
    <div class="dashbord">
        <canvas id="myChart" width="200" height="200"></canvas>
    </div>

    <script>
        const data = {
            labels: [
                <?php
                    
                    foreach($categorias as $categoria){
                        echo "'".$categoria['nome_categoria']."',";
                    }
                    
                ?>
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [<?php echo count($gratis); ?>, <?php echo count($normal); ?>, <?php echo count($premium); ?>],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'pie',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</div>