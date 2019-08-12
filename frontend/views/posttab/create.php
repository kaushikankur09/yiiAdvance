<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PostTab */

$this->title = 'Create Post Tab';
$this->params['breadcrumbs'][] = ['label' => 'Post Tabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-tab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
