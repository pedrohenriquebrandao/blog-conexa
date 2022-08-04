<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="card mt-3">
	<div class="card-body">
		<?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd/MM/yyy", strtotime($data->data_post))); ?>
		<br />

		Por <i> <?php echo CHtml::encode($data->autor); ?> </i>
		<br />
		<br />

		<h2><?php echo CHtml::encode($data->titulo, array('class' => 'card-title')); ?></h2>

		<?php
			$string = strip_tags($data->texto);
			if (strlen($string) > 500) {
			
				// truncate string
				$stringCut = substr($string, 0, 400);
				$endPoint = strrpos($stringCut, ' ');
			
				//if the string doesn't contain any space then it will cut without word basis.
				$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
				$string .= '...';
			}

			echo CHtml::encode($string, array('class' => 'card-text')); 
		?>
		<br />

		<?php echo CHtml::link('Continuar lendo', 'index.php?r=post/view&id='.$data->post_id.'', array('class' => 'btn btn-sm btn-primary mt-3')); ?>
		
	</div>
</div>