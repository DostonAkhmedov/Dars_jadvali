<?php
/* @var $this DgstController */
/* @var $model Dgst */

$this->breadcrumbs=array(
	'Dgsts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dgst', 'url'=>array('index')),
	array('label'=>'Create Dgst', 'url'=>array('create')),
	array('label'=>'Update Dgst', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dgst', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dgst', 'url'=>array('admin')),
);
?>

<h1>View Dgst #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'day_id',
		'group_id',
		'subject_id',
		'teacher_id',
		'para',
	),
)); ?>
