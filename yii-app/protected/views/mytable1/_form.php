<?php
/* @var $this Mytable1Controller */
/* @var $model Mytable1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mytable1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'register_time'); ?>
		<?php echo $form->textField($model,'register_time'); ?>
		<?php echo $form->error($model,'register_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'register_number'); ?>
		<?php echo $form->textField($model,'register_number'); ?>
		<?php echo $form->error($model,'register_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->