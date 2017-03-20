<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Loaitin */

$this->title = 'Create Loaitin';
$this->params['breadcrumbs'][] = ['label' => 'Loaitins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaitin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
