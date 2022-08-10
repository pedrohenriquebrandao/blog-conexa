<?php
/* @var $this ComentarioController */
/* @var $data Comentario */
?>
<div class="card col-6 pt-2 px-2 mb-4 bg-light" style="margin: 0 auto;">
	<div class="text-decoration-none">
		<?php echo $data->getRelated('usuarios')->username ?>
		<?php 
			if(Yii::app()->user->id == $data->usuario_id){
				echo CHtml::link('<i class="fa fa-trash-o" aria-hidden="true"></i> Excluir','#', array('submit'=>array('comentario/delete','id'=>$data->comentario_id),'confirm'=>'Tem certeza que deseja excluir este comentário?', 'class' => 'badge border bg-danger border-danger float-right text-decoration-none excluir-comentario')); 
			}
		?>
	</div>
	<div class="pb-4" style="font-size: 14px;color:rgb(104, 101, 101)">
		<?php 
			$comentario = new DateTime($data->data_comentario);
			$now = new DateTime();
			
			$resultado = $comentario->diff($now);
			
			if($resultado->format('%d') == 0)
				print_r($resultado->format('Hoje'));
			else if ($resultado->format('%d') == 1)
				print_r($resultado->format('Há %d dia'));
			else if ($resultado->format('%d') > 1 && $resultado->format('%d') <= 30)
				print_r($resultado->format('Há %d dias'));
		?>
	</div>

	<div class="pb-2" style="font-size: 18px;">
		<?php echo CHtml::encode($data->texto); ?>
	</div>
</div>

<script>
	
</script>
