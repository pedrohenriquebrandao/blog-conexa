<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Entrar';
$this->breadcrumbs=array(
	'Entrar',
);
?>

<h1 class="text-center">Entrar</h1>

<div class="form pt-4 col-6" style="margin: 0 auto;">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder' => 'Usuário')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->passwordField($model,'password', array('class' => 'form-control', 'placeholder' => 'Senha', 'value'=>'')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Entrar', array('class' => 'btn btn-success')); ?>
		<?php echo CHtml::link('Criar uma conta', 'index.php?r=usuario/create' , array('class' => 'btn btn-dark')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
