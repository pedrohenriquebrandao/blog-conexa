<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1 class="text-center">Cadastro de novo usuário</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>