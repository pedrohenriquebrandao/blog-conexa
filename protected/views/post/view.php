<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Últimas Publicações'=>array('index'),
	$model->post_id,
);

$this->menu=array(
	array('label'=>'Atualizar', 'url'=>array('update', 'id'=>$model->post_id)),
	array(
		'label'=>'Excluir', 
		'url'=>'#', 
		'linkOptions'=>array('submit'=>array('delete','id'=>$model->post_id),
		'confirm'=>'Tem certeza que deseja excluir essa publicação?'),
		)
);
?>	


<div class="row">
	<div class="col-4">
		<?php echo CHtml::link('<i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar', 'index.php?r=post/index', array('class' => 'btn btn-primary')); ?>
	</div>
	<div class="col-md-2 ms-auto">
		<?php 
			if(!Yii::app()->user->isGuest){
				echo CHtml::link('Editar', 'index.php?r=post/update&id='.$model->post_id.'', array('class' => 'btn btn-sm btn-info')); 
			}
		?>
		
		<?php 
			if(!Yii::app()->user->isGuest){
				echo CHtml::link('Excluir','#', array('submit'=>array('post/delete','id'=>$model->post_id),'confirm'=>'Tem certeza que deseja excluir a publicação?', 'class' => 'btn btn-sm btn-danger')); 
			}
		?>
	</div>
</div>
<div class="text-center">
	
	<div class="h5 pb-4">
		<span class="badge bg-primary">
			<?php echo CHtml::encode($model->getRelated('categoria_id')->assunto); ?>
		</span>
	</div>

	<div class="pb-4 display-4">
		<?php echo CHtml::encode($model->titulo); ?>
	</div>

	<i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
	<div class="h5 pt-2">
		<i><?php echo CHtml::encode($model->autor); ?> </i> 
	</div>

	<div class="pb-4" style="text-transform:capitalize">
		<?php echo CHtml::encode(Yii::app()->dateFormatter->format("MMM d, yyyy", strtotime($model->data_post))); ?>
	</div>
	
	<div class="h4">
		<?php echo CHtml::encode($model->texto); ?>
	</div>
	<br />
</div>

<div>
	<?php 
		$newComentario = new Comentario();
		$newComentario->post_id = $model->post_id;

		if(!Yii::app()->user->isGuest) {
			$this->renderPartial('//comentario/_form', array("model" => $newComentario));
		} else {
			$this->renderPartial('//comentario/_form', array("model" => $newComentario));
		}
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