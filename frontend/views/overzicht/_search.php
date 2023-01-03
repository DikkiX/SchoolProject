<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\OverzichtSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="overzicht-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Datum') ?>

    <?= $form->field($model, 'Klanten_id') ?>

    <?= $form->field($model, 'Medewerker') ?>

    <?= $form->field($model, 'Activiteit') ?>

    <?php // echo $form->field($model, 'Uren') ?>

    <?php // echo $form->field($model, 'Declarabel') ?>

    <?php // echo $form->field($model, 'Bonusmwr') ?>

    <?php // echo $form->field($model, 'Opmerkingen') ?>

    <?php // echo $form->field($model, 'Project') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
