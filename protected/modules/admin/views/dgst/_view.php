<?php
/* @var $this DgstController */
/* @var $data Dgst */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day_id')); ?>:</b>
	<?php echo CHtml::encode($data->day->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher->fio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('para')); ?>:</b>
	<?php echo CHtml::encode($data->para); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room')); ?>:</b>
	<?php echo CHtml::encode($data->room); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('megalka')); ?>:</b>
	<?php echo CHtml::encode($data->megalka); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher2_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher->fio); ?>
	<br />

</div>