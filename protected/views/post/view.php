<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Últimas Publicações'=>array('index'),
	$model->post_id,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->post_id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->post_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>	

<div class="text-center text-justify">
	
	<div class="h5">
		<?php echo CHtml::encode($model->getRelated('categoria_id')->assunto); ?>	
	</div>
	
	<br /><br />

	<h1 class="pb-4">
		<?php echo CHtml::encode($model->titulo); ?>
	</h1>

	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
	<b> <?php echo CHtml::encode($model->autor); ?> </b>
	<br />

	<div class="pb-4" style="text-transform:capitalize">
		<?php echo CHtml::encode(Yii::app()->dateFormatter->format("MMM d, yyyy", strtotime($model->data_post))); ?>
		<br />
	</div>
	
	<?php echo CHtml::encode($model->texto); ?>
	<br />
</div>

