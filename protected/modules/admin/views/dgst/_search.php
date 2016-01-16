<?php
/* @var $this DgstController */
/* @var $model Dgst */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'day_id'); ?>
		<?php echo $form->dropDownList($model,'day_id',Day::days()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_id'); ?>
		<?php echo $form->dropDownList($model,'group_id',Group::groups()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject_id'); ?>
		<?php echo $form->dropDownList($model,'subject_id',Subject::subjects()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teacher_id'); ?>
		<?php echo $form->dropDownList($model,'teacher_id',Teacher::teachers()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'para'); ?>
		<?php echo $form->dropDownList($model,'para',Dgst::para()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'room'); ?>
		<?php echo $form->textField($model,'room',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'megalka'); ?>
		<?php echo $form->dropDownList($model,'megalka',Dgst::megalka()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teacher2_id'); ?>
		<?php echo $form->dropDownList($model,'teacher2_id', Teacher::teachers()); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->