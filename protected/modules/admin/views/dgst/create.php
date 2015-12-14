<?php
/* @var $this DgstController */
/* @var $model Dgst */

$this->breadcrumbs=array(
	'Dgsts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dgst', 'url'=>array('index')),
	array('label'=>'Manage Dgst', 'url'=>array('admin')),
);
?>

<h1>Create Dgst</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>