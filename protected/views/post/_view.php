<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('assunto')); ?>:</b>
	<?php echo CHtml::encode($data->getRelated('categoria_id')->assunto); ?>
	<br /><br />

	<?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd/MM/yyy", strtotime($data->data_post))); ?>
	<br />

	Por <i> <?php echo CHtml::encode($data->autor); ?> </i>
	<br />
	<br />

	<h2><?php echo CHtml::encode($data->titulo); ?></h2>

	<?php echo CHtml::encode($data->texto); ?>
	<br />

</div>