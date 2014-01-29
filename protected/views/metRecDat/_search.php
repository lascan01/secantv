<?php
/* @var $this MetRecDatController */
/* @var $model MetRecDat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_met_rec_dat'); ?>
		<?php echo $form->textField($model,'id_met_rec_dat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_des_met_rec_dat'); ?>
		<?php echo $form->textField($model,'tx_des_met_rec_dat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_ficha'); ?>
		<?php echo $form->textField($model,'tx_ficha',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_stat'); ?>
		<?php echo $form->textField($model,'in_stat',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user_crea'); ?>
		<?php echo $form->textField($model,'id_user_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_crea'); ?>
		<?php echo $form->textField($model,'fe_crea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user_modif'); ?>
		<?php echo $form->textField($model,'id_user_modif'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fe_modif'); ?>
		<?php echo $form->textField($model,'fe_modif'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->