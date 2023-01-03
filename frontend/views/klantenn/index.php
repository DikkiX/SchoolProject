<?php

use frontend\models\Klantenn;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KlantennSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Klantenns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klantenn-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Klantenn', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Naam',
            'winkel',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Klantenn $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
