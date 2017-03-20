<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Filedinhkem */

$this->title = 'Create Filedinhkem';
$this->params['breadcrumbs'][] = ['label' => 'Filedinhkems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filedinhkem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
