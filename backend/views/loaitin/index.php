<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\searchs\\LoaitinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loaitins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaitin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Loaitin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tieude',
            'code',
            'motangangon',
            'anhminhhoa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
