<?php
/* @var $this DgstController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dgsts',
);

$this->menu=array(
	array('label'=>'Create Dgst', 'url'=>array('create')),
	array('label'=>'Manage Dgst', 'url'=>array('admin')),
);
?>

<h1>Dgsts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
