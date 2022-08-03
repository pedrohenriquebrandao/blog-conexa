<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->post_id), array('view', 'id'=>$data->post_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_post')); ?>:</b>
	<?php echo CHtml::encode($data->data_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autor')); ?>:</b>
	<?php echo CHtml::encode($data->autor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_id')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_id); ?>
	<br />


</div>