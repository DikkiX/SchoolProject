<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Overzicht $model */

$this->title = 'Maak nieuwe registratie';
?>
<div class="overzicht-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
