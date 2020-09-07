<?php
/* @var $this TblActividadController */
/* @var $model TblActividad */

$this->breadcrumbs=array(
	'Tbl Actividads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblActividad', 'url'=>array('index')),
	array('label'=>'Manage TblActividad', 'url'=>array('admin')),
);
?>

<h1>Create TblActividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>