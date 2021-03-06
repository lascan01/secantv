<?php
/* @var $this MetodoRecDatController */
/* @var $data MetodoRecDat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_metodo_rec_dat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_metodo_rec_dat), array('view', 'id'=>$data->id_metodo_rec_dat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_met_rec_dat')); ?>:</b>
	<?php echo CHtml::encode($data->id_met_rec_dat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tx_des_metodo')); ?>:</b>
	<?php echo CHtml::encode($data->tx_des_metodo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_stat')); ?>:</b>
	<?php echo CHtml::encode($data->in_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_crea')); ?>:</b>
	<?php echo CHtml::encode($data->id_user_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_crea')); ?>:</b>
	<?php echo CHtml::encode($data->fe_crea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_modif')); ?>:</b>
	<?php echo CHtml::encode($data->id_user_modif); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fe_modif')); ?>:</b>
	<?php echo CHtml::encode($data->fe_modif); ?>
	<br />

	*/ ?>

</div>