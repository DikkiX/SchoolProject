<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Overzicht $model */

$this->title = 'Update Overzicht: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Overzichts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="overzicht-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
