<?php
	use yii\widgets\ActiveForm;
	use yii\helpers\Html;
?>
<div class="container">
	<h1>Action Test</h1>
	<?php if (Yii::$app->session->hasFlash('success')) : ?>
		<div class="alert alert-success alert-dismissible" role="alert">
			<?= Yii::$app->session->getFlash('success'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<?php if (Yii::$app->session->hasFlash('error')) : ?>
		<div class="alert alert-danger alert-dismissible" role="alert">
			<?= Yii::$app->session->getFlash('error'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<?php
		$form = ActiveForm::begin([
			'options' => [
					'class' => 'form-horizontal',
					'id' => 'myForm',
				]
			]);
		echo $form->field($model, 'name');
		echo $form->field($model, 'email')
			->input('email');
		echo $form->field($model, 'text')
			->textarea(['rows' => 10]);
		echo Html::submitButton('Отправить', [
				'class' => 'btn btn-success'
			]);
		ActiveForm::end();
	?>
</div>