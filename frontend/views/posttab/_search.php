<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PostTabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-tab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sno') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'qualification') ?>

    <?= $form->field($model, 'gender') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
