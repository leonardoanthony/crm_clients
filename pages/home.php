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
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
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