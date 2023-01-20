<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Overzicht $model */

$this->title = 'Bijwerken activiteit: ' . $this->title = $model->Medewerker;
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
<div class="overzicht-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
