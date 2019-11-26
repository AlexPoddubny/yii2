<?php
	
	/* @var $this \yii\web\View */
	/* @var $content string */
	
	use app\widgets\Alert;
	use yii\helpers\Html;
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use yii\helpers\Url;
	use yii\widgets\Breadcrumbs;
	use app\assets\AppAsset;
	
	AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<?php $this->head() ?>
	<title>Document</title>
</head>
<body>
<?php $this->beginBody() ?>
	<div class="wrap">
		<div class="container">
			<ul class="nav nav-pills">
				<li class="nav-item active">
					<?= Html::a('Main Page', '/') ?>
				</li>
				<li class="nav-item">
					<?= Html::a('All Posts', '/posts') ?>
				</li>
				<li class="nav-item">
					<?= Html::a('Post', '/post/show') ?>
				</li>
			</ul>
			<?= $content ?>
		</div>
	</div>
	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>