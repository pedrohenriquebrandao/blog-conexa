<?php
/* @var $this PostController */
/* @var $model Post */

$this->pageTitle=Yii::app()->name . ' - Criar publicação';

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Fazer um post',
);

$this->menu=array(
	
);
?>
<div>
	<?php echo CHtml::link('<i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar', 'index.php?r=post/index', array('class' => 'btn btn-primary')); ?>
</div>
<div class="pt-4">
  <h1 class="display-5">Faça uma publicação</h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>