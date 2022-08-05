<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Últimas Publicações',
);

$this->menu=array(
	
);
?>

<div class="pt-4">
  <h1 class="display-5">Últimas publicações</h1>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
