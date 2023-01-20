<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-light  bg-dark fixed-left',
        ],
    ]);
    if (Yii::$app->user->isGuest) {
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
    
        ];   
    }if ( Yii::$app->user->can('admin') ){
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Overzicht', 'url' => ['/overzicht/index']],
            ['label' => 'Klanten', 'url' => ['/klanten/index']],

            [
                'label' => 'Gebruikers Interface',
                'items' => [
                    ['label' => 'Gebruikers', 'url' => '/Schoolproject/backend/web/index.php?r=admin/user'],
                     ['label' => 'gebruikers aanmaken', 'url' => '/Schoolproject/backend/web/index.php?r=admin/user/signup'],
                     ['label' => 'Assignments', 'url' => '/Schoolproject/backend/web/index.php?r=admin/assignment'],


                ]],
                ],

                
    ]);};
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/admin/user/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Uitloggen (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['']) ? $this->params[''] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
