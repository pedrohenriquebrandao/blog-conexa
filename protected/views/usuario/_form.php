<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<div class="form pt-4 col-6" style="margin: 0 auto;">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'usuario-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

		<div class="row">
			<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>255, 'class' => 'form-control', 'placeholder' => 'Nome')); ?>
			<?php echo $form->error($model,'nome'); ?>
		</div>

		<div class="row">
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255, 'class' => 'form-control', 'placeholder' => 'Usuário')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255, 'class' => 'form-control', 'placeholder' => 'Senha')); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', array('class' => 'btn btn-dark')); ?>
		</div>

	<?php $this->endWidget(); ?>
</div>
</div><!-- form -->