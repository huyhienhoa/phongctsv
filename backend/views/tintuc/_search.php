<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\searchs\TintucSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tintuc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tieude') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'motangangon') ?>

    <?= $form->field($model, 'motachitiet') ?>

    <?php // echo $form->field($model, 'anhminhhoa') ?>

    <?php // echo $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'ngaysua') ?>

    <?php // echo $form->field($model, 'noibat') ?>

    <?php // echo $form->field($model, 'luotxem') ?>

    <?php // echo $form->field($model, 'loaitin_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
