<?php
/* @var $this Mytable2Controller */
/* @var $model Mytable2 */

$this->breadcrumbs=array(
	'Mytable2s'=>array('index'),
	$model->customer_id=>array('view','id'=>$model->customer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mytable2', 'url'=>array('index')),
	array('label'=>'Create Mytable2', 'url'=>array('create')),
	array('label'=>'View Mytable2', 'url'=>array('view', 'id'=>$model->customer_id)),
	array('label'=>'Manage Mytable2', 'url'=>array('admin')),
);
?>

<h1>Update Mytable2 <?php echo $model->customer_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>