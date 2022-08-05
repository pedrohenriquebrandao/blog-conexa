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
);
?>	

<div class="ms-auto">
	<?php echo CHtml::link('<i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar', 'index.php?r=post/index', array('class' => 'btn btn-outline-dark')); ?>
</div>
<div class="text-center">
	
	<div class="h5 pb-4">
		<?php echo CHtml::encode($model->getRelated('categoria_id')->assunto); ?>	
	</div>

	<h1 class="pb-4">
		<?php echo CHtml::encode($model->titulo); ?>
	</h1>

	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
	<b> <?php echo CHtml::encode($model->autor); ?> </b>

	<div class="pb-4" style="text-transform:capitalize">
		<?php echo CHtml::encode(Yii::app()->dateFormatter->format("MMM d, yyyy", strtotime($model->data_post))); ?>
	</div>
	
	<div class="h5">
		<?php echo CHtml::encode($model->texto); ?>
	</div>
	<br />
</div>

<div>
	<?php 
		$newComentario = new Comentario();
		$newComentario->post_id = $model->post_id;
		$this->renderPartial('//comentario/_form', array("model" => $newComentario));
	?>
		<?php 
			if($comentarios) {
				foreach($comentarios as $comentario) {
					$this->renderPartial('//comentario/_view', array("data" => $comentario));
				}
			} else {
				echo "<div class='col-6 text-center alert alert-warning' style='margin: 0 auto;'>Ainda não existem comentários para esta publicação!</div>";
			}
		?>
</div>