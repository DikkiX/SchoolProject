<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Klantenn $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="klantenn-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Naam')->textInput() ?>

    <?= $form->field($model, 'winkel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
