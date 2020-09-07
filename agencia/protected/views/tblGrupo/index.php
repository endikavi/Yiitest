<?php
/* @var $this TblGrupoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Grupos',
);

$this->menu=array(
	array('label'=>'Create TblGrupo', 'url'=>array('create')),
	array('label'=>'Manage TblGrupo', 'url'=>array('admin')),
);
?>

<h1>Tbl Grupos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
