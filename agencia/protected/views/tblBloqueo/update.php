<?php
/* @var $this TblBloqueoController */
/* @var $model TblBloqueo */

$this->breadcrumbs=array(
	'Tbl Bloqueos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblBloqueo', 'url'=>array('index')),
	array('label'=>'Create TblBloqueo', 'url'=>array('create')),
	array('label'=>'View TblBloqueo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblBloqueo', 'url'=>array('admin')),
);
?>

<h1>Update TblBloqueo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>