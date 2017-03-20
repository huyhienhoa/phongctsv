<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tintuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tintuc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tieude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motangangon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motachitiet')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'anhminhhoa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngaytao')->textInput() ?>

    <?= $form->field($model, 'ngaysua')->textInput() ?>

    <?= $form->field($model, 'noibat')->textInput() ?>

    <?= $form->field($model, 'luotxem')->textInput() ?>

    <?= $form->field($model, 'loaitin_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
