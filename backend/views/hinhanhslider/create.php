<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Hinhanhslider */

$this->title = 'Create Hinhanhslider';
$this->params['breadcrumbs'][] = ['label' => 'Hinhanhsliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hinhanhslider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
