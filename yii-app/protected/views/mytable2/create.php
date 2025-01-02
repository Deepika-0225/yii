<?php
/* @var $this Mytable2Controller */
/* @var $model Mytable2 */

$this->breadcrumbs=array(
	'Mytable2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mytable2', 'url'=>array('index')),
	array('label'=>'Manage Mytable2', 'url'=>array('admin')),
);
?>

<h1>Create Mytable2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>