<?php
/* @var $this DgstController */
/* @var $model Dgst */

$this->breadcrumbs=array(
	'Dgsts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dgst', 'url'=>array('index')),
	array('label'=>'Create Dgst', 'url'=>array('create')),
	array('label'=>'View Dgst', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dgst', 'url'=>array('admin')),
);
?>

<h1>Update Dgst <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>