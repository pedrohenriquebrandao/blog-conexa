<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Fazer um post',
);

$this->menu=array(
	array('label'=>'Listar posts', 'url'=>array('index')),
	array('label'=>'Gerenciar posts', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>