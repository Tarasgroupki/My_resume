<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?//$this->title = 'main';?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body onload="auto()">
<?php $this->beginBody() ?>
<div class="wrap">
<div class="four">
<span class="one">___</span>
<span class="two">___</span>
<span class="three">___</span>
</div>
<div class="sidebar">
    <?php
    NavBar::begin([
        'brandLabel' => 'Taras Kryvtsun',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'sidebar',
        ],
    ]);?>
    <?php
    echo Nav::widget([
        'options' => ['class' => 'side'],
        'items' => [
            ['label' => 'Головна', 'url' => ['/skill/index']],
            ['label' => 'Про мене', 'url' => ['/skill/about']],
            ['label' => 'Портфоліо', 'url' => ['/skill/portfolio']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/skill/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <div class="bottom"></div>
</div>
    <div class="container1">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
	<?//$content = NULL;?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Taras Kryvtsun <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
