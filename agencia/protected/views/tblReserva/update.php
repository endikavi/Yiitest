<?php
/* @var $this TblReservaController */
/* @var $model TblReserva */

$this->breadcrumbs=array(
	'Tbl Reservas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblReserva', 'url'=>array('index')),
	array('label'=>'Create TblReserva', 'url'=>array('create')),
	array('label'=>'View TblReserva', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblReserva', 'url'=>array('admin')),
);
?>

<h1>Update TblReserva <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>