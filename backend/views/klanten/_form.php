<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Klanten $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="klanten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>

    <?= $form->field($model, 'klantennaam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefoonnummer')->textInput() ?>

    <?= $form->field($model, 'Adress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Opmerkingen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <br>
        <div class="d-grid gap-2 mt-4">
        <?= Html::submitButton('Opslaan', ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
