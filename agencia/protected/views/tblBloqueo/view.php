<?php
/* @var $this TblBloqueoController */
/* @var $model TblBloqueo */

$this->breadcrumbs=array(
	'Tbl Bloqueos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblBloqueo', 'url'=>array('index')),
	array('label'=>'Create TblBloqueo', 'url'=>array('create')),
	array('label'=>'Update TblBloqueo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblBloqueo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblBloqueo', 'url'=>array('admin')),
);
?>

<h1>View TblBloqueo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'activity_id',
		'status',
		'price',
		'date',
	),
)); ?>
