<?php
/* @var $this ComentarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comentarios',
);

$this->menu=array(
	array('label'=>'Create Comentario', 'url'=>array('create')),
	array('label'=>'Manage Comentario', 'url'=>array('admin')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
