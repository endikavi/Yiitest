<?php
/* @var $this TblGrupoController */
/* @var $model TblGrupo */

$this->breadcrumbs=array(
	'Tbl Grupos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblGrupo', 'url'=>array('index')),
	array('label'=>'Create TblGrupo', 'url'=>array('create')),
	array('label'=>'Update TblGrupo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblGrupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblGrupo', 'url'=>array('admin')),
);
?>

<h1>View TblGrupo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'image',
	),
)); ?>
