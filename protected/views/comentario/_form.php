<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>
<hr>
<div class="form col-lg-6 pt-4 pb-4" style="margin: 0 auto;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'action'=>'index.php?r=comentario/create',
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->textArea($model,'texto',array('rows'=>3, 'class' => 'form-control', 'placeholder' => 'Escreva um comentário...')); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div style="display: none;">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->textField($model,'post_id',array('size'=>10,'maxlength'=>10, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'post_id'); ?>
	</div>

	<div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Comentar' : 'Save', array('class' => 'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->