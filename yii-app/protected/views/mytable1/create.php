<?php
/* @var $this Mytable1Controller */
/* @var $model Mytable1 */

$this->breadcrumbs=array(
	'Mytable1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mytable1', 'url'=>array('index')),
	array('label'=>'Manage Mytable1', 'url'=>array('admin')),
);
?>

<h1>Create Mytable1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>