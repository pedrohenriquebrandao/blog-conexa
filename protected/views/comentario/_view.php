<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
?>
<div class="card col-6 pt-2 px-2 mb-4" style="margin: 0 auto;">
	<div class="pb-4" style="font-size: 14px;color:rgb(104, 101, 101)">
		<?php 
			$now = time(); // or your date as well
			$comentario = strtotime($data->data_comentario);
			$diff = $now - $comentario;
			
			$anos = floor($diff / (365*60*60*24));
			$meses = floor(($diff - $anos * 365*60*60*24) / (30*60*60*24));
			$dias = floor(($diff - $anos * 365*60*60*24 - $meses*30*60*60*24)/ (60*60*24));

			if($dias < 1)
				echo 'Hoje';
			else if($dias == 1) {
				echo $dias . ' dia atrás';
			} else {
				echo $dias . ' dias atrás';
			}
		?>
	</div>

	<div class="pb-2" style="font-size: 18px;">
		<?php echo CHtml::encode($data->texto); ?>
	</div>

	<div class="pb-2">
		<div  class="d-inline">
			<?php echo CHtml::ajaxLink('<i class="fa fa-thumbs-o-up text-dark" aria-hidden="true"></i>', array('comentario/curtida&id='.$data->comentario_id));?>
		</div>
		<div class="d-inline" id="curtidas">
			<?php echo $data->curtidas ?>
		</div>	
	</div>
</div>
