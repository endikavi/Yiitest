<?php
/* @var $this TblActividadController */
/* @var $model TblActividad */

$this->breadcrumbs=array(
	'Tbl Actividads'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblActividad', 'url'=>array('index')),
	array('label'=>'Create TblActividad', 'url'=>array('create')),
	array('label'=>'Update TblActividad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblActividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblActividad', 'url'=>array('admin')),
);
?>

<h1>View TblActividad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'price',
		'stock',
		'description',
		'image',
		'date',
	),
)); ?>
