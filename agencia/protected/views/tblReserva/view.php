<?php
/* @var $this TblReservaController */
/* @var $model TblReserva */

$this->breadcrumbs=array(
	'Tbl Reservas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblReserva', 'url'=>array('index')),
	array('label'=>'Create TblReserva', 'url'=>array('create')),
	array('label'=>'Update TblReserva', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblReserva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblReserva', 'url'=>array('admin')),
);
?>

<h1>View TblReserva #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bloqueo_id',
		'group_id',
		'status',
		'date',
	),
)); ?>
