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
    <link rel="shortcut icon" href="../web/images/crest.ico" type="image/x-icon">
    <link rel="icon" href="../web/images/crest.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel:400,700' rel='stylesheet' type='text/css'>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <script>(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));</script>


<div class="wrap">

        
                    <h1 class=" page-heading text-center">Sigma Phi Epsilon - Texas Rho</h1>
                    <h3 class=" page-subheading text-center">Baylor University</h3>
                    <!--<img src="../web/images/sigep-branding/purp-letters.png" class="img-responsive" alt="Responsive image">
                    -->
            

        <div class="container">
        <div class="social-media">        
            <a href="https://twitter.com/BaylorSigEp" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @BaylorSigEp</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
           
            <span class="ig-follow" data-id="0628d09523" data-handle="baylorsigep" data-count="true" data-size="medium" data-username="true"></span>
            
            <div class="fb-like" data-href="https://www.facebook.com/baylorsigep" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
        </div>
        <div class="row">
            <div class="col-xs-12 nav-col text-center">
                            <?php
                            echo Nav::widget([
                                'items' => [
                                    ['label' => 'Home', 'url' => ['/site/index']],
                                    [
                                        'label' => 'TX Rho Chapter',
                                        'items' => [
                                            ['label' => 'Meet the Exec Board', 'url' => ['/site/exec']],
                                            ['label' => 'Events/Activities', 'url' => ['/site/events']],
                                            ['label' => 'Campus Involvement', 'url' => ['/site/involvement']],
                                            ['label' => 'Philanthropy', 'url' => ['/site/philanthropy']],
                                            ['label' => 'Our Amazing Sweetheart', 'url' => ['/site/sweetheart']],
                                        ],
                                    ],
                                    [
                                        'label' => 'SigEp History',
                                        'items' => [
                                            ['label' => 'Chapter History', 'url' => ['/site/chapter-history']],
                                            ['label' => 'National History', 'url' => ['/site/national-history']]
                                        ],
                                    ],
                                    ['label' => 'Recruitment', 'url' => ['/site/recruitment']],
                                    ['label' => 'B.M. Scholarship', 'url' => ['/site/balanced-man']],
                                    ['label' => 'Alumni', 'url' => ['/site/alumni']],
                                    ['label' => 'Contact', 'url' => ['/site/contact']],
                                ],

                                'options' => ['class' =>'nav-pills center-pills'],
                            ]);
                            ?>
            </div>
        </div>
    

        <?= $content ?>

    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; SigEp TX Rho <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
