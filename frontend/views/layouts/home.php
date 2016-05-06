<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\BaseUrl;
use yii\helpers\Url;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Botosani Merita!',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    $menuItems[] = [
        'label' => 'Mesaje',
        'url' => ['/mesaje/index'],
        'linkOptions' => ['data-method' => 'post']
    ];
    $menuItems[] = [
        'label' => 'Proiecte',
        'url' => ['/proiecte/index'],
        'linkOptions' => ['data-method' => 'post']
    ];
    $menuItems[] = [
        'label' => 'Probleme',
        'url' => ['/proiecte/index'],
        'linkOptions' => ['data-method' => 'post']
    ];
    $menuItems[] = [
        'label' => 'Contact',
        'url' => ['/site/contact'],
        'linkOptions' => ['data-method' => 'post']
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">Ne poţi contacta oricând îţi doreşti!</h3>
                    <h5 class="light regular light-white">Nu ezita să ne contactezi, noi îți transformăm ideea în realitate!</h5>
                    <?= Html::button('Contactează-ne!', ['value'=>Url::to('index.php?r=site/contact'), 'class' => 'btn btn-warning', 'id'=>'contact']) ?>
                        <?php
                            Modal::begin([
                                'header'=>'<h4>Contact</h4>',
                                'id' => 'modalcontact',
                                'size'=>'modal-lg',]);
                            echo "<div id='modalContact'></div>";
                            Modal::end();
                        ?>

                <div class="row">
               <div class="init">
                        <h3 class="white">Iniţiatori</h3>
                        <div class="col-sm-6 text-center-mobile">
                            <h4 class="regular white">Tekit</h4>
                            <img src="img/tekit.png">
                        </div>
                        <div class="col-sm-6 text-center-mobile">
                            <h4 class="regular white">DJST Botoşani</h4>
                            <img src="img/djst.png">
                        </div>
                    </div> 
                
            </div>
                </div>
                <div class="col-sm-6 text-center-mobile">
                    <ul class="social-footer list-inline">
                    <li><img src="img/footer_logo.png"></li>
                    <li><a href="https://www.facebook.com/TEKIT.RO"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/tekit_Ro"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/101069636725606561622"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/tekit---the-best-way-of-technology"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://instagram.com/tekit_ro"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row bottom-footer text-center-mobile">
                <div class="col-sm-8">
                     <div id="fb-root"></div>
                    <p style='color:#ffffff;'>&copy; 2015 Toate drepturile rezervate. <a href="http://www.tekit.ro/">Botoşani Merită!</a></p>
                </div>
            </div>
        </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
