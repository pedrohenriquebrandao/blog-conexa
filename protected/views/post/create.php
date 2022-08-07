<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Fazer um post',
);

$this->menu=array(
	
);
?>

<div class="pt-4">
  <h1 class="display-5">Faça uma publicação</h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>