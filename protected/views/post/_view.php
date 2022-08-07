<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="mt-4">
	<div class="card-body">

		<div class="h5">
			<span class="badge bg-primary">
				<?php echo CHtml::encode($data->getRelated('categoria_id')->assunto); ?>
			</span>
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
				if (strlen($string) > 200) {
				
					// truncate string
					$stringCut = substr($string, 0, 80);
					$endPoint = strrpos($stringCut, ' ');
				
					//if the string doesn't contain any space then it will cut without word basis.
					$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
					$string .= '...';
				}

				echo CHtml::encode($string, array('class' => 'card-text')); 
			?>
		</div>
	</div>
	<hr>
</div>