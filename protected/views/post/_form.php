<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form form-group">

<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
</script>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'categoria_id'); ?>
		<?php $opts = CHtml::listData(Categoria::model()->findAll(),'categoria_id','assunto'); ?>
		<?php echo $form->dropDownList($model, 'categoria_id', $opts, array('class' => 'form-select')) ?>
		<?php echo $form->error($model,'categoria_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50, 'class' => 'form-control', 'placeholder' => 'Escreva seu texto...')); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Publicar' : 'Salvar', array('class' => 'btn btn-success')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->