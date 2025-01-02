<?php
/* @var $this Mytable2Controller */
/* @var $model Mytable2 */

$this->breadcrumbs=array(
	'Mytable2s'=>array('index'),
	$model->customer_id,
);

$this->menu=array(
	array('label'=>'List Mytable2', 'url'=>array('index')),
	array('label'=>'Create Mytable2', 'url'=>array('create')),
	array('label'=>'Update Mytable2', 'url'=>array('update', 'id'=>$model->customer_id)),
	array('label'=>'Delete Mytable2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mytable2', 'url'=>array('admin')),
);
?>

<h1>View Mytable2 #<?php echo $model->customer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customer_id',
		'customer_name',
		'register_number',
	),
)); ?>
