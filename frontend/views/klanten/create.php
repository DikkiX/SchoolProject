<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Klanten $model */

$this->title = 'Maak nieuwe klant aan';
?>
<div class="bg-image"></div>
<br>
<br>
<br>
<div class="row justify-content-center">
  <div class="col-lg-5 col-md-8 col-sm-12">
    <div class="d-flex justify-content-center mt-6">
    </div>
    <div class="card bg-opacity-10 text-white" style="background-color: rgba(32,1,136,0.75);">
      <div class="card-body">
<div class="klanten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
