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
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="shortcut icon" href="../../images/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="../../images/favicon.ico" />

	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="font-family: 'Lato', sans-serif;">
	<div class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="p-2">
			<img src="../../images/conexa.png" alt="Logo">
		</div>
		</div><!-- header -->

		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Últimas publicações', 'url'=>array('/post/index')),
					array('label'=>'Fazer um post', 'url'=>array('/post/create')),
				),
			));
			?>
		</div><!-- mainmenu -->
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>

			

	<div class="container">
		
		<?php echo $content; ?>

		<div class="clear"></div>
	</div><!-- page -->
			
	<div class="pt-5">
		<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
			<div class="container text-center">
				<small>Copyright &copy; <?php echo date('Y'); ?> by Conexa</small>
			</div>
		</footer>
	</div>

</body>
</html>
