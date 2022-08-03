<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
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

<b><?php echo CHtml::encode($model->getAttributeLabel('assunto')); ?>:</b>
<?php echo CHtml::encode($model->getRelated('categoria_id')->assunto); ?>
<br /><br />

<?php echo CHtml::encode(Yii::app()->dateFormatter->format("dd/MM/yyy", strtotime($model->data_post))); ?>
<br />

Por <i> <?php echo CHtml::encode($model->autor); ?> </i>
<br />
<br />

<h2><?php echo CHtml::encode($model->titulo); ?></h2>

<?php echo CHtml::encode($model->texto); ?>
<br />
