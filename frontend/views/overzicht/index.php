<?php

use frontend\models\Overzicht;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\export\ExportMenu;


/** @var yii\web\View $this */
/** @var frontend\models\OverzichtSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Overzicht urenregistraties';
?>
<div class="row justify-content-center">
  <div class="col-lg-12 col-md-8 col-sm-12">
    <div class="bg-image"></div>
    <div class="d-flex justify-content-center mt-4">
    </div>
    <div class="card bg-opacity-10 text-white" style="background-color: rgba(32,1,136,0.75);">
      <div class="card-body">


<div class="overzicht-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Maak nieuwe registratie', ['create'], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Exporteer naar PDF', ['overzicht/export-to-pdf', 'model'=>get_class($searchModel),],['class' => 'btn btn-danger'], ['target'=>'_blank'],) ?>
        <br>
    </p>
<?php
$gridColumns = [
    'Datum',
    'klanten.klantennaam',
    'Medewerker',
    'Activiteit',
    'Uren',
    'Declarabel',
    'Opmerkingen',
    'Project'

];

echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'target' => ExportMenu::TARGET_SELF,
    'exportConfig' => [
        ExportMenu::FORMAT_PDF => false,
    ],
]);
?>
    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            [
                'attribute' => 'Datum',
                'label' => 'Datum',
                'format' => 'datetime',
                'value' => 'Datum',
                'filter' => \cgsmith\flatpickr\FlatpickrWidget::widget(
                    [
                        'model' => $searchModel,
                        'attribute' => 'Datum',
                        'flatpickrConfig' => [
                            'enableTime' => false,
                            'dateFormat' => 'Y-m-d',
                            'altInput' => true,
                            'altFormat' => 'F j, Y',
                        ],
                    ]
                )
            ],
            'klanten.klantennaam',
            'Medewerker',
            'Activiteit',
            'Uren',
            'Declarabel',
            'Opmerkingen',
            'Project',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Overzicht $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],

        ],
    ]); ?>
</div>

</div>
<style>

.pull-right
{
    right: 0;
  left: auto;
}
    </style>
