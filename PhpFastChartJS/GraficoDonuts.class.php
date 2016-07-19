<?php

include_once 'grafico.class.php';

class GraficoDonuts extends Grafico{

	private $dados, $rotulos;
	
	public function __construct($rotulos, $dados){
		$this->dados = $dados;
		$this->rotulos = $rotulos;
	}
	
	public function graficarDonuts(){
		
		$rCores = array("#99CC99", "#99CCCC", "#46BFBD", "#0099FF", "#9999CC", "#663366", "#990066", "#000033");
		?>
			
		<div class="box-chart">
		            <canvas id="GraficoDonut" style="width:100%;"></canvas>
		            <script type="text/javascript">
		                var options = {
		                    responsive:true,
		                    scaleShowLabels: true,
		                    tooltipYPadding: 50,
		                    tooltipXPadding: 50                     
		                };
							
		                var data = [ 
		                
						<?php 						
						for($i = 0; $i < count($this->dados); $i++){
						?>
		                    {
		                        value: <?php echo $this->dados[$i]; ?>, 
				                color: "<?php echo $rCores[$i]; ?>",
		                        highlight: "<?php echo $rCores[$i]; ?>",
		                        label: "<?php echo $this->rotulos[$i]; ?>"
		                    }
		                <?php if($i != count($this->dados)-1){ echo ','; } } ?>

		                ]; 

		                console.log(data);

						
		                
		                window.onload = function(){
		
		                    var ctx = document.getElementById("GraficoDonut").getContext("2d");
		                    var PizzaChart = new Chart(ctx).Doughnut(data, options);
		                }  
		            </script>    
			</div>
		<?php 
	}
}