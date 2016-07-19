<?php

include_once 'grafico.class.php';

class GraficoBarra extends Grafico{

	private $rotulos, $dados;
	
	public function __construct($rotulos, $dados){
		$this->rotulos = $rotulos;
		$this->dados = $dados;
		
	}
	
	public function graficarBarra(){
            /////////////////////////////////
            $rotulos = "";
            foreach($this->rotulos as $rotulo){
                if($rotulos){
                    $rotulos .= ', "'.$rotulo.'"';
                }else{
                    $rotulos .= '"'.$rotulo.'"';
                }
            }
            /////////////////////////////////
            $dados = "";
            foreach($this->dados as $dado){
                if(!is_int($dado)){
                    return 'ERRO: UM DADO NÃO É INTEIRO: '.$dado;
                }
                if($dados){
                    $dados .= ', "'.$dado.'"';
                }else{
                    $dados .= '"'.$dado.'"';
                }
            }
            /////////////////////////////////
		?>
			
		        <div class="box-chart">
		            <canvas id="GraficoBarra" style="width:100%;"></canvas>
		            <script type="text/javascript">                      
		                var options = {
		                    responsive:true,
		                    scaleShowLabels: true,
		                    tooltipYPadding: 50,
		                    tooltipXPadding: 50
		                };
		
		                var data = {
		                    labels: [<?php echo $rotulos; ?>],
		                    datasets: [
		                        {
		                            label: "Dados primários",
		                            fillColor: "rgba(220,220,220,0.5)",
		                            strokeColor: "rgba(220,220,220,0.8)",
		                            highlightFill: "rgba(220,220,220,0.75)",
		                            highlightStroke: "rgba(220,220,220,1)",
		                            data: [<?php echo $dados; ?>]
		                        }
		                    ]
		                };                
		                
		                window.onload = function(){
		                    var ctx = document.getElementById("GraficoBarra").getContext("2d");
		                    var BarChart = new Chart(ctx).Bar(data, options);
		                }           
		
		            </script>								
		     	</div>
		<?php
	}
}