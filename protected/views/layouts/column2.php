<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div>
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>

	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>

<?php $this->endContent(); ?>