<?php
/* @var $this SubjectTeacherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subject Teachers',
);

$this->menu=array(
	array('label'=>'Create SubjectTeacher', 'url'=>array('create')),
	array('label'=>'Manage SubjectTeacher', 'url'=>array('admin')),
);
?>

<h1>Subject Teachers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
