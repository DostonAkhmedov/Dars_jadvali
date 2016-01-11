<?php
/* @var $this SubjectTeacherController */
/* @var $data SubjectTeacher */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher->fio); ?>
	<br />


</div>