<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Loaitin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loaitin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tieude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motangangon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anhminhhoa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
