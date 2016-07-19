<?php
include '../PhpFastChartJS/GraficoDonuts.class.php';
?>

<html>
    <head>
        <title>Gráfico Donuts</title>
    </head>
    <body>
        <div style='margin-left: 25%; width: 50%'>
            <?php     
            $rotulos = ['Fogo', 'Água', 'Terra', 'Ar'];
            $dados = [60, 30, 30, 10];

            $grafico = new GraficoDonuts($rotulos, $dados);
            $grafico->graficarDonuts();
            ?>
        </div>
        <script src="js/chartjs/chart.min.js"></script>
    </body>
</html>



