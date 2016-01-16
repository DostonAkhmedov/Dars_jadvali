<?php
/* @var $this DgstController */
/* @var $model Dgst */

$this->breadcrumbs=array(
	'Dgsts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dgst', 'url'=>array('index')),
	array('label'=>'Create Dgst', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dgst-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dgsts</h1>

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
	'id'=>'dgst-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id'=>[
			'name'=>'id',
			'htmlOptions'=>['width'=>30],
		],
		'day_id'=>[
			'name'=>'day_id',
			'value'=>'$data->day->name',
			'filter'=>Day::days(),
		],
		'group_id'=>[
			'name'=>'group_id',
			'value'=>'$data->group->name',
			'filter'=>Group::groups(),
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
		'para'=>[
			'name'=>'para',
			'filter'=>Dgst::para(),
		],
		'megalka'=>[
			'name'=>'megalka',
			'filter'=>Dgst::megalka(),
		],
		'teacher2_id'=>[
			'name'=>'teacher2_id',
			'value'=>'$data->teacher->fio',
			'filter'=>Teacher::teachers(),
		],
		/*
		'room',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
