<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="mt-4">
	<div class="card-body">

		<div class="h5">
		<?php 
			if($data->categoria_id == 1) {
				echo CHtml::link($data->getRelated('categorias')->assunto, 'index.php?r=post/filter&id='.$data->categoria_id.'', array('class' => 'badge bg-integracoes text-white rounded-pill text-decoration-none'));
			} 
			if($data->categoria_id == 2) {
				echo CHtml::link($data->getRelated('categorias')->assunto, 'index.php?r=post/filter&id='.$data->categoria_id.'', array('class' => 'badge bg-servicos text-white rounded-pill text-decoration-none'));
			} 
			if($data->categoria_id == 3) {
				echo CHtml::link($data->getRelated('categorias')->assunto, 'index.php?r=post/filter&id='.$data->categoria_id.'', array('class' => 'badge bg-financeiro text-white rounded-pill text-decoration-none'));
			} 
			if($data->categoria_id == 4) {
				echo CHtml::link($data->getRelated('categorias')->assunto, 'index.php?r=post/filter&id='.$data->categoria_id.'', array('class' => 'badge bg-agenda text-white rounded-pill text-decoration-none'));
			} 
			if($data->categoria_id == 5) {
				echo CHtml::link($data->getRelated('categorias')->assunto, 'index.php?r=post/filter&id='.$data->categoria_id.'', array('class' => 'badge bg-parceiros text-white rounded-pill text-decoration-none'));
			} 
			if($data->categoria_id == 6){
				echo CHtml::link($data->getRelated('categorias')->assunto, 'index.php?r=post/filter&id='.$data->categoria_id.'', array('class' => 'badge bg-outros text-white rounded-pill text-decoration-none'));
			}
		?>
		</div>
		<div class="pt-4 pb-2" style="text-transform:capitalize">
			<?php echo CHtml::encode(Yii::app()->dateFormatter->format("MMM d, yyyy", strtotime($data->data_post))); ?>
		</div>

		<i class="fa fa-user-circle fa-2x pb-2" aria-hidden="true"></i>
		<div class="h5">
			<i><?php echo CHtml::encode($data->autor); ?> </i> 
		</div>

		<?php echo CHtml::link($data->titulo, 'index.php?r=post/view&id='.$data->post_id.'', array('class' => 'card-title text-decoration-none post-link display-6')); ?>

		<div class="pt-4 h3 text-preview">
			<?php
				$string = strip_tags($data->texto);
				if (strlen($string) > 100) {
				
					// truncate string
					$stringCut = substr($string, 0, 80);
					$endPoint = strrpos($stringCut, ' ');
				
					//if the string doesn't contain any space then it will cut without word basis.
					$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
					$string .= '...';
				}

				echo $string; 
			?>
		</div>
	</div>
	<hr>
</div>