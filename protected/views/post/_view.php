<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd/MM/yyy", strtotime($data->data_post))); ?>
	<br />

	Por <i> <?php echo CHtml::encode($data->autor); ?> </i>
	<br />
	<br />

	<h2><?php echo CHtml::encode($data->titulo); ?></h2>

	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<br />
	<hr>
</div>