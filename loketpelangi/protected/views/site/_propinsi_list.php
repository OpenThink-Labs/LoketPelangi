<?php 
if($name == "") {
	$name = "propinsi_id" ;
}
if(count(Lokasi::model()->findByPk($negara_id)->children()->findAll()) > 0) {
$this->widget('bootstrap.widgets.TbSelect2', array(
		'asDropDownList' => true,
		'name' => $name,
		'data'=>CHtml::listData(Lokasi::model()->findByPk($negara_id)->children()->findAll(), 'id', 'nama'),
		'options'=>array(
				'placeholder' => 'Pilih Propinsi',
		),
		'htmlOptions'=>array(
				'prompt'=>'',
				'options'=>array($propinsi_id=>array('selected'=>true))
		)
));
} else { 
?>
<span class="alert alert-error">Tidak ada data Propinsi</span>
<?php } ?>
