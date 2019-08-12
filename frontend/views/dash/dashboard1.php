<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Dashboard1';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/dashboard.js',['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="site-contact">
    <?php $form = ActiveForm::begin(['id' => 'dashboard1-form']); ?>
    <?= $form->field($model, 'name')->textInput(['autofocus' => true]);?>
    <?= $form->field($model, 'password')->passwordInput()->hint('Password should be within A-Za-z0-9')->label('Password Hint') ?>
    <?= $form->field($model, 'TPass')->checkbox(array('label'=>'10th Pass')); ?>
    <?= $form->field($model, 'TwPass')->checkbox(array('label'=>'12th Pass')); ?>
    <?= $form->field($model, 'GPass')->checkbox(array('label'=>'Graduate')); ?>
    <?= $form->field($model, 'PGPass')->checkbox(array('label'=>'Post Graduate')); ?>
    <?= Html::tag('p', "Gender", ['class' => 'username','style'=>'font-weight:bold']) ?>
    <?= $form->field($model, 'male')->radio(array('label'=>'Male','value'=>'M','name'=>'gender','checked'=>true))->label('gender'); ?>
    <?= $form->field($model, 'female')->radio(array('label'=>'FeMale','value'=>'F','name'=>'gender'))->label('gender');; ?>
    <?= Html::submitButton('Submit', ['class'=> 'btn btn-primary']); ?>
    <?php ActiveForm::end(); ?>
</div>
