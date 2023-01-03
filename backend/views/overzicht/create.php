<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Overzicht $model */

$this->title = 'Create Overzicht';
$this->params['breadcrumbs'][] = ['label' => 'Overzichts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="overzicht-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
