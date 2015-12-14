<?php
/* @var $this SubjectTeacherController */
/* @var $model SubjectTeacher */

$this->breadcrumbs=array(
	'Subject Teachers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubjectTeacher', 'url'=>array('index')),
	array('label'=>'Create SubjectTeacher', 'url'=>array('create')),
	array('label'=>'View SubjectTeacher', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubjectTeacher', 'url'=>array('admin')),
);
?>

<h1>Update SubjectTeacher <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>