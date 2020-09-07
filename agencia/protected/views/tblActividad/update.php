<?php
/* @var $this TblActividadController */
/* @var $model TblActividad */

$this->breadcrumbs=array(
	'Tbl Actividads'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblActividad', 'url'=>array('index')),
	array('label'=>'Create TblActividad', 'url'=>array('create')),
	array('label'=>'View TblActividad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblActividad', 'url'=>array('admin')),
);
?>

<h1>Update TblActividad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>