<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Overzicht $model */
\yii\web\YiiAsset::register($this);
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
<div class="overzicht-view">

    <h1><?= Html::encode($this->title = 'Bekijken activiteit: ' . $this->title = $model->Medewerker) ?></h1>

    <p>
        <?= Html::a('Bijwerken', ['update', 'ID' => $model->ID], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Verwijderen', ['delete', 'ID' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Datum',
            'Klanten_id',
            'Medewerker',
            'Activiteit',
            'Uren',
            'Declarabel',
            'Bonusmwr',
            'Opmerkingen',
            'Project',
        ],
    ]) ?>

</div>
