<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fio')); ?>:</b>
	<?php echo CHtml::encode($data->fio); ?>
	<br />


</div>