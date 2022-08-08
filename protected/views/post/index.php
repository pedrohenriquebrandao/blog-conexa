<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Últimas Publicações',
);

$this->menu=array(
	
);

?>
<div class="row">
	<div class="col-6 mb-4">
		<h1 class="display-5">Últimas publicações</h1>
	</div>
	<div class="col-md-2 ms-auto">
	<?php 
		if(!Yii::app()->user->isGuest){
			echo CHtml::link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Publicar', 'index.php?r=post/create', array('class' => 'btn btn-lg btn-success')); 
		}
	?>
	</div>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array(
        'categoria_id' => 'Categorias',
		'data_post' => 'Data de publicação'
    ),
)); ?>
