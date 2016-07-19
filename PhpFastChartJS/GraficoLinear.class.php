<?php

include_once 'grafico.class.php';

class GraficoLinear extends Grafico{

	private $rotulos, $dados, $linhas;
	
	public function __construct($rotulos, $dados, $linhas){
		$this->rotulos = $rotulos;
		$this->dados = $dados;
		$this->linhas = $linhas;
	}
	
	public function graficarLinhas(){
		$rCores = array('220,220,220', '51,102,255', '51, 153, 102', '50,50,50');
		$i = 0;
                $rotulos = "";
                $dados = "";
                
                //////////////////////////////////////////////////////
                foreach($this->rotulos as $rotulo){
                    if($rotulos){
                        $rotulos .= ', "'.$rotulo.'"';
                    }else{
                        $rotulos .= '"'.$rotulo.'"';
                    }
                }
                //////////////////////////////////////////////////////

                //////////////////////////////////////////////////////
                foreach($this->dados[$i] as $dado){
                    if(!is_int($dado)){
                        return 'ERRO: UM DADO NÃO É INTEIRO: '.$dado;
                    }
                    if($dados){
                        $dados .= ', "'.$dado.'"';
                    }else{
                        $dados .= '"'.$dado.'"';
                    }
                }
                //////////////////////////////////////////////////////
                
		?>
			
		        <div class="box-chart">
		            <canvas id="GraficoLine" style="width:100%;"></canvas>
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
		   		                <?php
								foreach($this->linhas as $linha){?>
		                        {
		                            label: "<?php echo $linha; ?>",
		                            fillColor: "rgba(<?php echo $rCores[$i] ?>,0.2)",
		                            strokeColor: "rgba(<?php echo $rCores[$i] ?>,1)",
		                            pointColor: "rgba(<?php echo $rCores[$i] ?>,1)",
		                            pointStrokeColor: "#fff",
		                            pointHighlightFill: "#fff",
		                            pointHighlightStroke: "rgba(<?php echo $rCores[$i] ?>,1)",
		                            data: [<?php echo $dados; ?>]
		                        }
		                        <?php $i++; if($i <= count($dados)-1){ echo ','; }}?>
		                    ]
		                };                
		                
		                window.onload = function(){
		                    var ctx = document.getElementById("GraficoLine").getContext("2d");
		                    var LineChart = new Chart(ctx).Line(data, options);
		                }           
		
		            </script>								
		     	</div>
		<?php
	}
}