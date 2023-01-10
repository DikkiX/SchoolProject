<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Overzicht $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="overzicht-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Datum')->textInput() ?>

    <?= $form->field($model, 'Klanten_id')->textInput() ?>

    <?= $form->field($model, 'Medewerker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Activiteit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Uren')->textInput() ?>

    <?= $form->field($model, 'Declarabel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bonusmwr')->textInput() ?>

    <?= $form->field($model, 'Opmerkingen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Project')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
