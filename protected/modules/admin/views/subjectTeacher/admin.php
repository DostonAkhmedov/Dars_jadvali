<?php
/* @var $this SubjectTeacherController */
/* @var $model SubjectTeacher */

$this->breadcrumbs=array(
	'Subject Teachers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SubjectTeacher', 'url'=>array('index')),
	array('label'=>'Create SubjectTeacher', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#subject-teacher-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Subject Teachers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subject-teacher-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id'=>[
			'name'=>'id',
			'htmlOptions'=>['width'=>30],
		],
		'subject_id'=>[
			'name'=>'subject_id',
			'value'=>'$data->subject->name',
			'filter'=>Subject::subjects(),
		],
		'teacher_id'=>[
			'name'=>'teacher_id',
			'value'=>'$data->teacher->fio',
			'filter'=>Teacher::teachers(),
		],
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
