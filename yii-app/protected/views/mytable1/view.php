<?php
/* @var $this Mytable1Controller */
/* @var $model Mytable1 */

$this->breadcrumbs=array(
	'Mytable1s'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Mytable1', 'url'=>array('index')),
	array('label'=>'Create Mytable1', 'url'=>array('create')),
	array('label'=>'Update Mytable1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mytable1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mytable1', 'url'=>array('admin')),
);
?>

<h1>View Mytable1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'location',
		'register_time',
		'register_number',
	),
)); ?>
