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

<div class="pt-4">
  <h1 class="display-5">Editar publicação</h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>