<h1>Show Action</h1>
<?php
	use app\controllers\AppController;
	use app\widgets\MyWidget;
?>
<?php MyWidget::begin();?>
	<h1>привет, мир</h1>
<?php MyWidget::end();
	foreach ($cats as $c){
		echo '<ul>';
			echo '<li>' . 'id: ' . $c->id . ': ' . $c->title . '</li>';
			foreach ($c->products as $p){
				echo '<ul>';
					echo '<li>' . $p->title . '</li>';
				echo '</ul>';
			}
		echo '</ul>';
	}
?>
<!--<button class="btn btn-success" id="btn">Click me!</button>-->
<!---->
<?php
//	$js = <<<JS
//		$('#btn').on('click', function(){
//			$.ajax({
//				url: '/posts',
//				data: {test:'123'},
//				type: 'POST',
//				success: function() {
//				    console.log('URRA!');
//				},
//				error: function() {
//				    alert('Error!');
//				}
//			});
//		});
//JS;
//
//	$this->registerJs($js);
//?>