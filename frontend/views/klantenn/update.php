<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Klantenn $model */

$this->title = 'Update Klantenn: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Klantenns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="klantenn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
