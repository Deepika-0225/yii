<?php
/* @var $this Mytable1Controller */
/* @var $model Mytable1 */

$this->breadcrumbs=array(
	'Mytable1s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mytable1', 'url'=>array('index')),
	array('label'=>'Create Mytable1', 'url'=>array('create')),
	array('label'=>'View Mytable1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mytable1', 'url'=>array('admin')),
);
?>

<h1>Update Mytable1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>