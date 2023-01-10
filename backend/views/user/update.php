<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\User $model */

$this->title = 'Update User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
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
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
