<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Tintuc */

$this->title = 'Create Tintuc';
$this->params['breadcrumbs'][] = ['label' => 'Tintucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tintuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
