<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Klantenn $model */

$this->title = 'Create Klantenn';
$this->params['breadcrumbs'][] = ['label' => 'Klantenns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klantenn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
