<?php
/* @var $this DgstController */
/* @var $model Dgst */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dgst-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'day_id'); ?>
		<?php echo $form->dropDownList($model,'day_id',Day::days()); ?>
		<?php echo $form->error($model,'day_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->dropDownList($model,'group_id',Group::groups()); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php echo $form->dropDownList($model,'subject_id',Subject::subjects()); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teacher_id'); ?>
		<?php echo $form->dropDownList($model,'teacher_id',Teacher::teachers()); ?>
		<?php echo $form->error($model,'teacher_id'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo '2-O`qituvchi'; ?>
<!--		--><?php //echo CHtml::button('2-O`qituvchi', array(
//			'ajax' => array(
//				'type' => 'get',
//				'update' => '#second_teacher',
//				'data' => 'js:$("#teachers").val()'
//			)
//		)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row" id="second_teacher">-->
<!--		--><?php //echo $form->labelEx($model,'teacher2_id'); ?>
<!--		--><?php //echo $form->dropDownList($model,'teacher2_id', Teacher::teachers()); ?>
<!--		--><?php //echo $form->error($model,'teacher2_id'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'para'); ?>
		<?php echo $form->dropDownList($model,'para',Dgst::para()); ?>
		<?php echo $form->error($model,'para'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room'); ?>
		<?php echo $form->textField($model,'room',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'room'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'megalka'); ?>
		<?php echo $form->dropDownList($model,'megalka',Dgst::megalka()); ?>
		<?php echo $form->error($model,'megalka'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->