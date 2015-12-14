<?php
/* @var $this SubjectTeacherController */
/* @var $model SubjectTeacher */

$this->breadcrumbs=array(
	'Subject Teachers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubjectTeacher', 'url'=>array('index')),
	array('label'=>'Manage SubjectTeacher', 'url'=>array('admin')),
);
?>

<h1>Create SubjectTeacher</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>