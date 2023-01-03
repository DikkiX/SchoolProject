<?php

use frontend\models\Klanten;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KlantenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Klantenoverzicht';
?>
<div class="row justify-content-center">
  <div class="col-lg-12 col-md-8 col-sm-12">
    <div class="bg-image"></div>
    <div class="d-flex justify-content-center mt-4">
    </div>
    <div class="card bg-opacity-10 text-white" style="background-color: rgba(32,1,136,0.75);">
      <div class="card-body">
<div class="site-index">

    <div  bg-transparent">
<div class="klanten-index">

<div class="klanten-index">
<div class="table-responsive">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Maak nieuwe klant aan', ['create'], ['class' => 'btn btn-warning']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'klantennaam',
            'telefoonnummer',
            'Adress',
            'Opmerkingen',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Klanten $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>
</div>

</div>
