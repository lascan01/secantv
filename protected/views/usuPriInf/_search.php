<?php
/* @var $this UsuPriInfController */
/* @var $model UsuPriInf */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_usu_pri_inf'); ?>
		<?php echo $form->textField($model,'id_usu_pri_inf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tx_des_usu_pri_inf'); ?>
		<?php echo $form->textField($model,'tx_des_usu_pri_inf',array('size'=>60,'maxlength'=>100)); ?>
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