<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostTabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Post Tabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-tab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post Tab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sno',
            'name',
            'password',
            'qualification',
            'gender',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
