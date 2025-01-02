<?php
/* @var $this Mytable2Controller */
/* @var $model Mytable2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mytable2-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'customer_name'); ?>
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