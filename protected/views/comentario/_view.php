<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
?>
<div class="card col-6 pt-2 px-2 mb-4" style="margin: 0 auto;">
	<div class="pb-4" style="font-size: 14px;">
		<i>Em</i> <?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd/mm/yyyy", strtotime($data->data_comentario))); ?>
		<i>às</i> <?php echo CHtml::encode(Yii::app()->dateFormatter->format("HH:mm", strtotime($data->data_comentario))); ?>
	</div>

	<div class="pb-2" style="font-size: 18px;">
		<?php echo CHtml::encode($data->texto); ?>
	</div>
</div>