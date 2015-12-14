<?php
/* @var $this DirectionController */
/* @var $model Direction */

$this->breadcrumbs=array(
	'Directions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Direction', 'url'=>array('index')),
	array('label'=>'Create Direction', 'url'=>array('create')),
	array('label'=>'View Direction', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Direction', 'url'=>array('admin')),
);
?>

<h1>Update Direction <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>