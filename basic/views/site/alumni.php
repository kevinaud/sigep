<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$pageTitle = 'Alumni';
$this->title = 'SigEp, Baylor University - '.$pageTitle;
?>
<div class="site-alumni">
	<div class="row">
		<div class="col-xs-12">
    		<h1 class="text-center page-title"><?= Html::encode($pageTitle) ?></h1>
    	</div>
    	<div class="col-xs-8 col-xs-offset-2">
    		<h3 class="text-center">
    			Please fill out the form below to subscribe to our chapter mailing list.
    		</h3>
    		<iframe src="https://docs.google.com/forms/d/1Tw8-h5fr3b3eIhM-khqP8QDdKrJ1KaA7Jnbo7sWgp1Y/viewform?embedded=true" 
    				width="760" height="500" frameborder="0" marginheight="0" marginwidth="0" class="center-block">
    			Loading...
    		</iframe>
    	</div>
    </div>
</div>
