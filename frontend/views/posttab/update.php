<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PostTab */

$this->title = 'Update Post Tab: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Post Tabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->sno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-tab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
