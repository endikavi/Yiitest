<?php
/* @var $this TblReservaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Reservas',
);

$this->menu=array(
	array('label'=>'Create TblReserva', 'url'=>array('create')),
	array('label'=>'Manage TblReserva', 'url'=>array('admin')),
);
?>

<h1>Tbl Reservas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
