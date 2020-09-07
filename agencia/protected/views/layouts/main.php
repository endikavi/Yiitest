<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/heroic-features.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
		<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array('class'=>'navbar-nav ml-auto'),
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'), 'itemOptions'=>array('class'=>'nav-item'),'linkOptions'=>array('class'=>'nav-link')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'), 'itemOptions'=>array('class'=>'nav-item'),'linkOptions'=>array('class'=>'nav-link')),
				array('label'=>'Contacto', 'url'=>array('/site/contact'), 'itemOptions'=>array('class'=>'nav-item'),'linkOptions'=>array('class'=>'nav-link')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'nav-item'),'linkOptions'=>array('class'=>'nav-link')),
				array('label'=>'Register', 'url'=>array('/site/register'), 'visible'=>Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'nav-item'),'linkOptions'=>array('class'=>'nav-link')),
				array('label'=>'Grupos', 'url'=>array('/site/grupos'), 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'nav-item'),'linkOptions'=>array('class'=>'nav-link')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'nav-item'),'linkOptions'=>array('class'=>'nav-link'))
			),
		)); ?>
      </div>
    </div>
</nav>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->

<!-- Footer -->
<footer class="py-1 bg-dark">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; <?php echo date('Y'); ?> Comparte.<br/>
		All Rights Reserved.<br/></p>
    </div>
    <!-- /.container -->
</footer>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.bundle.min.js"></script>

</body>
</html>
