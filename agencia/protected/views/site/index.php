<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- Jumbotron Header -->
<header class="jumbotron my-4">
  <h1 class="display-3">Bienvenido!</h1>
  <p class="lead">¿Tienes un grupo de amigos con los que siempre haces planes y a la hora de pagar os volveis locos? Prueba nuestra App para tener y administrar un bote en comun.</p>
  <?php if(Yii::app()->user->isGuest) echo '<a href="#" class="btn btn-primary btn-lg">Registrarse!</a>'?>
</header>
	
<!--<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>-->