<?php
/* @var $this Mytable1Controller */
/* @var $data Mytable1 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('register_time')); ?>:</b>
	<?php echo CHtml::encode($data->register_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('register_number')); ?>:</b>
	<?php echo CHtml::encode($data->register_number); ?>
	<br />


</div>