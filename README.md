# phpFastChartJS
<p> PHP Fast ChartJS é um framework para auxiliar programadores PHP no processo de desenvolvimento de Gráficos HTML5/JavaScript (ChartJS) </p>


<p align="center">
  <img width="200" src="http://ncneletro.com.br/img/5.png" alt="PHP Fast Chart JS"/>
</p>

<hr>
O phpFastChartJS administra o processo do framework <a href="https://chartjs.org/">ChartJS</a> para criar um novo gráfico simplificando o uso em aplicações PHP.

<hr>

## Exemplo

```php
<?php

include '../PhpFastChartJS/GraficoDonuts.class.php'; 
//include a classe do gráfico desejada
?>
<html>
  <body>
    <?php
    $rotulos = ['Fogo', 'Água', 'Terra', 'Ar'];
    //rotulos = Rótulos do Gráfico
    
    $dados = [60, 30, 30, 10];
    //dados = Dados de cada rótulo, respectivamente
    
    $grafico = new GraficoDonuts($rotulos, $dados);
    $grafico->graficarDonuts();
    ?>
    <script src="js/chartjs/chart.min.js"> 
    <!-- carrega o chart.min.js -->
  </body>
</html>
```

<p align="center">
  <img src="http://ncneletro.com.br/img/upp.png" alt="ScreenShot"/>
</p>


## Autor

[@LuccaZii](https://github.com/luccazii)  :))

#### Nota

Projeto em fase de desenvolvimento
