<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/dashboard.js',['depends' => [yii\web\JqueryAsset::className()]]);
?>
<div class="site-contact">
    <?php $form = ActiveForm::begin(['id' => 'dashboard-form']); ?>
    <div style="width:100%;border:0px solid red">
        <?= Html::img('@web/img/123.jpg', ['style' => 'width:100%','id'=>'testImg']); ?>
        <?= Html::img('@web/img/456.jpg', ['style' => 'width:100%;display:none;','id'=>'testImg1']); ?>
    </div>
    <?= $form->field($model, 'name')->textInput(['autofocus' => true]);?>
    <?= $form->field($model, 'password')->passwordInput()->hint('Password should be within A-Za-z0-9')->label('Password Hint') ?>
    <?php echo $form->field($model, 'qualification[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
    <?php ActiveForm::end(); ?>
</div>
