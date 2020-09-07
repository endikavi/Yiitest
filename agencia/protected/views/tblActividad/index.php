<?php
/* @var $this TblActividadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Actividads',
);

$this->menu=array(
	array('label'=>'Create TblActividad', 'url'=>array('create')),
	array('label'=>'Manage TblActividad', 'url'=>array('admin')),
);
?>

<h1>Tbl Actividads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
