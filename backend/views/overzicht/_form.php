<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use cgsmith\flatpickr\FlatpickrWidget;
use backend\models\Klanten;

/** @var yii\web\View $this */
/** @var backend\models\Overzicht $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="overzicht-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Klanten_id')->dropDownList(ArrayHelper::map(Klanten::find()->select(['klantennaam','ID'])->all(), 'ID', 'displayName'),['class' => 'form-control inline-block']); ?>

    <?= $form->field($model, 'Datum')->widget(
        FlatpickrWidget::class, [
                'model' => $model,
                'attribute' => 'Datum',
                'flatpickrConfig' => [ // This is passed as a JSON object to flatpickr
                    'enableTime' => false,
                    'dateFormat' => 'Y-m-d',
                    'altInput' => true,
                    'altFormat' => 'F j, Y',
                ]
              ]
            
        )
     ?>

    <?= $form->field($model, 'Medewerker')->textInput() ?>

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
