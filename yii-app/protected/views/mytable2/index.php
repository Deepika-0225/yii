<?php
/* @var $this Mytable2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mytable2s',
);

$this->menu=array(
	array('label'=>'Create Mytable2', 'url'=>array('create')),
	array('label'=>'Manage Mytable2', 'url'=>array('admin')),
);
?>

<h1>Mytable2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
