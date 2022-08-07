<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->post_id=>array('view','id'=>$model->post_id),
	'Editar',
);

$this->menu=array(
	
);
?>
<div>
	<?php echo CHtml::link('<i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar', 'index.php?r=post/view&id='.$model->post_id.'', array('class' => 'btn btn-primary')); ?>
</div>

<div class="pt-4">
  <h1 class="display-5">Editar publicação</h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>