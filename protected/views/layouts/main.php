<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="pt-BR">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,200;0,300;0,400;1,300&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="shortcut icon" href="../../images/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="../../images/favicon.ico" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="font-family: 'Noto Sans', sans-serif;">
	<div class="navbar navbar-expand-lg navbar-light p-4" style="background-color: #f1f1f1">
		<div class="px-5">
			<?php echo CHtml::link('<img src="../../images/conexa.png" alt="Logo">', 'index.php?r=post/index', array('class' => 'btn')); ?>
		</div>
		<div class="px-5 ms-auto mb-2 mb-lg-0">
			<?php echo CHtml::link('Página Inicial', 'index.php?r=post/index', array('class' => 'btn')); ?>
			<?php 
			if(Yii::app()->user->isGuest){
				echo CHtml::link('<i class="fa fa-sign-in" aria-hidden="true"></i> Entrar', 'index.php?r=site/login', array('class' => 'btn btn-primary')); 
			} else {
				echo CHtml::link('<i class="fa fa-sign-out" aria-hidden="true"></i> Sair', 'index.php?r=site/logout', array('class' => 'btn btn-primary')); 
			}
			?>
		</div>
		</div><!-- header -->

		<!--<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Últimas publicações', 'url'=>array('/post/index')),
					array('label'=>'Publicar', 'url'=>array('/post/create')),
				),
			));
			?>
			
		</div>
		
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?>
		<?php endif?> -->
	</div>
	<div class="container">
		<div class="container pt-4 text-end">
		<?php
			if(isset(Yii::app()->user->username)) {
				echo 'Logado como:'.'<b>&nbsp;'.Yii::app()->user->username.'</b>';
			}
		?>
		</div>
		
		<?php echo $content; ?>

		<div class="clear"></div>
	</div><!-- page -->

	<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
  <small>Copyright &copy; <?php echo date('Y'); ?> by Conexa</small>
  </div>
  <!-- Copyright -->

</footer>

	
	
</body>
</html>
