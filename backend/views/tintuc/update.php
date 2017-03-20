<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tintuc */

$this->title = 'Update Tintuc: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tintucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tintuc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
