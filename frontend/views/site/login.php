<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use promocat\models\TwoFaForm;
use frontend\assets\LoginAsset;
use promocat\twofa\widgets\TwoFaQr;







?>
<div class="row justify-content-center">
  <div class="col-lg-4 col-md-8 col-sm-12">
    <div class="bg-image"></div>
    <div class="d-flex justify-content-center mt-4">
      <img src="https://dijkstraenvanpuffelen.nl/wp-content/uploads/2018/07/logo-Dijksta-en-van-puffelen.png">
    </div>
    <div class="card bg-opacity-10 text-white" style="background-color: rgba(32,1,136,0.75);">
      <div class="card-body">
        <div style="text-align: center" class="form">
          <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true], ) ?>  
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
              <div>
                Wachtwoord vergeten? <?= Html::a('Opnieuw instellen', ['site/request-password-reset']) ?>
              </div>
              <div>
                Nieuwe verificatie mail nodig? <?= Html::a('Opnieuw versturen', ['site/resend-verification-email']) ?>
              </div>

            </div>
            <div class="d-grid gap-2 mt-4">
              <?= Html::submitButton('Inloggen', ['class' => 'btn btn-warning', 'name' => 'login-button',]) ?>
              
            </div>

          <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>