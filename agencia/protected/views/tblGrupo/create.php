<?php
/* @var $this TblGrupoController */
/* @var $model TblGrupo */

$this->breadcrumbs=array(
	'Tbl Grupos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblGrupo', 'url'=>array('index')),
	array('label'=>'Manage TblGrupo', 'url'=>array('admin')),
);
?>

<h1>Create TblGrupo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>