<?php
/* @var $this TblBloqueoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Bloqueos',
);

$this->menu=array(
	array('label'=>'Create TblBloqueo', 'url'=>array('create')),
	array('label'=>'Manage TblBloqueo', 'url'=>array('admin')),
);
?>

<h1>Tbl Bloqueos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
