<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use cgsmith\flatpickr\FlatpickrWidget;
use frontend\models\Klanten;
?>
<div class="row justify-content-center">
  <div class="col-lg-6 col-md-8 col-sm-12">
    <div class="bg-image"></div>
    <div class="d-flex justify-content-center mt-4">
    </div>
    <div class="card bg-opacity-10 text-white" style="background-color: rgba(32,1,136,0.75);">
      <div class="card-body">
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

    <?= $form->field($model, 'Opmerkingen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Project')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="d-grid gap-2 mt-4">
        <?= Html::submitButton('Opslaan', ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
