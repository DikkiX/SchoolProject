<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Overzicht $model */
$this->title = 'Bijwerken activiteit: ' . $this->title = $model->Medewerker;
?>
<div class="overzicht-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
