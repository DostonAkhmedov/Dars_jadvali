<?php
/* @var $this DirectionController */
/* @var $model Direction */

$this->breadcrumbs=array(
	'Directions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Direction', 'url'=>array('index')),
	array('label'=>'Create Direction', 'url'=>array('create')),
	array('label'=>'Update Direction', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Direction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Direction', 'url'=>array('admin')),
);
?>

<h1>View Direction #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'faculty_id',
	),
)); ?>
