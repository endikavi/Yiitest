<?php
/* @var $this TblBloqueoController */
/* @var $model TblBloqueo */

$this->breadcrumbs=array(
	'Tbl Bloqueos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblBloqueo', 'url'=>array('index')),
	array('label'=>'Manage TblBloqueo', 'url'=>array('admin')),
);
?>

<h1>Create TblBloqueo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>