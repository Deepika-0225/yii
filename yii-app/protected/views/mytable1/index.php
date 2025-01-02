<?php
/* @var $this Mytable1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mytable1s',
);

$this->menu=array(
	array('label'=>'Create Mytable1', 'url'=>array('create')),
	array('label'=>'Manage Mytable1', 'url'=>array('admin')),
);
?>

<h1>Mytable1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
