<?php
/* @var $this TblGrupoController */
/* @var $model TblGrupo */

$this->breadcrumbs=array(
	'Tbl Grupos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblGrupo', 'url'=>array('index')),
	array('label'=>'Create TblGrupo', 'url'=>array('create')),
	array('label'=>'View TblGrupo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblGrupo', 'url'=>array('admin')),
);
?>

<h1>Update TblGrupo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>