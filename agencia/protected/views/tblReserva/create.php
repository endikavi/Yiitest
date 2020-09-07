<?php
/* @var $this TblReservaController */
/* @var $model TblReserva */

$this->breadcrumbs=array(
	'Tbl Reservas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblReserva', 'url'=>array('index')),
	array('label'=>'Manage TblReserva', 'url'=>array('admin')),
);
?>

<h1>Create TblReserva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>