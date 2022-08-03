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

		<h2><?php echo CHtml::encode($data->titulo, array('class', 'card-title')); ?></h2>

		<?php echo CHtml::encode($data->texto, array('class', 'card-text')); ?>
		<br />
	</div>
</div>