<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Klanten $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="klanten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID')->textInput() ?>
    <br>
    <?= $form->field($model, 'klantennaam')->textInput() ?>
    <br>
    <?= $form->field($model, 'telefoonnummer')->textInput() ?>
    <br>
    <?= $form->field($model, 'Adress')->textInput() ?>
    <br>
    <?= $form->field($model, 'Opmerkingen')->textInput() ?>
    <br>
    <div class="form-group">
    <div class="d-grid gap-2 mt-4">
        <?= Html::submitButton('Opslaan', ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
