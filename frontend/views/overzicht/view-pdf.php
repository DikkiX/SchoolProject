<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->ID;
?>
<div class="overzicht-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'Datum',
            'klanten.klantennaam',
            'Medewerker',
            'Activiteit',
            'Uren',
            'Declarabel',
            'Opmerkingen',
            'Project',
        ],
    ]) ?>

</div>
