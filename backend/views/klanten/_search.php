<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KlantenSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="klanten-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'klantennaam') ?>

    <?= $form->field($model, 'telefoonnummer') ?>

    <?= $form->field($model, 'Adress') ?>

    <?= $form->field($model, 'Opmerkingen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
